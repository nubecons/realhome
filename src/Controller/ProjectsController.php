<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class ProjectsController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'partners' . DS;
        $this->loadComponent('Upload');
	    $this->Auth->allow(['index','searchElement']);
    }

    public function view() {
	}

    public function index() {}
       function searchElement() {    
        $this->render();
    }


}
