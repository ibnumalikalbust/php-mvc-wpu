<?php

class Home extends Controller {
	public function index () {
		$data['title'] = 'HOME';
		$data['name'] = $this->model('User')->getUser();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}

	public function test () {
		echo 'This Is Home Test';
	}
}