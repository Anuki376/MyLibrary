<?php include_once('header.php'); ?>

<div class="container-fluid">
	<div class="container features rounded">
		<h3>Reports</h3>
		<div class="list-group">
		    <a href="<?php echo base_url(); ?>ManageReports/prevmonth " class="list-group-item list-group-item-action">Report 1: Books purchased in the last month</a>
		    <a href="<?php echo base_url(); ?>ManageReports/groupedreports " class="list-group-item list-group-item-action">Report 2: Books purchased by month/year</a>
		</div>	
	</div>
</div>

<?php include_once('footer.php'); ?>