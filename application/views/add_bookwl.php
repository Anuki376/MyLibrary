<?php include_once('header.php'); ?>
<div class="container-fluid">
	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>ManageWishlist ">WishList</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Add Book</li>
		  </ol>
	</nav>
	<div class="container features back rounded">
		<?php echo form_open_multipart('ManageWishlist/savedata'); ?>
			<h3>Add Book</h3>
			<div class="form-group row">
			    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Title','placeholder'=>'Title','class'=>'form-control']); ?>
			    </div>
			    <div class="col-md-3">
			    	<?php echo form_error('Title','<div class="text-danger">','</div>'); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="inputAuthor" class="col-sm-2 col-form-label">Author</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Author','placeholder'=>'Author','class'=>'form-control']); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="inputPrice" class="col-sm-2 col-form-label">Price($)</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Price','placeholder'=>'Price (xx.xx)','class'=>'form-control']); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <div class="col-sm-10">
			    	<?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-dark']) ?>
			     	<?php echo anchor('ManageWishlist','Back', ['class'=>'btn btn-dark']) ?>
			    </div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
<?php include_once('footer.php'); ?>