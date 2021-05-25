<?php
	class ManageReports extends CI_controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->model('ManageReports_Model');
		}

		public function index()
		{
			$this->load->view('reports_nav');
		}

		public function prevmonth(){
			$result['data']=$this->ManageReports_Model->display_lastmonth();
			$result['count']=$this->ManageReports_Model->get_count();
			$result['sum']=$this->ManageReports_Model->get_sum();
			$this->load->view('monthly_reports',$result);
		}

		public function groupedreports(){
			$result['data']=$this->ManageReports_Model->display_all();
			$this->load->view('grouped_reports',$result);
		}

		public function search(){

			if(!$this->input->post('query'))
			{
				$this->form_validation->set_rules('query2','Query','required');
			}
			else if(!$this->input->post('query2'))
			{
				$this->form_validation->set_rules('query','Query','required');
			}

			else 
			{
				$this->form_validation->set_rules('query','Query','required');
				$this->form_validation->set_rules('query2','Query','required');
			}

			if($this->form_validation->run())
			{
				$keyword = $this->input->post('query');
				$keyword2 = $this->input->post('query2');
				$result['data'] = $this->ManageReports_Model->searchrecord($keyword,$keyword2);
				$result['count']=$this->ManageReports_Model->get_count_search($keyword,$keyword2);
				$result['sum']=$this->ManageReports_Model->get_sum_search($keyword,$keyword2);
				$this->load->view('searchBooks',$result);
			}

			else
			{
				$this->groupedreports();
			}
		}
	}
?>