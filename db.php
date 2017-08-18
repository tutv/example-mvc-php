<?php

class MyDatabase {
	public $conn;

	public function __construct() {
		$this->conn = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
	}

	public function query( $query ) {
		$result = $this->conn->query( $query );

		return $result;
	}

	public function close() {
		$this->conn->close();
	}
}