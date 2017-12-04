<!DOCTYPE html>
<html>
<body>
<div class="sect  sectOne" id="s1">
    <br><br>
    <div class="calendar">
        <center>
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=jt499m1v7f9gnac4eckj10s4ro%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Asia%2FColombo" style="border-width:0" width="600" height="500" frameborder="0" scrolling="no"></iframe>
        </center>
    </div>
    <div class="fm_header">
    		<center><h2>Reservation</h2></center>
    			<form class="fm_reserve" action="#">
    				<div class="fm_date">
    					<label class="lb_date" for="date">Date:</label>
    					<input type="date" class="in_date" id="i_date"  name="date">
    				</div>
    				<div class="Time">
    					<label class="lb_time" for="time">Start Time:</label>
    					<select id="inputTime" class="form-control">
        					<option selected>Choose Time</option>
        					<option>8.00 am </option>
        					<option>9.00 am </option>
        					<option>10.00 am </option>
        					<option>11.00 am </option>
        					<option>12.00 pm </option>
        					<option>1.00 pm </option>
        					<option>2.00 pm </option>
        					<option>3.00 pm </option>
        					<option>4.00 pm </option>
        					<option>5.00 pm </option>
        					<option>6.00 pm </option>
        					<option>7.00 pm </option>
      					</select>
      				</div>
      				<div class="Time">
      					<label class="lb_time" for="time">End Time:</label>
      					<select id="inputTime" class="form-control">
        					<option selected>Choose Time</option>
        					<option>9.00 am </option>
        					<option>10.00 am </option>
        					<option>11.00 am </option>
        					<option>12.00 pm </option>
        					<option>1.00 pm </option>
        					<option>2.00 pm </option>
        					<option>3.00 pm </option>
        					<option>4.00 pm </option>
        					<option>5.00 pm </option>
        					<option>6.00 pm </option>
        					<option>7.00 pm </option>
      					</select>
    				</div>
    				<div class="b_type">
    					<label class="lb_type" for="btype">Booking Type</label>
    					<select id="inputPurpose" class="f-control">
    						<option selected>Choose Purpose</option>
        					<option >Lecture</option>
        					<option >Meeting</option>
        					<option >Practical Session</option>
        				</select>
    				</div>
    				<div>
    					<label class="lb_purpose" for="purpose">Booking Purpose</label>
    					<input type="text" class="fPurpose" id="f_purpose" placeholder="Enter the purpose of the booking" name="purpose">
    				</div>
    				<div class="form-group">        
      					<div class="#">
        					<button type="submit" class="btn btn-default">Book Now</button>
      					</div>
    				</div>
    			</form>
			</div>
</div>
</body>
</html>
