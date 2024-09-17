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

	public function insert () {
		if ($this->model('StudentModel')->insertStudent($_POST)) {
			Flasher::setFlash('success', 'student data addition success');
			header('Location: ' . BASEURL . '/student');
			exit();
		} else {
			Flasher::setFlash('danger', 'student data addition failed');
			header('Location: ' . BASEURL . '/student');
			exit();
		}
	}

	public function delete ($id) {
		if ($this->model('StudentModel')->deleteStudent($id)) {
			Flasher::setFlash('success', 'student data deletion success');
			header('Location: ' . BASEURL . '/student');
			exit();
		} else {
			Flasher::setFlash('danger', 'student data deletion failed');
			header('Location: ' . BASEURL . '/student');
			exit();
		}
	}

	public function updateget () {
		$id = $_POST['id'];
		$data = $this->model('StudentModel')->getStudentById($id);
		$data = json_encode($data);
		echo $data;
	}

	public function update () {
		if ($this->model('StudentModel')->updateStudent($_POST)) {
			Flasher::setFlash('success', 'student data update success');
			header('Location: ' . BASEURL . '/student');
			exit();
		} else {
			Flasher::setFlash('danger', 'student data update failed');
			header('Location: ' . BASEURL . '/student');
			exit();
		}
	}

	public function search () {
		$data['title'] = 'STUDENT';
		$name = $_POST['keyword'];
		$data['students'] = $this->model('StudentModel')->getStudentByName($name);
		$this->view('templates/header', $data);
		$this->view('student/index', $data);
		$this->view('templates/footer');
	}
}