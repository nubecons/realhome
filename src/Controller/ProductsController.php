<?php

namespace App\Controller;

use Cake\Core\Configure;

use Cake\Network\Exception\ForbiddenException;

use Cake\Network\Exception\NotFoundException;

use Cake\View\Exception\MissingTemplateException;

use Cake\Event\Event;

use App\View\Helper\GetInfoHelper;

class ProductsController extends AppController
{

	

	public function initialize()
	{

		parent::initialize();
	    
		$this->product_file_path = WWW_ROOT . 'img' .DS. 'Products' . DS;
	}

	public function beforeFilter(Event $event)
	{

		parent::beforeFilter($event);
		
		$this->loadComponent('Upload');

		$this->Auth->allow(['add','index' ,'detail' ,'searchElement' ,'getLocations']);

		$this->set('title', 'Manage Property');

	}


   public function add(){
	
	  $this->set('title', 'Add Property');
	  $this->loadModel('ProductTypes');
	  $ProductTypes = $this->ProductTypes->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
      $this->set('ProductTypes', $ProductTypes);
	  
	  $SubProductTypes =[];
	  foreach($ProductTypes as $key => $val){
		  $SubProductTypes[$key] = $this->ProductTypes->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key])->toArray();
		  }
		  
	  $this->set('SubProductTypes', $SubProductTypes);
	  
	  $this->loadModel('Cities');
	  $Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
      $this->set('Cities', $Cities);
	 	  
      $this->set( 'UnitOptoins' , $this->Products->UnitOptoins);
	  $this->set( 'BedRooms' , $this->Products->BedRooms);
	  $this->set( 'BathRooms' , $this->Products->BathRooms);
	  $this->set( 'ExpiryDays' , $this->Products->ExpiryDays);
	  $this->set( 'ElectricityBackup' , $this->Products->ElectricityBackup);
	  $this->set( 'Flooring' , $this->Products->Flooring);
	  
	  $product = $this->Products->newEntity();
	  
	  if ($this->request->is('post'))
		{
			 $data = $this->request->data;
            
			 if(!$this->sUser){
				 
				 if(isset($data['membership_status']) && $data['membership_status'] == 1){
					
					 
					 $user = $this->Auth->identify();
					  if(!$user){
						  
						  $this->Flash->error(__('Sorry, we did not recognize that email or password'));
						  return;
						  
						  }else{
							
							 $this->request->data['contact_first_name'] = $user['first_name'];
							 $this->request->data['contact_last_name'] = $user['last_name'];
							 $this->request->data['contact_mobile'] = $user['mobile'];
							 $this->request->data['email'] = $user['email'];
						    
							 }
							  
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
						   
						   if($result !== TRUE){
	   					     
							 $this->Flash->error(__($result));
							 return;
						     
							 }
						 
						 }
				 }
            
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
		
		
				$product->user_id = $this->Auth->user('id');
				$product->status = "ACTIVE";
				
				$product= $this->Products->patchEntity($product, $this->request->data);
				//return ;
				if ($this->Products->save($product))
				{
					//$this->Flash->success(__('File uploaded successfully.'));
					$this->redirect(['action' => 'index']);
				}
				
			
			
			
		}else{
			$this->request->data['purpose'] = "Sale";
			$this->request->data['membership_status'] = ($this->sUser)?2:1 ;
			
			}
		
		
			
			
	}
	
	
	
   public function edit($id = null){
	
	  $this->set('title', 'Add Property');
	  $this->loadModel('ProductTypes');
	  $ProductTypes = $this->ProductTypes->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
      $this->set('ProductTypes', $ProductTypes);
	  
	  $SubProductTypes =[];
	  foreach($ProductTypes as $key => $val){
		  $SubProductTypes[$key] = $this->ProductTypes->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key])->toArray();
		  }
		  
	  $this->set('SubProductTypes', $SubProductTypes);
	  
	  $this->loadModel('Cities');
	  $Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
      $this->set('Cities', $Cities);
	 	  
      $this->set( 'UnitOptoins' , $this->Products->UnitOptoins);
	  $this->set( 'BedRooms' , $this->Products->BedRooms);
	  $this->set( 'BathRooms' , $this->Products->BathRooms);
	  $this->set( 'ExpiryDays' , $this->Products->ExpiryDays);
	  $this->set( 'ElectricityBackup' , $this->Products->ElectricityBackup);
	  $this->set( 'Flooring' , $this->Products->Flooring);
	  
	  
	  $product = $this->Products->get($id);
	  
	  $this->set('product' , $product );
	  
	  if($product['user_id'] != $this->sUser['id']){
		  
		   $this->Flash->error(__('You are not athorized for this action'));
		   
		   return $this->redirect($this->referer());
		  
		  }
           
	  
	  //$product = $this->Products->newEntity();
	  
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
		
		
				//$product->user_id = $this->Auth->user('id');
				//$product->status = "ACTIVE";
				
				$product= $this->Products->patchEntity($product, $this->request->data);
				
				if ($this->Products->save($product))
				{
				    $this->Flash->success(__('Changes saved successfully.'));
					$this->redirect(['action' => 'my_product']);
				}
				
			
			
			
		}else{ 
			
			$this->request->data = $product;
			//$this->request->data['purpose'] = "Sale";
			//$this->request->data['membership_status'] = ($this->sUser)?2:1 ;
			
			}
		
		
			
			
	}
	
	
	
   public function index()
    {
	  $this->loadModel('ProductTypes');
	  $ProductTypes = $this->ProductTypes->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE'])->toArray();
      $this->set('ProductTypes', $ProductTypes);
		
		$conditions['status'] = 'ACTIVE';
		if ($this->request->is('post'))
		{
			$this->Session->delete('SearchData');
			$this->Session->delete('SearchCond');
			
			$data = $this->request->data;
			$this->Session->write('SearchData', $data);
			
			if (isset($data['purpose']) && $data['purpose'] != '') {
				
                $conditions['Products.purpose'] = ($data['purpose']=='Buy')? 'Sale' :$data['purpose'] ;

            }
			
			
			if (isset($data['product_id']) && $data['product_id'] != '') {
                $conditions['Products.id'] = $data['product_id'];

            }
			
			if (isset($data['city_id']) &&  $data['city_id'] != '') {
                $conditions['Products.city_id'] = $data['city_id'];

            }
			
			if (isset($data['location_id']) &&  $data['location_id'] != '') {
                $conditions['Products.location_id'] = $data['location_id'];

            }
			
			if ( isset($data['product_type_id']) &&   $data['product_type_id'] != '') {
                $conditions[] = '( ( Products.product_type_id = ' . $data['product_type_id'] . ') OR ( Products.sub_product_type_id	 = ' . $data['product_type_id'].'))';

            }
			
			if (isset($data['min_price']) && $data['min_price'] != '') {
				
                $conditions['Products.price >='] = $data['min_price'] ;

            }
			
			if (isset($data['max_price']) && $data['max_price'] != '') {
				
                $conditions['Products.price <='] = $data['max_price'] ;

            }
			
			if ($data['min_area'] != '' ||  $data['max_area'] != ''  ) {
				
                $conditions['Products.area_unit'] = $data['area_unit'] ;

            }
			
			if (isset($data['min_area']) && $data['min_area'] != '') {
				
                $conditions['Products.area >='] = $data['min_area'] ;

            }
			
			if (isset($data['max_area']) && $data['max_area'] != '') {
				
                $conditions['Products.area <='] = $data['max_area'] ;

            }
			
			if (isset($data['bedrooms']) &&  $data['bedrooms'] != '') {
                $conditions['Products.bedrooms'] = $data['bedrooms'];

            }
			
			
        $this->Session->write('SearchCond', $conditions);
		
		}

		if ($this->Session->check('SearchCond')) {
            $conditions = $this->Session->read('SearchCond');
        }
		
		$query = $this->Products->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'DESC', ];
        $Products = $this->paginate($query, array('url' => '/Products/'));
        $this->set('Products', $Products);
	
    }
	
 public function detail($id = null)
    {
		
		
		 $Product = $this->Products->find()->where(['id' => $id])->first();
		
         $this->set('Product', $Product);
		 
		 $Saller = false;
		 if($Product['user_id']){
		 	$this->loadModel('Users');
	     	$Saller= $this->Users->find()->where(['id' => $Product['user_id']])->first();
		 }
	
		$this->set('Saller', $Saller);
	
	
		$this->loadModel('ProductTypes');
		$ProductType = $this->ProductTypes->find()->where(['id' => $Product['sub_product_type_id']])->first();
	    $this->set('ProductType', $ProductType);
		 
		 
		 
		 $City = false;
		 if($Product['city_id']){
		 	$this->loadModel('Cities');
	     	$City= $this->Cities->find()->where(['id' => $Product['city_id']])->first();
		 }
		 
         $this->set('City', $City);
		 
		 $Location = false;
		 if($Product['location_id']){
		 	$this->loadModel('Locations');
	     	$Location= $this->Locations->find()->where(['id' => $Product['city_id']])->first();
		 }
         
		 $this->set('Location', $Location);
		 
		
	
    }
	
public function locations($city_id = null)
    {
		$City = false;
		if($city_id){
			
			$this->loadModel('Cities');
			$City = $this->Cities->find()->where(['id' => $city_id])->first();
		
		}
		
		
		$this->set('City', $City);
		
		
		
		$this->loadModel('Locations');
		$conditions['country_code'] = 'pk';
		
		if($city_id){
			 $conditions['city_id'] = $city_id;
			 }
		

		$query = $this->Locations->find('all')->select(['id' , 'name' , 'city_id'])->where($conditions);
        $this->paginate['limit'] = 97;
        $this->paginate['order'] = ['created' => 'DESC', ];
        $Locations = $this->paginate($query, array('url' => '/Locations/'));
        $this->set('Locations', $Locations);
		
		
	
    }	
	
	    function searchElement(){
    
	
		$this->set( 'UnitOptoins' , $this->Products->UnitOptoins);
		$this->set( 'BedRooms' , $this->Products->BedRooms);
		$this->set( 'BathRooms' , $this->Products->BathRooms);
		
		
		$this->loadModel('ProductTypes');
		$ProductTypes = $this->ProductTypes->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
		$this->set('ProductTypes', $ProductTypes);
		
		$SubProductTypes =[];
		foreach($ProductTypes as $key => $val){
		$SubProductTypes[$key] = $this->ProductTypes->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key])->toArray();
		}
		
		$this->set('SubProductTypes', $SubProductTypes);
		
		
		$this->loadModel('Cities');
		$Cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'country_code' => 'pk'])->toArray();
		$this->set('Cities', $Cities);
		$purpose = false ;
		
		//debug($this->request->data);
		if(isset($this->request->data['purpose']) && $this->request->data['purpose'] != ''){
			// $purpose = $this->request->data['purpose'];	
			$this->Session->delete('SearchData');
		}
		
		if($this->Session->check('SearchData')){
		  $this->request->data = $this->Session->read('SearchData');
		}
		
		/*if($purpose){
			$this->request->data['purpose'] = $purpose ;	
		}*/		
		
		$this->render();
		
		}
		
		
		function adsElement(){
    
    	$this->loadModel('Advertisements');
        $Advertisements = $this->Advertisements->find('all')->where(['status' => 'ACTIVE'])->toArray();
        $this->set('Advertisements', $Advertisements);
		
		$this->render();
		
		}
		
		
		function getLocations($city_id)
		{
		
			$this->loadModel('Locations');
			$Locations = $this->Locations->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['city_id'=>$city_id])->toArray();
			$this->set('Locations', $Locations);
			$this->viewBuilder()->setLayout(false);
		}
		
		function myProducts(){
			$this->viewBuilder()->setLayout('user');
		
			$conditions['user_id'] = $this->sUser['id'] ;
			$query = $this->Products->find('all')->where($conditions);
			$this->paginate['limit'] = 25;
			$this->paginate['order'] = ['created' => 'DESC', ];
			$Products = $this->paginate($query, array('url' => '/Products/'));
		
			$this->set('Products', $Products);
			
			}


		
			


}

