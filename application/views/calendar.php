<!DOCTYPE html>
<html>
<body>
<div class="sect  sectOne" id="s1">
    <br><br><br><br><br>
    <div>
        <center>


            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=jt499m1v7f9gnac4eckj10s4ro%40group.calendar.google.com&amp;color=%235F6B02&amp;ctz=Asia%2FColombo" style="border-width:0" width="600" height="500" frameborder="0" scrolling="no"></iframe>
        </center>
    </div>
    <div class="col-lg-5" id="form" style="background-color: #e6ebff; float: right; margin-right: 50px;">
        <form class="form-horizontal" style="margin-top: 10px;">
            <div class="form-group">
                <label class="control-label col-sm-2" for="date">Date:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="time">Start Time:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="#">
                        <option selected>Choose Start Time</option>
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
                    <select class="form-control" id="#">
                        <option selected>Choose End Time</option>
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
                    <textarea class="form-control" rows="5" id="comment" placeholder="Write small descrition about your booking"></textarea>
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
</body>
</html>
