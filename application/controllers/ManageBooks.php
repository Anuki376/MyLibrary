<?php
	class ManageBooks extends CI_controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->model('ManageBooks_Model');
		}

		public function index()
		{
			
			$result['data']=$this->ManageBooks_Model->display_books();
			$this->load->view('manage_books',$result);
		}

		public function addbook(){
			$this->load->view('add_book');
		}

		public function savedata(){


			$this->form_validation->set_rules('Title','Title','required');
			$this->form_validation->set_rules('Author','Author','required');
			$this->form_validation->set_rules('Price','Price','required');
			if($this->form_validation->run())
			{
				if($this->input->post('submit')){
					$title=$this->input->post('Title');
					$author=$this->input->post('Author');
					$isbn=$this->input->post('ISBN');
					$date=$this->input->post('Date');
					$price=$this->input->post('Price');
					$description=$this->input->post('Description');

					
					if(!$this->ManageBooks_Model->add_books($title,$author,$isbn,$date,$price,$description)){
						$this->session->set_flashdata('msg','Record Saved Successfully');
					}
					else{
						$this->session->set_flashdata('msg','Failed to Add Book!');
					}
					return redirect('ManageBooks');
				}
			}
			else
			{
				$this->load->view('add_book');
			}
		}

		public function updatebook($id){
			$result['data']=$this->ManageBooks_Model->display_singlebook($id);
			$this->load->view('update_book',$result);
		}

		public function changedata($id){
			$this->form_validation->set_rules('Title','Title','required');
			$this->form_validation->set_rules('Author','Author','required');
			$this->form_validation->set_rules('Price','Price','required');
			if($this->form_validation->run())
			{
				if($this->input->post('update')){
					$title=$this->input->post('Title');
					$author=$this->input->post('Author');
					$isbn=$this->input->post('ISBN');
					$date=$this->input->post('Date');
					$price=$this->input->post('Price');
					$description=$this->input->post('Description');
					
					if(!$this->ManageBooks_Model->update_books($id,$title,$author,$isbn,$date,$price,$description)){
						$this->session->set_flashdata('msg','Record Updated Successfully');
					}
					else{
						$this->session->set_flashdata('msg','Failed to Update Book!');
					}
					return redirect('ManageBooks');
				}
			}
			else
			{
				$this->load->view('update_book');
			}
		}

		public function viewbook($id){
			$result['data']=$this->ManageBooks_Model->display_singlebook($id);
			$this->load->view('view_book',$result);
		}

		public function deletebook($id){
			if(!$this->ManageBooks_Model->delete_books($id)){
						$this->session->set_flashdata('msg','Record Deleted Successfully');
					}
					else{
						$this->session->set_flashdata('msg','Failed to Delete Book!');
					}
					return redirect('ManageBooks');
		}

		public function search(){
			$this->form_validation->set_rules('query','Query','required');

			if($this->form_validation->run())
			{
				$keyword = $this->input->post('query');
				$result['data'] = $this->ManageBooks_Model->searchrecord($keyword);
				$this->load->view('searchUsers',$result);
			}
			else
			{
				return $this->index();
			}
		}
	}
?>