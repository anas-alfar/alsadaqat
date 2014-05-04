<?php
class WebUser extends CWebUser
{
    public function __get($name)
    {
        if ($this->hasState($name)) {
            return $this->getState($name,array());
        }elseif($this->hasState('__userInfo')){
        	$user=$this->getState('__userInfo',array());
            if (isset($user[$name])) {
                return $user[$name];
            }
        }
 
        return parent::__get($name);
    }
}
?>