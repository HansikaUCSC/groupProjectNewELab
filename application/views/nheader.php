<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RACnRS |Home </title>

    <!--bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href=<?php echo base_url();?>css/header.css>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navi">
<nav class="navbar navbar-inverse" >
    <div class="wrp">
    <div class="container-fluid" id="menu">
        <div class="navbar-brand">
            <a href=<?php echo base_url(); ?>home><img src=<?php echo base_url();?>images/logon.png alt=""/></a>
        </div>

        <ul class="nav navbar-nav navbar-left">
            <li class=""><a href=<?php echo base_url(); ?>home>Home</a></li>
            <li class=""><a href=<?php echo base_url(); ?>services>Take Me a Tour</a></li>
            <li class=""><a href=<?php echo base_url(); ?>gallery>Our Products</a></li>
            <li class=""><a href=<?php echo base_url(); ?>contact>Contact Us</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class=""><a href=<?php echo base_url(); ?>about><?php echo $this->session->userdata('user_name'); ?></a></li>
            <li class=""><a href="#"><span class="glyphicon glyphicon-log-out"></span></a></li>

        </ul>
    </div>
    </div>
</nav>
</div>
</body>
</html>