<?php

class About extends Controller {
	public function index ($name = 'habibullah', $hobby = 'sleeping', $age = 25) {
		$data['title'] = 'ABOUT';
		$data['name'] = ucwords($name);
		$data['hobby'] = ucwords($hobby);
		$data['age'] = preg_replace('/[^0-9]/', '', $age);
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page () {
		$data['title'] = 'ABOUT';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}