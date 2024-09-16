<?php

class App {
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];

	public function __construct () {
		$url = $this->parseURL();

		if (isset($url[0])) {
			$controller = ucwords($url[0]);
			$file = '../app/controllers/' . $controller . '.php';
			if (file_exists($file)) {
				$this->controller = $controller;
			}
		}
		$file = '../app/controllers/' . $this->controller . '.php';
		require_once $file;
		$this->controller = new $this->controller;

		if (isset($url[1])) {
			$method = $url[1];
			if(method_exists($this->controller, $method)) {
				$this->method = $method;
			}
		}

		if (isset($url[2])) {
			array_splice($url, 0, 2);
			$this->params = array_values($url);
		}

		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseURL() {
		if (isset($_GET['url'])) {
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}