<?php

class MicroAuthComponent extends Component {

	public $components = array(
		'Session'
	);

	public $config = array();

	public function initialize(Controller $controller) {
		$this->config = Configure::read('MicroAuth');
	}

	public function startup(Controller $controller) {
		if(
			isset($controller->request->params['prefix'])
			&& $controller->request->params['prefix'] == 'admin'
			&& !$this->isLoggedIn()
		){
			$this->Session->setFlash(__d('micro_auth', 'You need to login to access this page'));
			$controller->redirect($this->config['loginAction']);
		}
	}

	public function isLoggedIn(){
		return (bool) $this->Session->read($this->config['sessionKey'].'.logged_in');
	}

	public function login($password){
		if($this->config['password'] == $password){
			return $this->Session->write($this->config['sessionKey'].'.logged_in', '1');
		}
		return false;
	}

	public function logout(){
		return $this->Session->delete($this->config['sessionKey'].'.logged_in');;
	}

}