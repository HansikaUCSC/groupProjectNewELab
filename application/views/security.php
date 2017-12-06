<?php include("profmain.php");  ?>
<center>
<div class="jumbotron">

	<form action="<?php echo base_url();?>/index.php/Upload/update_wpass" method="post">	
		<div class="row">
			<div class="col-md-6">
				
				<h4>Password</h4></br>
			</div>
			<div class="col-md-6">
				<input type="text" placeholder="Password" name="wpass" class="form-control"></br>
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
<div class="jumbotron">

	<form action="<?php echo base_url();?>/index.php/Upload/update_Dpass" method="post">	
		<div class="row">
			<div class="col-md-6">
				
				<h4>Device Password</h4></br>
			</div>
			<div class="col-md-10">
				<input type="text" placeholder="Device Password" name="DPass" class="form-control"></br>
			</div>
			

		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-2">
				<input type="submit" name="reg" value="Update" ></div>
			</div>
		</div>
</form>
</div>

</div>
</body>
</html>