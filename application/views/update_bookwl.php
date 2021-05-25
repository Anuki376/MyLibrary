<?php include_once('header.php'); ?>
<div class="container-fluid">
	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>ManageWishlist ">WishList</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Update Book Details</li>
		  </ol>
	</nav>
	<div class="container features back rounded">
		<?php foreach ($data as $row) ?>
		<?php echo form_open("ManageWishlist/changedata/{$row->Id}"); ?>
			<h3 class="feature-title">Edit Book Details</h3>
			<div class="form-group row">
			    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Title','placeholder'=>'Title','class'=>'form-control','value'=>set_value('Title',$row->Title)]); ?>
			    </div>
			    <div class="col-md-3">
			    	<?php echo form_error('Title','<div class="text-danger">','</div>'); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="inputAuthor" class="col-sm-2 col-form-label">Author</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Author','placeholder'=>'Author','class'=>'form-control','value'=>set_value('Author',$row->Author)]); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="inputPrice" class="col-sm-2 col-form-label">Price($)</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Price','placeholder'=>'Price','class'=>'form-control','value'=>set_value('Price',$row->Price)]); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <div class="col-sm-10">
			    	<?php echo form_submit(['name'=>'update','value'=>'Update','class'=>'btn btn-dark']) ?>
			     	<?php echo anchor('ManageWishlist','Back', ['class'=>'btn btn-dark']) ?>
			    </div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
<?php include_once('footer.php'); ?>