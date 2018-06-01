<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class PagesController extends AppController {

    function initialize() {

        parent::initialize();
    }

    function beforeFilter(Event $event) {

        parent::beforeFilter($event);

<<<<<<< HEAD
        $this->Auth->allow(['about','contact','privacy', 'home','terms', 'display','locations' ,'test']);
    }

   function test() {
        $this->set('title', 'About');
    }
=======
        $this->Auth->allow(['about', 'contact', 'privacy', 'home', 'display', 'workWithUs', 'terms', 'advertise', 'help']);
    }

>>>>>>> 7710f8643e63265a40586fa5cbb115443773155f
    function about() {
        $this->set('title', 'About');
    }

    function contact() {
        $this->set('title', 'Contact Us');
    }

    function privacy() {
        $this->set('title', 'Privacy Policy');
    }

<<<<<<< HEAD
   
    function terms() {
        $this->set('title', 'Terms and Conditions');
    }	
	
	
=======
    function terms() {
        $this->set('title', 'Terms Of USe');
    }

    function advertise() {
        $this->set('title', 'Advertise & Support');
    }

    function help() {
        $this->set('title', 'Help');
    }

    function workWithUs() {
        $this->set('title', 'Work With Us');
    }

>>>>>>> 7710f8643e63265a40586fa5cbb115443773155f
    function locations($city_id = null) {

        $this->loadModel('Locations');

<<<<<<< HEAD
       $Locations = $this->Locations->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['city_id'=>$city_id])->toArray();
	   $this->set('Locations', $Locations);
		
		
	}
=======
        $Locations = $this->Locations->find('list', ['keyField' => 'id', 'valueField' => 'name'])->where(['city_id' => $city_id])->toArray();
        debug($Locations);
    }
>>>>>>> 7710f8643e63265a40586fa5cbb115443773155f

    function home($purpose = null) {


        $this->set('purpose', $purpose);



        $this->loadModel('Products');
        $SponsProducts = $this->Products->find('all')->where(['status' => 'ACTIVE', 'is_sponsored' => '1'])->toArray();
        $this->set('SponsProducts', $SponsProducts);
    }

    /**

     * Displays a view

     *

     * @param array ...$path Path segments.

     * @return \Cake\Http\Response|null

     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.

     * @throws \Cake\Network\Exception\NotFoundException When the view file could not

     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.

     */
    public function display(...$path) {

        return $this->redirect('/');

        $count = count($path);

        if (!$count) {

            return $this->redirect('/');
        }

        if (in_array('..', $path, true) || in_array('.', $path, true)) {

            throw new ForbiddenException();
        }

        $page = $subpage = null;



        if (!empty($path[0])) {

            $page = $path[0];
        }

        if (!empty($path[1])) {

            $subpage = $path[1];
        }

        $this->set(compact('page', 'subpage'));



        try {

            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {

            if (Configure::read('debug')) {

                throw $exception;
            }

            throw new NotFoundException();
        }
    }

}
