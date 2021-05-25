<?php 
	
	class ManageReports_Model extends CI_Model
	{
		public function display_lastmonth(){
			$query=$this->db->query("select Id,Title,Author,Date,Price from books where year(Date) = year(CURRENT_DATE - interval 1 month) and month(Date) = month(current_DATE - interval 1 month)");
			return $query->result();
		}

		public function display_all(){
			$query=$this->db->query("select Id,Title,Author,Date,Price from books");
			return $query->result();
		}

		public function get_count()
		{
			$query=$this->db->query("select Id from books where year(Date) = year(CURRENT_DATE - interval 1 month) and month(Date) = month(current_DATE - interval 1 month)");
			return $query->num_rows();
		}

		public function get_count_search($keyword,$keyword2)
		{
			$this->db->select('*');
			$this->db->from('books');
			if(!empty($keyword2)){
				$this->db->like('month(Date)',$keyword2);
			}
			if(!empty($keyword)){
				$this->db->like('year(Date)',$keyword);
			}
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function get_sum()
		{
			$query=$this->db->query("select sum(Price) as price from (select Price from books where year(Date) = year(CURRENT_DATE - interval 1 month) and month(Date) = month(current_DATE - interval 1 month)) as subquery");
			return $query->row()->price;
		}

		public function get_sum_search($keyword,$keyword2)
		{
			$this->db->select_sum('Price','price');
			$this->db->from('books');
			if(!empty($keyword2)){
				$this->db->like('month(Date)',$keyword2);
			}
			if(!empty($keyword)){
				$this->db->like('year(Date)',$keyword);
			}
			$query = $this->db->get();
			return $query->row()->price;
		}

		public function searchrecord($keyword,$keyword2){
			$this->db->select('*');
			$this->db->from('books');

			if(!empty($keyword2)){
				$this->db->like('month(Date)',$keyword2);
			}
			if(!empty($keyword)){
				$this->db->like('year(Date)',$keyword);
			}

			$query = $this->db->get();
			return $query->result();
		}

	}
?>