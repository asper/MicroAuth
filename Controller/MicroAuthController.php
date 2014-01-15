<?php

App::uses('MicroAuth/MicroAuthAppController', 'Controller');

class MicroAuthController extends MicroAuthAppController {

	public $uses = array();

	public $components = array(
		'Session',
		'MicroAuth.MicroAuth'
	);

	public function login(){
		if($this->request->is('post')){
			if($this->MicroAuth->login($this->data['User']['password'])){
				$this->redirect($this->MicroAuth->config['loginRedirect']);
			}
			else {
				$this->Session->setFlash(__d('micro_auth', 'Invalid password'));
			}
		}
	}

	public function logout(){
		$this->MicroAuth->logout();
		$this->redirect($this->MicroAuth->config['logoutRedirect']);
	}

	public function beforeRender(){
		parent::beforeRender();
		$this->theme = null;
		$this->layout = 'MicroAuth.default';
	}

}