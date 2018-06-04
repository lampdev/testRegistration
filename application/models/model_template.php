<?php
class Model_Template extends Model
{
	public function get_users()
	{
		$res = $this->query("SELECT * FROM `users_old` WHERE 1 ");
		$i=0;
		while( $row = $res->fetch_assoc() ) $result[$i++] = $row;
		return $result;
	}
		
}