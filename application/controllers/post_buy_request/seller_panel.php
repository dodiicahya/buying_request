<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class seller_panel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('request_offer');
	}

	public function index()
	{
		$data['buying_request'] = $this->request_offer->join()->result();	
		$this->load->view('seller/buyer_request',$data);		
	}
	public function detail_request($id)
	{		
		$data['detail_data'] = $this->request_offer->where_join('request_buyer.request_buyer_id',$id)->result();
		$this->load->view('seller/detail_request',$data);		
	}
	public function respond($id)
	{
		$data['get_id'] = $this->request_offer->where_join('request_buyer.request_buyer_id',$id)->result();
	
		foreach ($data['get_id'] as $key => $value) {
			$data['request_buyer_id'] = $value->request_buyer_id;			
			$email = $value->email;	
		}						
		$this->load->view('seller/respond_request',$data);
		
		if ($this->input->post('respond')) {			
			$desc 		= $this->input->post('desc');
			$deadline 	= $this->input->post('date_deadline');
			$comment 	= $this->input->post('comment');

			$insert_respond = array('request_buyer_id'=>$data['request_buyer_id'],'respond_description'=>$desc,'respond_deadline'=>$deadline,'comment'=>$comment);
			$this->request_offer->insert_table('respond_request',$insert_respond);		
			$update_status_respond = array('status_respond'=>'1');
			$this->request_offer->update('request_buyer',$update_status_respond,array('request_buyer_id'=>$data['request_buyer_id']));

			$data['to'] = $email;
			$url_link = site_url(array('auth','user_auth'));
			$data['subject'] = "Respond from Seller";
			$data['message'] = $url_link;
			$data['template_email'] = $this->load->view('post_buy_request/seller_email_respond' ,$data, true);			
			$this->request_offer->sendmail($data);			
			redirect('post_buy_request/seller_panel','refresh');
		}
	}
	public function report($id)
	{				
		$data['get_id'] = $this->request_offer->where_join('request_buyer.request_buyer_id',$id)->result();

		foreach ($data['get_id'] as $key => $value) {
			$user_id = $value->user_id;
			$email = $value->email;
			$request_buyer_id = $value->request_buyer_id;			
			$update_status_respond = array('status_respond'=>'2');
			$this->request_offer->update('request_buyer',$update_status_respond,array('request_buyer_id'=>$request_buyer_id));
		}		
		$data['to'] = $email;
		$data['subject'] = "Request denied ";
		$data['message'] = "Sorry your buying request has been denied";
		$data['template_email'] = $this->load->view('post_buy_request/seller_email_respond' ,$data, true);
		$this->request_offer->sendmail($data);
		redirect('post_buy_request/seller_panel','refresh');
	}
	public function accept($id)
	{
		$data['alldata'] = $this->request_offer->respond_accept('respond_request.respond_id',$id,'respond_request.status',1)->result();
		$this->load->view('seller/offering_accepted', $data, FALSE);
	}	
}

/* End of file seller_panel.php */
/* Location: ./application/controllers/seller_panel.php */