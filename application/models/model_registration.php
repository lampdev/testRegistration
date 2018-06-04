<?php
class Model_Registration extends Model
{
	public function registration_user($fname,$lname,$school,$city,$klass,$lang,$email,$login,$password)
	{
	$this->set_charset("utf8");
	$fname = $this->real_escape_string($fname);
	$lname = $this->real_escape_string($lname);
	$school = $this->real_escape_string($school);
	$lang = $this->real_escape_string($lang);
	$login = $this->real_escape_string($login);
	$password = $this->real_escape_string($password);
	
	$this->query("INSERT INTO `users_old` (`fname`,`lname`,`school`,`klass`,`lang`,`email`,`login`,`password`,`date`) 
	VALUES ('$fname','$lname','$school','$klass','$lang','$email','$login','$password',now())");
	
	}
	

	public function checklogin($login,$password)
	{
	$this->set_charset("utf8");
	$res = $this->query("SELECT `user_id` FROM `users_old` WHERE  `login`='$login' AND `password`='$password'");
	$res = $res->fetch_assoc();
	if (!empty($res)) return true; else return false; 	
	}	
}