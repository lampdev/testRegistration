<?php

class Model extends mysqli
{
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

	// метод выборки данных
	public function get_us()
	{
		$res = $this->query("SELECT * FROM `users` WHERE 1");
		$i=0;
		while( $row = $res->fetch_assoc() ) $result[$i++] = $row;
		return $result;
	}
}