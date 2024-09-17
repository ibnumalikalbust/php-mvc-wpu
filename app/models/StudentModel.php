<?php

class StudentModel {
	private $table = 'student';
	private $db;

	public function __construct () {
		$this->db = new Database;
	}

	public function getAllStudents () {
		$query = "SELECT * FROM $this->table";
		$this->db->query($query);
		$data = $this->db->fetchAll();
		return $data;
	}

	public function getStudentById ($id) {
		$query = "SELECT * FROM $this->table WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$data = $this->db->fetchSingle();
		return $data;
	}
}