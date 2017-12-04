<?php include "profmain.php" ?>
<div class="jumbotron">
	<!--<strong>Home -> Update Details</strong>-->
</div>
	<div class="board">	
    	<div class="container">
    		
    		<form action="user_register" method="post">
				
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<h5><lable>NIC</lable></h5></br>
							<h5><lable>First Name</lable></h5></br>
							<h5><lable>Last Name</lable></h5></br>
							<h5><lable>Telephone Number</lable></h5></br>
						</div>
						<div class="col-sm-4 col-md-4">
							<input type="text" placeholder="NIC" name="nic" class="form-control"></br>
							<input type="text" placeholder="First Name" name="firstName" class="form-control"></br>
							<input type="text" placeholder="Last Name" name="lastName" class="form-control"></br>
							<input type="text" placeholder="Telephone Number" name="tp" class="form-control"></br>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6"></div>
							<div class="col-sm-2 col-md-2">
								<input type="submit" name="reg" value="Update" >
							</div>
					</div>
			</form> 
		
    	</div>
    </div>

</div>
</body>
</html>