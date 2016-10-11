<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class buying_request extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('request_offer');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function generate_random_string($name_length = 8) {
      $alpha_numeric = '0123456789abcdefghijklmnopqrstuvwxyz';
      return substr(str_shuffle($alpha_numeric), 0, $name_length);
    }

	public function request_offer()
	{
		if ($this->input->post('save')) 
		{			
			$desc 			= $this->input->post('description');
			$email 			= $this->input->post('email');
			$phone			= $this->input->post('phone');
			$date_expired	= $this->input->post('date_expired');
			$date_deadline	= $this->input->post('date_deadline');
			$new_user		= $this->input->post('create_new_user');
			$send_mail		= $this->input->post('email_verification');
			if (isset($new_user)) {
				$create_password = $this->generate_random_string();
				$create_new_user = 'u'.$this->generate_random_string(5);				
				$data_new_user = array('user_name'=>$create_new_user,'user_password' =>md5($create_password),'user_status'=>'1','email'=>$email,'phone'=>$phone);				
				$this->request_offer->insert_table('user',$data_new_user);	
				//sendmail to verification
				if (isset($send_mail)) 
				{
					$data['to'] = $email;
					$url_link = site_url(array('post_buy_request','buying_request','verify',$create_new_user));
					$data['subject'] = "Verify your email address";
					$data['message'] = $url_link;
					$data['username'] = $create_new_user;
					$data['password'] = $create_password;
					$data['template_email'] = $this->load->view('post_buy_request/message_email',$data,true);
					$this->request_offer->sendmail($data);
				}		
			}			
			$get_user_id = $this->request_offer->get_by('user','user_name',$data_new_user['user_name'])->result();			

			foreach ($get_user_id as $key => $value) {
				$user_id = $value->user_id;
			}			
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '5000';
			$config['remove_spaces'] = TRUE;
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image_product')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$upload_data = $this->upload->data();
				$file_name   = $upload_data['file_name'];
				$image[]	 = array('filename'=>$file_name,'path'=>base_url('uploads'));
			}
			$data_request	= array(
									'user_id'       => $user_id,
									'description'   => $desc,
									'image_product' => json_encode($image),
									'date_expired'  => $date_expired,
									'date_deadline' => $date_deadline,
									'status_respond'=>'0'									
									);			
			$insert = $this->request_offer->insert_table('request_buyer',$data_request);			
		}
			$this->load->view('post_buy_request/request_offer_product');	
	}
	public function verify($data)
	{
		$this->load->view('post_buy_request/validation_email');
	}
}

/* End of file buyer.php */
/* Location: ./application/controllers/buyer.php */