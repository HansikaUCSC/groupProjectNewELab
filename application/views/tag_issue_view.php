<!DOCTYPE html>
<html>

  <div class="container">
  <?php if ($this->session->flashdata('exist')) {
    echo $this->session->flashdata('exist');
    
  }
 
    echo form_open('tag_issue_con/insert');  
 
    ?>
    <form>
   

      <div class="form-group">
      <?php echo form_error('fname'); ?>
        <label for="fname">First Name</label>
        <input type="text" class="form-control" name="fname">
      </div>

      <div class="form-group">
      <?php echo form_error('lname'); ?>
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" name="lname">
      </div>

      <div class="form-group">
      <?php echo form_error('nic'); ?>
        <label for="nic">NIC No</label>
        <input type="text" class="form-control" name="nic">
      </div>

      <button type="submit" class="btn btn-default">Issue</button>

     

    </form>
    <?php echo 
      form_close();
      ?>
  </div>


</html>
