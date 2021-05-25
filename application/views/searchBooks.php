<?php include_once('header.php'); ?>
<div class="container-fluid">
	<section class="container features">
		<h4>Books Purchased</h4>
		<div class="row" >
			<?php echo form_open("ManageReports/search", ['class'=>'form-inline my-3 my-lg-0', 'role'=>'search']); ?>
			<div class="col-md-5">
				<h6>By Year: </h6>
				<?php echo form_input(['name'=>'query','class'=>'form-control mr-sm-2','placeholder'=>'Enter year(xxxx)']); ?>
			</div>
			<div class="col-md-5">
				<h6>By Month: </h6>
				<?php echo form_input(['name'=>'query2','class'=>'form-control mr-sm-2','placeholder'=>'Enter month(x)']); ?>
			</div>
			<div class="col-md-2">
				<?php echo form_submit(['value'=>'Search', 'class'=>'btn btn-dark my-2 my-sm-0']); ?>
			</div>
			<?php echo form_close(); ?>
			<?php echo form_error('query','<div class="text-danger">', '</div>'); ?>
		</div>
		<table class="table table-bordered table-hover bg-light table-surround shadow p-3 mb-5">
		  	<thead>
		    	<tr>
			      <th scope="col">Id</th>
			      <th scope="col">Title</th>
			      <th scope="col">Author</th>
			      <th scope="col">Date Purchased</th>
			      <th scope="col">Purchase Price($)</th>
			    </tr>
			</thead>
			<tbody>

				<?php foreach($data as $row){
					echo "<tr>";
			    	echo "<td>".$row->Id."</td>";
			    	echo "<td>".$row->Title."</td>";
			    	echo "<td>".$row->Author."</td>";
			    	echo "<td>".$row->Date."</td>";
			    	echo "<td>".$row->Price."</td>";
			    	echo"</tr>";
			    	}
			    ?>
			    <tr>
			    	<td colspan="4">Total no. of books purchased</td>
			    	<?php echo "<td class='text-danger'>".$count."</td>"; ?>
			    </tr>
			    <tr>
			    	<td colspan="4">Total price($)</td>
			    	<?php echo "<td class='text-danger'>".$sum."</td>"; ?>
			    </tr>
		  	</tbody>
		</table>
		<?php echo anchor('ManageReports/groupedreports','Back', ['class'=>'btn btn-dark']) ?>
	</section>
</div>
<?php include_once('footer.php'); ?>
	