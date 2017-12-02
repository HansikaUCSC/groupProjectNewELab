
<script src=<?php echo base_url();?>js/jquery.min.js></script>
<div class="header">
	<link rel="stylesheet" href=<?php echo base_url();?>css/style.css>
		<div class="wrap">
			<div class="logo">
				<a href=<?php echo base_url(); ?>home><img src=<?php echo base_url();?>images/logon.png alt=""/></a>
			</div>
			<div class="top-nav">
				<div class="menu">
				<span class="menu"> </span>
			   		<ul>
						<li><a href=<?php echo base_url(); ?>home>Home</a></li>
						<li class=""><a href=<?php echo base_url(); ?>about>Profile</a></li>
						<li class=""><a href=<?php echo base_url(); ?>services>Take Me a Tour</a></li>
						<li class=""><a href=<?php echo base_url(); ?>gallery>Our Products</a></li>
						<li class=""><a href=<?php echo base_url(); ?>contact>Contact Us</a></li>
                        <a class="user" href="#" ><?php echo $this->session->userdata('user_name'); ?></a>
                        <li class=""><a href=<?php echo base_url(); ?>users/login>Logout</a></li>

                    </ul>
					<div class="clear"></div>
	   		  	</div>
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
	   	   </div>
			<div class="clear"></div>
	  </div>
 </div>
