<?php

class About {
	public function index () {
		echo 'This Is About Index';
	}

	public function page ($name = 'habibullah', $hobby = 'sleeping') {
		$name = ucwords($name);
		$hobby = ucwords($hobby);
		echo "My Name Is $name And My Hobby Is $hobby";
	}
}