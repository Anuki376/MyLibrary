<?php include_once('header.php'); ?>
<div class="container-fluid">
	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/ManageReports ">Reports</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Report 1</li>
		  </ol>
	</nav>
	<section class="container features">
		<h4>Books Purchsed in the Last Month</h4>
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
		<?php echo anchor('ManageReports','Back', ['class'=>'btn btn-dark']) ?>
	</section>
</div>
<?php include_once('footer.php'); ?>
	