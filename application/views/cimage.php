<!--<?php include "profmain.php" ?>
<div class="jumbotron">
	<strong>Home -> Update Details</strong>
</div>
	<form action="<?php echo base_url()?>/index.php/Upload/do_upload" method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<button type="submit" name="submit">Upload</button>	
	</form>

</div>
</body>
</html>
<html>
<head>
<title>Upload Form</title>
</head>
<body>-->

<?php include("profmain.php");  ?>
<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile"  />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>