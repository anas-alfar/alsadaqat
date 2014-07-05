<?php

class Hash {
	//hashing password
	public static function hashPassword( $password ) {
		$hash = $password;
		for( $i=1; $i<=20; $i++ ) {
			$hash = hash('sha512', $hash);
		}
		return $hash;
	}

	//generate salt
	//public static function generateSalt() {
	//	return uniqid('', true);
	//}
}
