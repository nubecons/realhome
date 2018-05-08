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
    public function index() {}
    
    public function blogDetails(){}

}
