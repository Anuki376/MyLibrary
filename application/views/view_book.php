<?php include_once('header.php'); ?>
<div class="container-fluid">
	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/ManageBooks ">Manage Books</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Book Details</li>
		  </ol>
	</nav>
	<div class="container features back rounded">
		<h3>Book Details</h3>
		<table class="table table-bordered table-hover bg-light table-surround">
		  	<tbody>
		  		<?php foreach ($data as $row) ?>
		    	<tr>
			      	<th scope="col">Id</th>
			      	<?php echo "<td>".$row->Id."</td>"; ?>
			    </tr>
			    <tr>
			    	<th scope="col">Title</th>
			      	<?php echo "<td>".$row->Title."</td>"; ?>
			    </tr>
			    <tr>
			    	<th scope="col">Author</th>
			      	<?php echo "<td>".$row->Author."</td>"; ?>
			    </tr>
			    <tr>
			    	<th scope="col">ISBN-13</th>
			      	<?php echo "<td>".$row->ISBN."</td>"; ?>
			    </tr>
			     <tr>
			    	<th scope="col">Date Purchased</th>
			      	<?php echo "<td>".$row->Date."</td>"; ?>
			    </tr>
			    <tr>
			    	<th scope="col">Purchase Price($)</th>
			      	<?php echo "<td>".$row->Price."</td>"; ?>
			    </tr>
			    <tr>
			    	<th scope="col">Description</th>
			      	<?php echo "<td>".$row->Description."</td>"; ?>
			    </tr>
			</tbody>
		</table>
			
		<?php echo anchor('ManageBooks','Back', ['class'=>'btn btn-dark']) ?>
	</div>
</div>
<?php include_once('footer.php'); ?>