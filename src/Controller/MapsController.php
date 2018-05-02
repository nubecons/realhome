<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use App\Utility\Lists;
use Cake\Datasource\ConnectionManager;

class MapsController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'maps' . DS;
        $this->loadComponent('Upload');
		$this->Auth->allow(['index']);
    }

    function dashboard() {
        
    }

    public function index($country_code = null) {
        $Country = false;
        if ($country_code) {

            $this->loadModel('Countries');
            $Country = $this->Countries->find()->where(['country_code' => $country_code])->first();
        }


        $this->set('Country', $Country);



        $this->loadModel('Locations');
        $conditions['country_code'] = 'pk';

        if ($country_code) {
            $conditions['country_code'] = $country_code;
        }

        $this->loadModel('Cities');
        $query = $this->Cities->find('all')->select(['id', 'title'])->where($conditions);
        $this->paginate['limit'] = 97;
        $this->paginate['order'] = ['created' => 'DESC',];
        $Cities = $this->paginate($query, array('url' => '/Locations/'));
        $this->set('Cities', $Cities);
    }

    public function locations($city_id = null) {
        $City = false;
        if ($city_id) {

            $this->loadModel('Cities');
            $City = $this->Cities->find()->where(['id' => $city_id])->first();
        }


        $this->set('City', $City);



        $this->loadModel('Locations');
        $conditions['country_code'] = 'pk';

        if ($city_id) {
            $conditions['city_id'] = $city_id;
        }


        $query = $this->Locations->find('all')->select(['id', 'name', 'city_id'])->where($conditions);
        $this->paginate['limit'] = 97;
        $this->paginate['order'] = ['created' => 'DESC',];
        $Locations = $this->paginate($query, array('url' => '/Locations/'));
        $this->set('Locations', $Locations);
    }
    public function locationMap($location_id =null)

    {
        
        $this->loadModel('Locations');
        if ($location_id) {

            $Locations = $this->Locations->find()->where(['id' => $location_id])->first();
                 $this->set('Locations', $Locations);
        }

    }

}
