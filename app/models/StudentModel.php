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

	public function insertStudent ($data) {
		$query = "INSERT INTO $this->table (`name`, `nrp`, `email`, `major`) VALUES (:name, :nrp, :email, :major)";
		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('major', $data['major']);
		$this->db->execute();
		$count = $this->db->rowCount();
		$status = ($count == 0) ? false : true;
		return $status;
	}

	public function deleteStudent ($id) {
		$query = "DELETE FROM $this->table WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		$count = $this->db->rowCount();
		$status = ($count == 0) ? false : true;
		return $status;
	}

	public function updateStudent ($data) {
		$query = "UPDATE $this->table SET name = :name, nrp = :nrp, email = :email, major = :major  WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('name', $data['name']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('major', $data['major']);
		$this->db->execute();
		$count = $this->db->rowCount();
		$status = ($count == 0) ? false : true;
		return $status;
	}
}