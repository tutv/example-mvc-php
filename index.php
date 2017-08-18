<?php

require './config.php';
require './db.php';
require './routes.php';
require './controller/book.php';
require './controller/page.php';

class App {
	public $page;

	public function __construct() {
		$this->page = isset( $_REQUEST['page'] ) ? $_REQUEST['page'] : '';
		$routes     = new Routes();

		$handler = $routes->getHandler( $this->page );

		if ( ! $handler ) {
			echo '404';

			return;
		}

		call_user_func( $handler );
	}
}

new App();