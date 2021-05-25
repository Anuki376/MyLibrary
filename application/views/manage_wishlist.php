<?php include_once('header.php'); ?>
<div class="container-fluid">
	<section class="container features" id="wishlist">
		<?php if($msg=$this->session->flashdata('msg')): ?>
			<div class="alert alert-primary" role="alert">
				<?php echo $msg; ?>
			</div>
		<?php endif; ?>
		<h3>WishList</h3>
		<div class="row">
			<div class="col-md-8">
				<?php echo anchor('ManageWishlist/addbook','Add Book', ['class'=>'btn btn-dark']);?>
			</div>
		</div>

		<table class="table table-bordered  bg-light table-surround shadow p-3 mb-5" >
		  	<thead>
		    	<tr>
			      <th scope="col">Title</th>
			      <th scope="col">Author</th>
			      <th scope="col">Price($)</th>
			      <th scope="col">Action</th>
			    </tr>
			</thead>
			<tbody>

				<?php foreach($data as $row){
					echo "<tr>";
			    	echo "<td>".$row->Title."</td>";
			    	echo "<td>".$row->Author."</td>";
			    	echo "<td>".$row->Price."</td>";
			      	echo"<td>";
			      		echo anchor("ManageWishlist/updatebook/{$row->Id}",'Update',['class'=>'btn btn-secondary']);
			      		echo anchor("ManageWishlist/deletebook/{$row->Id}",'Delete',['class'=>'btn btn-danger']);
			      	echo"</td>";
			    	echo"</tr>";
			    	}
			    ?>
		  	</tbody>
		</table>
	</section>
</div>
<?php include_once('footer.php'); ?>
	