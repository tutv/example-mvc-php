<?php

class Routes {
	public $routes = array();

	public function __construct() {
		$this->routes = array(
			'book'      => array(
				BookController::class,
				'showBooks'
			),
			'show-book' => array(
				BookController::class,
				'showBook'
			),
			''          => array(
				PageController::class,
				'home'
			)
		);
	}

	public function getHandler( $page ) {
		if ( ! isset( $this->routes[ $page ] ) ) {
			return false;
		}

		return $this->routes[ $page ];
	}
}