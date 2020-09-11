<?php
class Music extends CI_Controller {

	function index(){	
		$where = array('song_status' => 1);
		$result['all_song'] = $this->Music_model->getData('song',$where);
		$this->load->view('index', $result);
	}

	function hindi(){
		$where = array('song_status' => 1);
		$result['all_song'] = $this->Music_model->getData('song',$where);
		$this->load->view('hindi', $result);
	}

	function english(){
		$where = array('song_status' => 1);
		$result['all_song'] = $this->Music_model->getData('song',$where);
		$this->load->view('english', $result);
	}

	function other(){
		$where = array('song_status' => 1);
		$result['all_song'] = $this->Music_model->getData('song',$where);
		$this->load->view('other', $result);
	}	

	function contact(){
		$this->load->view('contact');
		if($this->input->post('send')){
			$data = array(
				'contact_name' => strip_tags(lcfirst($this->input->post('name'))),
				'contact_email' => strip_tags(lcfirst($this->input->post('email'))),
				'contact_subject' => strip_tags(lcfirst($this->input->post('subject'))),
				'contact_message' => strip_tags(lcfirst($this->input->post('message'))),
				'contact_created_at' => date('Y-m-d H:i:s')
			);
			$id = $this->Music_model->insert('contact',$data);
			if(!empty($id)){
				$this->session->set_flashdata('response','Thank You! Message has been sent successfully.');
			}else{
				$this->session->set_flashdata('error','Thank You! Something went wrong. Please try again/later.');
			}
		}
	}

	function search(){
		if($this->input->post('btnsearch')){
			$like = array('song_name' => strip_tags(lcfirst($this->input->post('search'))));
			$result['search_song'] = $this->Music_model->search('song',$like);
		}
		$this->load->view('search', $result);
	}
}
?>