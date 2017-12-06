<!DOCTYPE html>
<html>
<head>
	<title>RACnRS | Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/style4.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	
	
	
</head>
	<body>
		<nav>
			<b>RACnRS</b>
			<a href="#s1">HOME</a>
			<a href="#ss1">ABOUT US</a>
			<a href="#s2">PRODUCTS</a>
			<a href="#ss2">CONTACT US</a>
			<a class="user" href="#" ><?php echo $this->session->userdata('user_name'); ?></a>
				
		</nav>
		<div class="sect  sectOne" id="s1">
			<br><br><br><br><br>
			<div style="float: left;">
			<center>
        		<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=jt499m1v7f9gnac4eckj10s4ro%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Asia%2FColombo" style="border-width:0;" width="600" height="500" frameborder="0" scrolling="no"></iframe>
        	</center>
    		</div>

    		<div class="col-lg-5" id="form" style="background-color: #e6ebff; float: right; margin-right: 50px;">
    		
    			<form class="form-horizontal" style="margin-top: 10px;" action="calendar/BkCalendar" ></form>
  					<div class="form-group">
    					<label class="control-label col-sm-2" for="date">Date:</label>
    					<div class="col-sm-10">
      						<input type="date" class="form-control" id="date" name="date" required>
    					</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-2" for="time">Start Time:</label>
    					<div class="col-sm-10"> 
      						<select class="form-control" id="#" name="starttime">
      							<option selected="selected" type="hidden" disabled="disabled">Choose Start Time</option>
      							<option >8.00 am</option>
      							<option >9.00 am</option>
      							<option >10.00 am</option>
      							<option >11.00 am</option>
      							<option >12.00 pm</option>
      							<option >1.00 pm</option>
      							<option >2.00 pm</option>
      							<option >3.00 pm</option>
      							<option >4.00 pm</option>
      							<option >5.00 pm</option>
      							<option >6.00 pm</option>
      							<option >7.00 pm</option>
      						</select> 
    					</div>
  					</div>
  					
  					<div class="form-group">
    					<label class="control-label col-sm-2" for="time">End Time:</label>
    					<div class="col-sm-10"> 
      						<select class="form-control" id="#" name="endtime" required>
      							<option disabled="disabled" selected="selected " type="hidden" value="Choose End Time">Choose End Time</option>
      							<option >9.00 am</option>
      							<option >10.00 am</option>
      							<option >11.00 am</option>
      							<option >12.00 pm</option>
      							<option >1.00 pm</option>
      							<option >2.00 pm</option>
      							<option >3.00 pm</option>
      							<option >4.00 pm</option>
      							<option >5.00 pm</option>
      							<option >6.00 pm</option>
      							<option >7.00 pm</option>
      						</select> 
    					</div>
  					</div>
  					<div class="form-group">
  						<label class="control-label col-sm-2">Purpose</label>
  						<div>
  							<label class="radio-inline"><input type="radio" name="optradio">Lecture</label>
							<label class="radio-inline"><input type="radio" name="optradio">Meeting</label>
							<label class="radio-inline"><input type="radio" name="optradio">Practical Session</label>
						</div>
  					</div>
  					<div class="form-group">
  						<label class="control-label col-sm-2" for="comment">Description:</label>
  						<div class="col-sm-10"> 
  							<textarea class="form-control" rows="5" id="comment" placeholder="Write small descrition about your booking" name="comment"></textarea>
  						</div>
					</div>
  					<div class="form-group"> 
    					<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" class="btn btn-default">Confirm Booking</button>
    					</div>
  					</div>
				
				</form>
    		</div>
    	</div>
		<div class="subSection" id="ss1">
			<br><br>
			<h3><u>About Us</u></h3>
			<p>Reserving a hall in manual is time consuming and also boring thing. So we came with the new socution. RACnRS is not only for reserving process but also for the access controlling process. RACnRS is mainly consist the two parts. They are,
					<li>The device</li>
					<li>The web site</li></p>
			<p>You can use the device for access to the UCSC E-Lab and you can see the ongoing, upcomming lectures or meeting. For the reserving process you have to use this site.</p>
		</div>
		<div class="sect sectTwo" id="s2">

			<img class="image" src="<?php echo base_url() ?>/assets/images/1.JPG">
			<p style="color: white;">adgdgeeeeeeeee nm,m,</p>
			<button type="submit" class="btn btn-default">Read More</button>
		</div>
		<div class="subSection" id="ss2">
		<br><center>
			<h2><u>Contact Us</u></h2>
			<p><b>Email :</b> <u><i>elab.ucsc@cmb.ac.lk</i></u></p>
			<p><b>Address :</b> UCSC Building Complex, No.35, Reid Avenue, Colombo 07</p>
			<p><b>Tel :</b> +94 -11- 2581245/ 7</p>
			<p><b>Fax :</b> +94-11-2587239</p>
			</center>
		</div>
		<div class="sect sectThree" id="s3">

			
		</div>
	</body>
</html>