<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class PartnersController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'partners' . DS;
        $this->loadComponent('Upload');
	    $this->Auth->allow(['index']);
    }

   

    public function index() {
		
		 $this->set('is_partner', '1');
		
	    $this->loadModel('PartnerCategories');
	    $PartnerCategories = $this->PartnerCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
        $this->set('PartnerCategories', $PartnerCategories);
		
		
		
		
		$conditions = [] ;
		$query = $this->Partners->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'DESC', ];
        $Partners = $this->paginate($query, array('url' => '/Partners/'));
        $this->set('Partners', $Partners);
        
       /* $Partners = $this->Partners->find('all')->where()->toArray();
        $this->set('Partners', $Partners);*/
    }

 
    public function add(){
	
	  $this->set('title', 'Add Partner');
	  $this->loadModel('PartnerCategories');
	  $PartnerCategories = $this->PartnerCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
      $this->set('PartnerCategories', $PartnerCategories);
	  
	  $PartnerCategorieslvl2 =[];
	  $PartnerCategorieslvl3 =[];
	 
	  foreach($PartnerCategories as $key => $val){
		      
			  $PartnerCategorieslvl2[$val] = $this->PartnerCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key])->toArray();
		   
		     foreach($PartnerCategorieslvl2[$val] as $key2 => $val2){
		              $PartnerCategorieslvl3[$val2] = $this->PartnerCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key2])->toArray();
		      }
		 
		  }
		  
		  
	  $this->set('PartnerCategorieslvl2', $PartnerCategorieslvl2);
	  $this->set('PartnerCategorieslvl3', $PartnerCategorieslvl3);
	  
	  
	  $this->loadModel('Cities');
	  $Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
      $this->set('Cities', $Cities);
	  
	  $Partner = $this->Partners->newEntity();
	  
	  if ($this->request->is('post'))
		{
			 $data = $this->request->data;
            
			 
            
			if (!empty($this->request->data['image_file']['name']))
			{
				$result = $this->Upload->upload($this->request->data['image_file'], $this->product_file_path, null,  null ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($this->request->data['image_file']);
				}
				else
				{
					$this->request->data['image'] = $this->Upload->result; 
					
				}
			}
		
				$Partner= $this->Partners->patchEntity($Partner, $this->request->data);
			
				if ($this->Partners->save($Partner))
				{
					//$this->Flash->success(__('File uploaded successfully.'));
					$this->redirect(['action' => 'index']);
				}
		}
		
			
			
	}
	
	public function edit($id = null){
	
	  $this->set('title', 'Update Partner');
	  $this->loadModel('PartnerCategories');
	  $PartnerCategories = $this->PartnerCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
      $this->set('PartnerCategories', $PartnerCategories);
	  
	  $PartnerCategorieslvl2 =[];
	  $PartnerCategorieslvl3 =[];
	 
	  foreach($PartnerCategories as $key => $val){
		      
			  $PartnerCategorieslvl2[$val] = $this->PartnerCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key])->toArray();
		   
		     foreach($PartnerCategorieslvl2[$val] as $key2 => $val2){
		              $PartnerCategorieslvl3[$val2] = $this->PartnerCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key2])->toArray();
		      }
		 
		  }
		  
		  
	  $this->set('PartnerCategorieslvl2', $PartnerCategorieslvl2);
	  $this->set('PartnerCategorieslvl3', $PartnerCategorieslvl3);
	  
	  
	  $this->loadModel('Cities');
	  $Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
      $this->set('Cities', $Cities);
	  
	  $Partner = $this->Partners->get($id);
	  $this->set('Partner' ,$Partner);
	  
	  if ($this->request->is('post'))
		{
			 $data = $this->request->data;
            
			 
            
			if (!empty($this->request->data['image_file']['name']))
			{
				$result = $this->Upload->upload($this->request->data['image_file'], $this->product_file_path, null,  null ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($this->request->data['image_file']);
				}
				else
				{
					$this->request->data['image'] = $this->Upload->result; 
					
				}
			}
		
				
				$Partner= $this->Partners->patchEntity($Partner, $this->request->data);
			
				if ($this->Partners->save($Partner))
				{
					//$this->Flash->success(__('File uploaded successfully.'));
					$this->redirect(['action' => 'index']);
				}
		}
		
			
			
	}
	


}
