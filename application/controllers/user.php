<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
    public function register($step = null)
    {
        if (func_num_args() > 1) {
            show_404();
        } else {
            if (($step != null) && ($step == 1 || $step == 2 || $step == 3)) {
                if ($step == 1) {
                    $this->load->view('registration_step1');
                }
            } else {
                show_404();
            }
        }
    }
}
