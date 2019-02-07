<?php
	
	define("SALT", "lobonaddkorenen12321$^%$^$#^&!&*%$*^%DGDSGCDASGEWNJYIYI~!#~!#");
	

	function hash_with_salt($password){

		$password = password_hash(SALT.$password, PASSWORD_BCRYPT);

		return $password;
	}


	function verify_password($password,$hash){
	
		$password = password_hash(SALT.$password, PASSWORD_BCRYPT);

		$flag = false;

		if(strcmp($password,$hash))
			$flag = true;

		return $flag;
	}

?>