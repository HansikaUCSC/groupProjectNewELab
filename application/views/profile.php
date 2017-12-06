<?php include("profmain.php");  ?>
<center>
<div class="jumbotron">

	<form action="<?php echo base_url();?>/index.php/Upload/update" method="post">	
		<div class="row">
			<div class="col-md-6">
				<h4>First Name</h4></br>
				<h4>Last Name</h4></br>
				<h4>Telephone Number</h4></br>
			</div>
			<div class="col-md-6">
				<input type="text" placeholder="First Name" name="firstName" class="form-control"></br>
				<input type="text" placeholder="Last Name" name="lastName" class="form-control"></br>
				<input type="text" placeholder="Phone Number" name="tp" class="form-control"></br>
			</div>
			

		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-2">
				<input type="submit" name="reg" value="Update" ></div>
			</div>
		</div>
</form>
</div>
</center>

</div>
</div>
</body>
</html>