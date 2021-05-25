<?php include_once('header.php'); ?>

<div class="container-fluid">
	<div class="container features rounded">
		<div class="card text-center shadow p-3 mb-5 back">
			<div class="card-body">
				<h1 class="card-title">Welcome to MyLibrary</h1>
				<div class="row">
					<div class="card" id="imghome">
						<a href="<?php echo base_url(); ?>ManageBooks/addbook ">
					  		<img src="./assets/images/addbook.png" class="card-img-top">
					  	</a>	
					  	<div class="card-body">
					    	<h6 class="card-text">Add Book</h6>
					  	</div>

					</div>
					<div class="card" id="imghome">
						<a href="<?php echo base_url(); ?>ManageWishlist/addbook ">
					  		<img src="./assets/images/wishlist.png" class="card-img-top" >
					  	</a>		
					  	<div class="card-body">
					    	<h6 class="card-text">Add Book to WishList</h6>
					  	</div>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>

<?php include_once('footer.php'); ?>