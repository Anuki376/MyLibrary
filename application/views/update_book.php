<?php include_once('header.php'); ?>
<div class="container-fluid">
	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>ManageBooks ">Manage Books</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Update Book Details</li>
		  </ol>
	</nav>
	<div class="container features back rounded">
		<?php foreach ($data as $row) ?>
		<?php echo form_open("ManageBooks/changedata/{$row->Id}"); ?>
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
			    <div class="col-md-3">
			    	<?php echo form_error('Author','<div class="text-danger">','</div>'); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="inputISBN" class="col-sm-2 col-form-label">ISBN-13</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'ISBN','placeholder'=>'ISBN','class'=>'form-control','value'=>set_value('ISBN',$row->ISBN)]); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Date','placeholder'=>'Date','class'=>'form-control','value'=>set_value('Date',$row->Date)]); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="inputPrice" class="col-sm-2 col-form-label">Price($)</label>
			    <div class="col-md-7">
			      	<?php echo form_input(['name'=>'Price','placeholder'=>'Price','class'=>'form-control','value'=>set_value('Price',$row->Price)]); ?>
			    </div>
			    <div class="col-md-3">
			    	<?php echo form_error('Price','<div class="text-danger">','</div>'); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <label for="textArea" class="col-sm-2 col-form-label">Description</label>
			    <div class="col-md-7">
			      	<?php echo form_textarea(['name'=>'Description','placeholder'=>'Description','class'=>'form-control','value'=>set_value('Description',$row->Description)]); ?>
			    </div>
			</div>
			<div class="form-group row">
			    <div class="col-sm-10">
			    	<?php echo form_submit(['name'=>'update','value'=>'Update','class'=>'btn btn-dark']) ?>
			     	<?php echo anchor('ManageBooks','Back', ['class'=>'btn btn-dark']) ?>
			    </div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
<?php include_once('footer.php'); ?>