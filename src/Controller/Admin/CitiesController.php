<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use App\Utility\Lists;
use Cake\Datasource\ConnectionManager;

class CitiesController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'maps' . DS;
        $this->loadComponent('Upload');
    }

    public function index() {
        $Cities = $this->Cities->find('all')->where(['country_code' => 'pk'])->toArray();
        $this->set('Cities', $Cities);
    }

    public function add() {
        $this->set( 'CitiesStatus' , $this->Cities->CitiesStatus);
        $Cities = $this->Cities->newEntity();
        if ($this->request->is('post'))
		{
			 $data = $this->request->data;

				$Cities= $this->Cities->patchEntity($Cities, $this->request->data);
				//return ;
				if ($this->Cities->save($Cities))
				{
					$this->Flash->success(__('Action Successfully Completed.'));
					$this->redirect(['action' => 'index']);
				}
				
			
			
			
		}
    }

    public function edit($city_id = null) {
        $data = $this->request->data;
        $Cities = $this->Cities->find()->where(['id' => $city_id])->first();
        $this->set('Cities', $Cities);
        $this->set( 'CitiesStatus' , $this->Cities->CitiesStatus);
            $Data = $this->Cities->get($city_id);
            $Data = $this->Cities->patchEntity($Data, $data);
            if ($this->Cities->save($Data)) {
                $this->redirect('/admin/Cities/edit/' . $city_id);
            } else {
                echo 'error';
            }
    }
}
