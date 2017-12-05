<?php include("profmain.php");  ?>
<center>
<div class="jumbotron">

	<form action="user_register" method="post">	
		<div class="row">
			<div class="col-md-6">
				<h4>User Name</h4></br>
				<h4>First Name</h4></br>
				<h4>Last Name</h4></br>
				<h4>Telephone Number</h4></br>
			</div>
			<div class="col-md-6">
				<input type="text" placeholder="Index Number" name="indexNumber" class="form-control"></br>
				<input type="text" placeholder="First Name" name="firstName" class="form-control"></br>
				<input type="text" placeholder="Last Name" name="lastName" class="form-control"></br>
				<input type="text" placeholder="Telephone Number" name="tp" class="form-control"></br>
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
</body>
</html>