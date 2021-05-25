<?php 
	
	class ManageWishlist_Model extends CI_Model
	{
		public function display_books(){
			$query=$this->db->query("select Id,Title,Author,Price from wishlist");
			return $query->result();
		}

		public function add_books($title,$author,$price){
			$query="insert into wishlist values(' ','$title','$author','$price')";
			$this->db->query($query);
		}

		public function display_singlebook($id){
			$query=$this->db->query("select * from wishlist where Id='".$id."'");
			return $query->result();
		}

		public function update_books($id,$title,$author,$price){
		$query=$this->db->query("update wishlist SET Title='$title', Author='$author', Price='$price' where Id='".$id."'");
		}

		public function delete_books($id){
		$this->db->query("delete from wishlist where Id='".$id."'");
		}

	}

?>