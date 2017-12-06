<?php include("profmain.php");  ?>
<center>
	
	<div class="col-lg-12" style=" margin-top: 20px; background-color:#e6f0ff; margin-left: 20px;">
		<form class="form-horizontal" action="<?php echo base_url();?>/index.php/Upload/update" method="post" style="margin-top: 20px;">
	  		<div class="form-group">
	    		<label class="control-label col-sm-2" for="fname">First Name:</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="fname" placeholder="First Name" name="firstName">
	    		</div>
	  		</div>
	  		<div class="form-group">
	    		<label class="control-label col-sm-2" for="lname">Last Name:</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="lname" placeholder="Last Name" name="lastName">
	    		</div>
	  		</div>
	  		<div class="form-group">
	    		<label class="control-label col-sm-2" for="contactNumber">Contact Number:</label>
	    		<div class="col-sm-10">
	      			<input type="text" class="form-control" id="contactNumber" placeholder="Contact Number" name="tp">
	    		</div>
	  		</div>
	  		<div class="form-group">
	    		<div class="col-sm-offset-2 col-sm-10">
	      			<button type="submit" class="btn btn-default" name="reg">Update</button>
	    		</div>
	  		</div>
		</form>

	</div>
	
</center>

</div>
</div>
</body>
</html>

