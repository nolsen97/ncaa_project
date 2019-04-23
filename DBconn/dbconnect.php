<?php
class DbUtil{
	public static $user = "nso4wg";
	public static $pass = "uvachamp19";
	public static $host = "mysql.cs.virginia.edu/";
	public static $schema = "nso4wg";
	public static function loginConnection() {
		$db = new mysqli(DbUtil::$host, DbUtil::$user, DbUtil::$pass, DbUtil::$schema);
		if($db->connect_errno) {
			echo "fail";
			$db->close();
			exit();
		}
	return $db;
	}
}
?>
	
