<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class respond_accepted extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('request_offer');
	}

	public function response($id)
	{
		$data['respond_accepted'] = $this->request_offer->where_alljoin(array('request_buyer.user_id'=>$id,'request_buyer.status_respond'=>'1'),$id)->result();
		foreach ($data['respond_accepted'] as $key => $value) {
			$data['user_id'] = $value->user_id;			
			$data['user_name'] = $value->user_name;			
		}
		$this->load->view('buyer/respond_accepted',$data);
	}
	public function detail_respond($respond_id)
	{		
		$respond['id'] = $respond_id;
		$respond['detail'] = $this->request_offer->join_respond('respond_request.respond_id',$respond_id,'request_buyer.status_respond','1')->result();
		$this->load->view('buyer/detail_respond',$respond);
		$getalldata = $this->request_offer->where_alljoin('respond_request.respond_id',$respond_id)->result();
		foreach ($getalldata as $key => $value) {
			$email = $value->email;			
		}			
		if ($this->input->post('accept')) 
		{
			$this->request_offer->update('respond_request',array('status'=>'1'),array('respond_id'=>$respond['id']));
			$data['to'] = $email;			
			$url_link = site_url(array('auth','user_auth'));
			$data['subject'] = "Offering accepted";
			$data['message'] = $url_link;
			$data['template_email'] = $this->load->view('post_buy_request/seller_email_respond' ,$data);
			// $this->request_offer->sendmail($data);
		}
		elseif ($this->input->post('decline')) {
			$this->request_offer->update('respond_request',array('status'=>'2'),array('respond_id'=>$respond['id']));			
		}
	}
	public function wait_response($id)
	{
		$data['respond_accepted'] = $this->request_offer->join_respond('request_buyer.user_id',$id,'request_buyer.status_respond','0')->result();
		foreach ($data['respond_accepted'] as $key => $value) {
			$data['user_id'] = $value->user_id;			
		}
		
		$this->load->view('buyer/request_pending',$data);
	}
}

/* End of file  */
/* Location: ./application/controllers/ */