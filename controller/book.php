<?php

require APP_DIR . '/model/book.php';

class BookController {
	public static function showBooks() {
		$bookModel = new BookModel();

		$books = $bookModel->books();
		include APP_DIR . '/view/books.php';
	}

	public static function showBook() {
		$bookModel = new BookModel();

		$bookId = isset( $_GET['book-id'] ) ? $_GET['book-id'] : '';
		$book   = $bookModel->getBook( $bookId );
		if ( empty( $book ) ) {
			echo 'Book not found';

			return;
		}

		include APP_DIR . '/view/book-detail.php';
	}
}