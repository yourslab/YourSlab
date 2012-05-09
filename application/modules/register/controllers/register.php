<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends MX_Controller
{
    public function step1()
    {
	$this->load->view('registration_step1');
    }
	public function step2()
    {
	$this->load->view('registration_step2');
    }
	public function step3()
    {
	$this->load->view('registration_step3');
    }
}
