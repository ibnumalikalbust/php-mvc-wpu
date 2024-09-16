<?php

class Controller {
	public function view($view, $data = []) {
		$file = '../app/views/' . $view . '.php';
		require_once $file;
	}
}