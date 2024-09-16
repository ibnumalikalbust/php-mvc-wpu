<?php

class Controller {
	public function view($view, $data = []) {
		$file = '../app/views/' . $view . '.php';
		require_once $file;
		return true;
	}

	public function model($model, $data = []) {
		$file = '../app/models/' . $model . '.php';
		require_once $file;
		return new $model;
	}
}