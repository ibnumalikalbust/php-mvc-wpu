<?php

class Home extends Controller {
	public function index () {
		$data['title'] = 'HOME';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}

	public function test () {
		echo 'This Is Home Test';
	}
}