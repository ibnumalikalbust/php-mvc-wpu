<?php

class Student extends Controller {
	public function index () {
		$data['title'] = 'STUDENT';
		$data['students'] = $this->model('Students')->getAllStudents();
		$this->view('templates/header', $data);
		$this->view('student/index', $data);
		$this->view('templates/footer');
	}
}