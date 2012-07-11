<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends MX_Controller
{
    public function __construct()
    {
        $this->load->helper('form');
    }

    public function index()
    {
        $step1 = base_url() . 'register/step1';
        header("Location: $step1");
    }

    public function step1()
    {
        $this->load->view('registration_step1');
    }

    public function step1_process()
    {
        $userinfo = array();
        parse_str($this->input->post('userinfo'), $userinfo);
        echo $userinfo['username'];
    }

    public function username_check()
    {
        $username = $this->input->post('username');
        $user = $username['value'];
        if ($this->ion_auth->username_check($user)) {
            echo 1;
        }
    }

    public function email_check()
    {
        $email = $this->input->post('email');
        $email = $email['value'];
        if ($this->ion_auth->email_check($email)) {
            echo 1;
        }
    }

    public function step2()
    {
        $this->load->library('form_validation');

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
            $this->form_validation->set_rules('username', 'Username',
                'required|min_length[5]|max_length[30]|user_check|user_regex_check');
            $this->form_validation->set_rules('email', 'E-mail',
                'required|min_length[3]|max_length[256]|valid_email|email_check');
            $this->form_validation->set_rules('password', 'Password',
                'required|min_length[5]|max_length[100]|password_regex_check');

            if ($this->form_validation->run() === false) {
                $step1 = base_url() . 'register/step1';
                header("Location: $step1");
            } else {
                $this->load->view('registration_step2');
            }

        } else {
            $step1 = base_url() . 'register/step1';
            header("Location: $step1");
        }

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $regdata = array(
            'username' => $username,
            'email' => $email,
            'password' => $password);

        $this->session->set_userdata($regdata);
    }

    public function step3()
    {
        require_once(APPPATH.'lib/PHPThumb/ThumbLib.inc.php');
        $this->load->library('pseudocrypt');
        $this->load->view('registration_step3');

        $username = $this->session->userdata('username');
        $email = $this->session->userdata('email');
        $password = $this->session->userdata('password');

        if (!$this->ion_auth->username_check($username)) {
            $this->ion_auth->register($username, $password, $email);

            $user = $this->ion_auth->user_username($username)->row();
            $imagefilename = $user->id + 1;
            $imagefilenamehashed = $this->pseudocrypt->udihash($user->id + 1);
            
            $profpic = $_FILES['photo'];
            if (trim($profpic['name']) != '') {
                $config['upload_path'] = './uploads/profpics/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
                $config['file_name'] = $imagefilename;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('photo')) {
                $step1 = base_url() . 'register/step1';
                header("Location: $step1");
                }
                
                $returneduploadimage = $this->upload->data();
                $thumb = PhpThumbFactory::create('./uploads/profpics/'.$returneduploadimage['file_name']);
                $thumb->save('./uploads/profpics/'.$imagefilenamehashed.'.jpg', 'jpg');
                $tempimage = './uploads/profpics/'.$returneduploadimage['file_name'];
                unlink($tempimage);
            }
        }

        /*
        $regdata = array(
        'username'  => $username,
        'email'     => $email,
        'password' => $password
        );

        $this->session->unset_userdata($regdata);
        */
    }
}
