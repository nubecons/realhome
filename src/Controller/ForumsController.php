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
		$this->Auth->allow(['index','ask']);
    }
    public function index() {
        $this->loadModel('ForumCategories');
        $ForumCategories = $this->ForumCategories->find()->all();
        $this->set('ForumCategories', $ForumCategories);
        
    }
    public function ask() {
        $this->loadModel('ForumCategories');
        $ForumCategories = $this->ForumCategories->find()->all();
        $this->set('ForumCategories', $ForumCategories);
        
        $this->loadModel('Cities');
	$Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
        $this->set('Cities', $Cities);
        
        $this->loadModel('ForumCategories');
	$ForumCategoriesList = $this->ForumCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => '0'])->toArray();
        $this->set('ForumCategoriesList', $ForumCategoriesList);
    }

}
