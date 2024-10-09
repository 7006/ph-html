<?php

class Products {

	private PDO $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function getAllProducts() {
		return $this->pdo->query('select * from products')->fetchAll(PDO::FETCH_ASSOC);
	}
}