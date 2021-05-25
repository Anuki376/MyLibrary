<?php include_once('header.php'); ?>
<div class="container-fluid">
	<section class="container features">
		<h3>All Books</h3>
		<?php if($msg=$this->session->flashdata('msg')): ?>
			<?php echo $msg; ?>
		<?php endif; ?>

		<div class="row">

			<div class="col-md-8">
				<?php echo anchor('ManageBooks/addbook','Add Book', ['class'=>'btn btn-dark']);?>
			</div>
			
			<div class="col-md-4" >
				<?php echo form_open("ManageBooks/search", ['class'=>'form-inline my-2 my-lg-0', 'role'=>'search']); ?>
					<?php echo form_input(['name'=>'query','class'=>'form-control mr-sm-2','placeholder'=>'Search']); ?>
					<?php echo form_submit(['value'=>'Search', 'class'=>'btn btn-dark my-2 my-sm-0']); ?>
				<?php echo form_close(); ?>
				<?php echo form_error('query','<div class="text-danger">', '</div>'); ?>
			</div>

		</div>

		<table class="table table-bordered table-hover bg-light table-surround shadow p-3 mb-5">
		  	<thead>
		    	<tr>
			      <th scope="col">Id</th>
			      <th scope="col">Title</th>
			      <th scope="col">Author</th>
			      <th scope="col">Action</th>
			    </tr>
			</thead>
			<tbody>

				<?php foreach($data as $row){
					echo "<tr>";
			    	echo "<td>".$row->Id."</td>";
			    	echo "<td>".$row->Title."</td>";
			    	echo "<td>".$row->Author."</td>";
			      	echo"<td>";
			      		echo anchor("ManageBooks/viewbook/{$row->Id}",'View',['class'=>'btn btn-info']);
			      		echo anchor("ManageBooks/updatebook/{$row->Id}",'Update',['class'=>'btn btn-secondary']);
			      		echo anchor("ManageBooks/deletebook/{$row->Id}",'Delete',['class'=>'btn btn-danger']);
			      	echo"</td>";
			    	echo"</tr>";
			    	}
			    ?>
		  	</tbody>
		</table>
		<?php echo anchor('ManageBooks','Back', ['class'=>'btn btn-dark']) ?>
	</section>
</div>
<?php include_once('footer.php'); ?>
	