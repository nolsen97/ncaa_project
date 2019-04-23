<?php
class DbUtil{
	public static $loginUser = "nso4wg"; 
	public static $loginPass = "uvachamp19";
	public static $host = "mysql.cs.virginia.edu"; // DB Host
	public static $schema = "nso4wg"; // DB Schema

	public static function loginConnection(){
			$db = new mysqli(DbUtil::$host, DbUtil::$loginUser, DbUtil::$loginPass, DbUtil::$schema);

			if($db->connect_errno){
					echo("Could not connect to db");
					$db->close();
					exit();
			}

			return $db;
	}

}
?>
