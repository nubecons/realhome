<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use App\Utility\Lists;
use Cake\Datasource\ConnectionManager;

class ForumsController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'maps' . DS;
        $this->loadComponent('Upload');
		$this->Auth->allow(['index','ask','view']);
    }
    public function index() {
         $this->set('is_forum', '1');
        $this->loadModel('ForumCategories');
        $ForumCategories = $this->ForumCategories->find()->all();
        $this->set('ForumCategories', $ForumCategories);
        
    }
	
	
	 public function view($cat_id = null)
    {
              $this->set('is_forum', '1');
	        $this->loadModel('ForumCategories');
			$ForumCategories = $this->ForumCategories->find()->all();
			$this->set('ForumCategories', $ForumCategories);
			
			$this->loadModel('Cities');
			$Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
			$this->set('Cities', $Cities);
			
			$this->loadModel('ForumCategories');
			$ForumCategoriesList = $this->ForumCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => '0'])->toArray();
			$this->set('ForumCategoriesList', $ForumCategoriesList);
		
		    
			$conditions['status'] = 'ACTIVE';
		
		 if($cat_id){
			 
			 $conditions['forum_category_id'] = $cat_id;
			 
			//$conditions[] = '( ( Forums.forum_category_id  = ' . $cat_id . ') OR ( Forums.forum_sub_category_id 	 = ' . $cat_id.'))';
			}
		
		if ($this->request->is('post'))
		{
			
			$this->Session->delete('SearchForumData');
			$this->Session->delete('SearchForumCond');
			
			$data = $this->request->data;
			$this->Session->write('SearchForumData', $data);
			
             $this->Session->write('SearchForumCond', $conditions);
		
		}

		if ($this->Session->check('SearchForumCond')) {
            $conditions = $this->Session->read('SearchForumCond');
        }
		
		
		
		$query = $this->Forums->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'DESC', ];
        $Forums = $this->paginate($query, array('url' => '/Forums/'));
        $this->set('Forums', $Forums);
		
	
    }
	
    public function ask() {
		 $this->set('is_forum', '1');
			$this->loadModel('ForumCategories');
			$ForumCategories = $this->ForumCategories->find()->all();
			$this->set('ForumCategories', $ForumCategories);
			
			$this->loadModel('Cities');
			$Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
			$this->set('Cities', $Cities);
			
			$this->loadModel('ForumCategories');
			$ForumCategoriesList = $this->ForumCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => '0'])->toArray();
			$this->set('ForumCategoriesList', $ForumCategoriesList);
			
			$forum = $this->Forums->newEntity();
	  		$this->set('forum', $forum);
			
			if ($this->request->is('post'))
			{
				$data = $this->request->data;
				
				if(!$this->sUser){
				
				if(isset($data['membership_status']) && $data['membership_status'] == 1){
				
				
				$user = $this->Auth->identify();
				
				
				if(!$user){
				
				$this->Flash->error(__('Sorry, we did not recognize that email or password'));
				return;
				
				}
				$user_id = $user['id'];
				
				}elseif(isset($data['membership_status']) && $data['membership_status'] == 2){
				
				$udata = [] ;
				$udata['first_name'] = $this->request->data['contact_first_name'];
				$udata['last_name'] =  $this->request->data['contact_last_name'];
				$udata['mobile'] = $this->request->data['contact_mobile'];
				$udata['email'] = $this->request->data['contact_email'];
				$udata['password'] = $this->request->data['contact_password'];
				$udata['group_id'] = 2 ;
				
				$this->loadModel('Users');							
				$result = $this->Users->create_account($udata);
				
			
				if($result['status'] == 'fail'){
				
				$this->Flash->error(__($result['message']));
				return;
				
				}else{
					$user_id = $result['id'];
					}
				
				}
				}else{
					$user_id = $this->sUser['id'];
					}
				
				
				
				$forum->user_id = $user_id ;
				$forum->status = "ACTIVE";
				
				$forum= $this->Forums->patchEntity($forum, $this->request->data);
				//return ;
				if ($this->Forums->save($forum))
				{
					$this->Flash->success(__('Data saved successfully.'));
					$this->redirect(['action' => 'ask']);
				}
				
			
			
			
			}else{
			
			$this->request->data['membership_status'] = ($this->sUser)?2:1 ;
			
			}
			
    }

}
