<?php

class Students {
	private $students = [
		[
			'name' => 'Sandhika Galih',
			'nrp' => '043040023',
			'email' => 'sandhikagalih@unpas.ac.id',
			'major' => 'Informatics Engineering'
		],
		[
			'name' => 'Doddy Ferdiansyah',
			'nrp' => '133050321',
			'email' => 'doddy@gmail.com',
			'major' => 'Mechanical Engineering'
		],
		[
			'name' => 'Erik Doank',
			'nrp' => '163030123',
			'email' => 'erik@yahoo.com',
			'major' => 'Industrial Engineering'
		],
		[
			'name' => 'Fahrur Rozy',
			'nrp' => '696956969',
			'email' => 'takendekrogi@krembun.com',
			'major' => 'Economic Engineering'
		]
	];

	public function getAllStudents() {
		return $this->students;
	}
}