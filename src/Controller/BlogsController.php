<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use App\Utility\Lists;
use Cake\Datasource\ConnectionManager;

class BlogsController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'maps' . DS;
        $this->loadComponent('Upload');
		$this->Auth->allow(['index','blogDetails']);
    }
    public function index(){
            $this->loadModel('BlogCategories');
	    $BlogCategories = $this->BlogCategories->find('all')->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
            $this->set('BlogCategories', $BlogCategories);
            
	    $Blogs = $this->Blogs->find('all')->toArray();
            $this->set('Blogs', $Blogs);
		
    }
    
    public function blogDetails($blog_id =null){
        
                    $this->loadModel('BlogCategories');
	    $BlogCategories = $this->BlogCategories->find('all')->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
            $this->set('BlogCategories', $BlogCategories);
            
             $Blogs = $this->Blogs->find('all')->toArray();
            $this->set('Blogs', $Blogs);
            
	    $Blog = $this->Blogs->find()->where(['id' => $blog_id])->first();
            $this->set('Blog', $Blog);
    }

}
