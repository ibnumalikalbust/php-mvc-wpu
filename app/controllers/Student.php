<?php

class Student extends Controller {
	public function index () {
		$data['title'] = 'STUDENT';
		$data['students'] = $this->model('StudentModel')->getAllStudents();
		$this->view('templates/header', $data);
		$this->view('student/index', $data);
		$this->view('templates/footer');
	}

	public function detail ($id) {
		$data['title'] = 'STUDENT';
		$data['student'] = $this->model('StudentModel')->getStudentById($id);
		$this->view('templates/header', $data);
		$this->view('student/detail', $data);
		$this->view('templates/footer');
	}

	public function add () {
		if ($this->model('StudentModel')->addStudent($_POST)) {
			header('Location: ' . BASEURL . '/student');
			exit();
		}
	}
}