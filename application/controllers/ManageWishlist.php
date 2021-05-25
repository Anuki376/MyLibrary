<?php
	class ManageWishlist extends CI_controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->model('ManageWishlist_Model');
		}

		public function index()
		{
			
			$result['data']=$this->ManageWishlist_Model->display_books();
			$this->load->view('manage_wishlist',$result);
		}

		public function addbook(){
			$this->load->view('add_bookwl');
		}

		public function savedata(){


			$this->form_validation->set_rules('Title','Title','required');
			
			if($this->form_validation->run())
			{
				if($this->input->post('submit')){
					$title=$this->input->post('Title');
					$author=$this->input->post('Author');
					$price=$this->input->post('Price');
					
					if(!$this->ManageWishlist_Model->add_books($title,$author,$price)){
						$this->session->set_flashdata('msg','Item Successfully Added to WishList');
					}
					else{
						$this->session->set_flashdata('msg','Failed to Add Item to WishList!');
					}
					return redirect('ManageWishlist');
				}
			}
			else
			{
				$this->load->view('add_bookwl');
			}
		}

		public function updatebook($id){
			$result['data']=$this->ManageWishlist_Model->display_singlebook($id);
			$this->load->view('update_bookwl',$result);
		}

		public function changedata($id){
			$this->form_validation->set_rules('Title','Title','required');
			
			if($this->form_validation->run())
			{
				if($this->input->post('update')){
					$title=$this->input->post('Title');
					$author=$this->input->post('Author');
					$price=$this->input->post('Price');
					
					if(!$this->ManageWishlist_Model->update_books($id,$title,$author,$price)){
						$this->session->set_flashdata('msg','Item Updated Successfully');
					}
					else{
						$this->session->set_flashdata('msg','Failed to Update WishList item!');
					}
					return redirect('ManageWishlist');
				}
			}
			else
			{
				$this->load->view('update_bookwl');
			}
		}

		public function deletebook($id){
			if(!$this->ManageWishlist_Model->delete_books($id)){
						$this->session->set_flashdata('msg','Item Deleted Successfully');
					}
					else{
						$this->session->set_flashdata('msg','Failed to Delete Item From WishList!');
					}
					return redirect('ManageWishlist');
		}
	}
?>