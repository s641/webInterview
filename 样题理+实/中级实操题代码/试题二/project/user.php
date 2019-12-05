<?php
class User {
	static $host = "127.0.0.1";
	static $dbname = "user_center";
	static $user = "root";
	static $pass = "123456";

	static function conn() {
		$db = new mysqli(self::$host, self::$user, self::$pass, self::$dbname);
		if(mysqli_connect_errno()) {
			return null;
		}
		return $db;
	}

	public function checkLogin($account, $password) {
		$db = null;
		$stmt = null;
		try {
			$db = self::conn();
			if($db) {
				$sql = "select id from users where account = ? and password = ?";
				$stmt = $db->prepare($sql);
				$stmt->bind_param("ss", $account, $password);
				$stmt->bind_result($id);
				$stmt->execute();
				if($stmt->fetch()) {
					return true;
				}
			}
		} catch(Exception $e) {
			echo "Message:" . $e->getMessage();
		} finally {
			if($stmt != null) {
				$stmt->free_result();
			}
			if($db != null) {
				$db->close();
			}
		}
		return false;
	}

	public function queryAll() {
		$db = null;
		$stmt = null;
		$users = array();
		try {
			$db = self::conn();
			$sql = "select id, account, password, telphone from users";
			$stmt = $db->prepare($sql);
			$stmt->bind_result($id, $account, $password, $telphone);
			$stmt->execute();
			while($stmt->fetch()) {
				array_push($users, array(
						"id" => $id,
						"account" => $account,
						"password" => $password,
						"telphone" => $telphone
				));
			}
		} catch(Exception $e) {
			echo "Message:" . $e->getMessage();
		} finally {
			if($stmt != null) {
				$stmt->free_result();
			}
			if($db != null) {
				$db->close();
			}
		}
		return $users;
	}
}