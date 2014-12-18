<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        $user=OrganizationUser::model()->find('LOWER(username)=?',array(strtolower($this->username)));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if( $user -> password != Hash::hashPassword( $this -> password ) )
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->id;
            $this->username=$user->username;

            $this->setState('organization_id', $user->organization_id);  
            $this->setState('organization_branch_id', $user->organization_branch_id);

            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId()
    {
        return $this->_id;
    }

}