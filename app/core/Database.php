<?php

class Database {
	private $dbHost = DB_HOST;
	private $dbName = DB_NAME;
	private $dbUser = DB_USER;
	private $dbPass = DB_PASS;

	private $dbh;
	private $stmt;

	public function __construct () {
		$dsn = "mysql:host=$this->dbHost;dbname=$this->dbName";
		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];
		try {
			$this->dbh = new PDO($dsn, $this->dbUser, $this->dbPass, $option);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function query ($query) {
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind ($param, $value, $type = null) {
		if (is_null($type)) {
			switch(true) {
				case is_int($value) : $type = PDO::PARAM_INT;
					break;
				case is_bool($value) : $type = PDO::PARAM_BOOL;
					break;
				case is_null($value) : $type = PDO::PARAM_NULL;
					break;
				default : $type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute () {
		$status = $this->stmt->execute();
		return $status;
	}

	public function fetchAll () {
		$this->execute();
		$data = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}

	public function fetchSingle () {
		$this->execute();
		$data = $this->stmt->fetch(PDO::FETCH_ASSOC);
		return $data;
	}
}