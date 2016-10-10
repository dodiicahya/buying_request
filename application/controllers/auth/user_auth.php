<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login');
	}
	public function authenticate()
	{
		if ($this->input->post('login')) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$result = $this->auth->check_login(array('user_name'=>$username,'user_password'=>md5($password)));
			if (empty($result)) {
				echo "username or password is not correct";
			}
			else
			{
				$data_user = $result[0];				
				$session_array = array('user_name'=>$data_user->user_name,'logged_in'=>TRUE);				
				$cek_session = $this->session->set_userdata($session_array);
				if ($data_user->user_status == '1') {					
					redirect('post_buy_request/respond_accepted/response/'.$data_user->user_id,'refresh');
				}
				elseif ($data_user->user_status == '2') {					
					redirect('post_buy_request/seller_panel','refresh');
				}
				else
				{
					echo "admin";
				}
			}
		}
	}
	public function sign_up()
	{
		if ($this->input->post('sign-up')) 
		{
			$user_name 			= $this->input->post('user_name');
			$email 				= $this->input->post('email');
			$password 			= $this->input->post('password');
			$confirm_password 	= $this->input->post('confirm-password');
			if ($password == $confirm_password) 
			{
				$data_insert = array(
									'user_name'		=>$user_name,
									'email'			=>$email,
									'user_password' =>md5($password),
									'user_status'	=>'1',
								);
				$this->auth->insert('user',$data_insert);
			}
			else
			{
				echo "password must same";
			}
		}
		$this->load->view('registration');
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
	    session_destroy();
	    redirect('auth/user_auth','refresh');
	}
}

/* End of file user_auth.php */
/* Location: ./application/controllers/user_auth.php */