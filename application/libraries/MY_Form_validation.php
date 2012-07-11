<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation
{
  	public function __construct()
  	{
    	parent::__construct();
  	}

    public function user_check($str)
    {
        if ($this->CI->ion_auth->username_check($str))
        {
            $this->set_message('user_check', 'This %s is already taken.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function user_regex_check($str)
    {
        if (!preg_match("~^[A-Za-z0-9_]*$~", $str))
        {
            $this->set_message('user_regex_check', 'The %s field can only contain letters, numbers, and underscores.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }        
    }

    public function email_check($str)
    {
        if ($this->CI->ion_auth->email_check($str))
        {
            $this->set_message('email_check', 'This %s is already taken.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    public function password_regex_check($str)
    {
        if (preg_match("/\\s/", $str))
        {
            $this->set_message('password_regex_check', 'The %s field cannot have any spaces.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }        
    }
} 