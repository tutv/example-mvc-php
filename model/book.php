<?php

class BookModel {
	public $db;

	public function __construct() {
		$this->db = new MyDatabase();
	}

	public function books() {
		$result = $this->db->query( 'SELECT * FROM `song`' );
		$books  = array();

		if ( mysqli_num_rows( $result ) > 0 ) {
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				$books[] = $row;
			}
		} else {
			return array();
		}

		return $books;
	}

	public function getBook( $bookId ) {
		$result = $this->db->query( "SELECT * FROM `song` WHERE id = {$bookId}" );
		$book   = array();

		if ( mysqli_num_rows( $result ) > 0 ) {
			while ( $row = mysqli_fetch_assoc( $result ) ) {
				return $row;
			}
		} else {
			return array();
		}

		return $book;
	}
}