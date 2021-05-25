<?php 
	
	class ManageBooks_Model extends CI_Model
	{
		public function display_books(){
			$query=$this->db->query("select Id,Title,Author from books");
			return $query->result();
		}

		public function add_books($title,$author,$isbn,$date,$price,$description){
			$query="insert into books values(' ','$title','$author','$isbn','$date','$price','$description')";
			$this->db->query($query);
		}

		public function display_singlebook($id){
			$query=$this->db->query("select * from books where Id='".$id."'");
			return $query->result();
		}

		public function update_books($id,$title,$author,$isbn,$date,$price,$description){
		$query=$this->db->query("update books SET Title='$title', Author='$author', ISBN='$isbn', Date='$date', Price='$price', description='$description' where Id='".$id."'");
		}

		public function delete_books($id){
		$this->db->query("delete from books where Id='".$id."'");
		}

		public function searchrecord($keyword){
			$this->db->select('*');
			$this->db->from('books');
			$this->db->like('Title',$keyword);
			$this->db->or_like('Author',$keyword);
			$query = $this->db->get();
			return $query->result();
		}

	}


?>