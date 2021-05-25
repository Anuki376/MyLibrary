<?php include_once('header.php'); ?>
<div class="container-fluid">
	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/ManageReports ">Reports</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Report 2</li>
		  </ol>
	</nav>
	<section class="container features">
		<h4>List Purchased Books</h4>
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

		  	</tbody>
		</table>
		<?php echo anchor('ManageReports','Back', ['class'=>'btn btn-dark']) ?>
	</section>
</div>
<?php include_once('footer.php'); ?>
	