<?php

class StudentModel {
	private $dbh;
	private $stmt;

	public function __construct() {
		$dbHost = 'localhost';
        $dbName = 'local_testing';
        $dbUser = 'root';
        $dbPass = '';
		$dsn = "mysql:host=$dbHost;dbname=$dbName";
		try {
			$this->dbh = new PDO($dsn, $dbUser, $dbPass);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAllStudents() {
		$sql = 'SELECT * FROM testing_student';
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->execute();
		$students = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		return $students;
	}
}