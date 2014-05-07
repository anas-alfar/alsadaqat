<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
    public $user;
    public $role;
    
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users = array(
			// username => password
			'demo'     => 'demo',
			'admin'    => 'admin',
			'mohammad' => 'mohammad',
		);
        
        //echo '<br />' . PHP_EOL . '<br />';
        if( array_key_exists($this->username, $users) ) {
            
            if ( $users[$this->username] === $this->password ) {
                
                $this->role = 'Super Admin';
                $this->setState('role', 'Super Admin');
                $this->_id  = 1 ;
                $this->user = $this->username ;
                $this->setState("__userInfo",$this->username);
                
                $this->errorCode=self::ERROR_NONE;
                
                
                //$this->errorCode=self::ERROR_PASSWORD_INVALID;
            }                 
        } else {
            
            $this->errorCode=self::ERROR_USERNAME_INVALID;
            //die('ddddddddddddddd');
        }
        
        
        
        
        
		/*if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;*/
		
		
		
		
		
		
		return !$this->errorCode;
	}
    
    // public function getId() {
        // return $this->_id;
    // }
// 
    // public function getRole() {
        // return $this->role;
    // }
// 
    // public function getUser() {
        // return $this->user;
    // }

}