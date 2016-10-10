<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class request_offer extends CI_Model {

	public function insert_table($tablename,$data)
	{
		$this->db->insert($tablename, $data);
	}
	public function get_by($tablename,$field,$id)
	{
		$query = $this->db->get_where($tablename,array($field => $id));
		return $query;
	}
	public function getall($tablename)
	{		
		$query = $this->db->get($tablename);
		return $query;
	}
	public function join()
	{
		$this->db->select('*');
		$this->db->from('request_buyer');
		$this->db->join('user','user.user_id = request_buyer.user_id');		
		$query = $this->db->get();
		return $query;
	}
	public function where_join($conditon,$id)
	{
		$this->db->select('*');
		$this->db->from('request_buyer');
		$this->db->join('user','user.user_id = request_buyer.user_id');	
		$this->db->where($conditon, $id);
		$query = $this->db->get();
		return $query;
	}
	public function join_respond($param1,$id1,$param2, $id2)
	{
		$this->db->select('*');
		$this->db->from('respond_request');
		$this->db->join('request_buyer','request_buyer.request_buyer_id = respond_request.request_buyer_id');		
		$this->db->where($param1, $id1);
		$this->db->where($param2, $id2);
		$query = $this->db->get();
		return $query;
	}
	public function where_alljoin($conditon,$id)
	{
		$this->db->select('*');
		$this->db->from('respond_request');
		$this->db->join('request_buyer','request_buyer.request_buyer_id = respond_request.request_buyer_id');
		$this->db->join('user','user.user_id = request_buyer.user_id');	
		$this->db->where($conditon, $id);
		$query = $this->db->get();
		return $query;
	}
	public function respond_accept($param1,$id1,$param2, $id2)
	{
		$this->db->select('*');
		$this->db->from('respond_request');
		$this->db->join('request_buyer','request_buyer.request_buyer_id = respond_request.request_buyer_id');
		$this->db->join('user','user.user_id = request_buyer.user_id');			
		$this->db->where($param1, $id1);
		$this->db->where($param2, $id2);
		$query = $this->db->get();
		return $query;
	}
	public function sendmail($data)
	{
		$username="dodi.projectcahya@gmail.com";
        $uname="no-reply";
        $password="dodi280791";

        $emailConfig = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => $username,
            'smtp_pass' => $password,
            'mailtype'  => 'html',
            'wordwrap'=> TRUE,
            'charset'   => 'utf-8'
        );

        $from = array('email' => $username, 'name' => $uname);
        $to = array($data['to']);
        $subject = $data['subject'];
        // $message = $this->load->view('post_buy_request/message_email',$data,true);  
        $message = $data['template_email'];
        
        $this->load->library('email', $emailConfig);
        $this->email->set_newline("\r\n");
        $this->email->from($from['email'], $from['name']);
        $this->email->to($to);
         
        $this->email->subject($subject);
        $this->email->message($message);
        
        if (!$this->email->send()) {
            show_error($this->email->print_debugger());
            return false;
        }
        else{
            echo "Success";
            return true;
        } 
	}
	public function update($tablename,$field,$condition)
	{
		$this->db->set($field);
		$this->db->where($condition);
		$this->db->update($tablename);

	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */