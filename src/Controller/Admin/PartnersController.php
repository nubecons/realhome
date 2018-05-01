<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class PartnersController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'maps' . DS;
        $this->loadComponent('Upload');
    }

   

    public function index() {
		
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

  /*  public function locations($city_id = null) {
        $this->loadModel('Locations');
        $Locations = $this->Locations->find('all')->where(['city_id' => $city_id])->toArray();
        $this->set('Locations', $Locations);
        $this->set('city_id', $city_id);
         if($city_id != null){
        $this->loadModel('Cities');
        $Cities = $this->Cities->find('all')->where(['id' => $city_id, 'country_code' => 'pk'])->toArray();
        if($Cities){$this->set('city_name', $Cities[0]['title']);} 
        }
    }*/

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
		
		
				$Partner->user_id = $this->Auth->user('id');
				$Partner->status = "ACTIVE";
				
				$Partner= $this->Partners->patchEntity($Partner, $this->request->data);
			
				if ($this->Partners->save($Partner))
				{
					//$this->Flash->success(__('File uploaded successfully.'));
					$this->redirect(['action' => 'index']);
				}
		}
		
			
			
	}
	
	
    public function edit($location_id = null, $city_id = null) {
        $data = array();
        $this->loadModel('Locations');
        $Locations = $this->Locations->find()->where(['id' => $location_id])->first();
        $this->set('Locations', $Locations);
        $this->set('city_id', $city_id);
        $this->set('location_id', $location_id);

        if (!empty($this->request->data['image_file']['name'])) {
            $result = $this->Upload->upload($this->request->data['image_file'], $this->product_file_path, null, null, null);

            if (count($this->Upload->errors) > 0) {
                unset($this->request->data['image_file']);
            } else {
                $this->request->data['location_map'] = $this->Upload->result;
            }
            $data['location_map'] = $this->request->data['location_map'];
            $mapData = $this->Locations->get($location_id);
            $mapData = $this->Locations->patchEntity($mapData, $data);
            if ($this->Locations->save($mapData)) {
                $this->redirect('/admin/maps/edit/' . $location_id);
            } else {
                echo 'error';
            }
        }
    }

}
