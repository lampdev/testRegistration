<?php
class Model_Login extends Model
{
	public function login_user($login,$pass)
	{	
		$this->set_charset("utf8");
		$login = $this->real_escape_string($login);
		$pass = $this->real_escape_string($pass);
		$stmt = $this->prepare('SELECT * FROM users_old WHERE login = ? AND password = ?');
$stmt->bind_param('ss', $login, $pass);

$stmt->execute();
$res = $stmt->get_result();
		
		$res = $res->fetch_assoc();
		$x = $res['user_id'];
		
		return $res;
		
	}
	
	public function save_logs($user_id,$session_id,$klass)
	{	
		$h = 0;
		$this->query("INSERT INTO `logs` (`user_id`, `session_id`, `klass`, `time`) 
		VALUES ('$user_id', '$session_id', $klass, ADDTIME( NOW( ) , '$h' ))");
		
	}
}