<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {
    const ADMIN_ROLE = 'admin';
    
    private $_id;
    public $user;
    public $role;
    public $username;
    public $password;

    /**
     * Override
     * Constructor.
     * @param string $username username //nested of password
     * @param string $password password
     * @param string $role role
     * @param boolean $loginAs  (if authintication for login as)
     * @param string $adminMail for login as return admin email
     */
    public function __construct($username, $password, $role) {
        $this -> username = $username;
        $this -> password = $password;
        $this -> role = $role;
    }
    
    public function authenticate()
    {
        if( $this->role == self::ADMIN_ROLE ) {
            $user = OrganizationUser::model()->findByAttributes( array( 'username' => $this->username) );
        }else{
            $this->errorCode=self::ERROR_USERNAME_INVALID;
            return !$this->errorCode;
        }
        
        if( ! $user ) {
            $this->errorCode=self::ERROR_USERNAME_INVALID;
            return !$this -> errorCode;
        }else{
            
            if( $user -> password != Hash::hashPassword( $this -> password ) ) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;
                return !$this->errorCode;
            }

            if($this->role==self::ADMIN_ROLE) {
                $this->errorCode = self::ERROR_NONE;
            }

            $this -> _id       = $user->id;
            $this -> errorCode = self::ERROR_NONE;
            $this -> setState('role', $this->role);

            $this -> setState('organization', $user->organization_id);
            $this -> setState('organization_branch', $user->organization_branch_id);
            
            $this -> user = $user;

            $user -> saveAttributes( array( 'last_login_date' => new CDbExpression( 'NOW()' ) ) );

        }
        
        return !$this->errorCode;
    }

    /*
     * Fuction to @return loged in user ID
     * */
    public function getId()
    {
        return $this->_id;
    }
    /*
     * Fuction to @return loged in user role
     * */
    public function getRole()
    {
        return $this->role;
    }
    
    /*
     * Fuction to @return loged in user full name
     * */
    public function getName()
    {
        return $this->user->fullname;
    }
    
    // public function getOrganization()
    // {
        // return $this->user->organization_id;
    // }
    
    // public function getOrganizationBranch()
    // {
        // return $this->user->organization_branch_id;
    // }


}
