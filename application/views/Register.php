<?php
$assets_location = base_url()."assets/";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $assets_location;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='<?php echo $assets_location;?>http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo $assets_location;?>js/jquery1.min.js"></script>
<!-- start menu -->
<link href="<?php echo $assets_location;?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $assets_location;?>js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="<?php echo $assets_location;?>js/jquery.easydropdown.js"></script>
</head>
<body> 
	<div class="header-top">
			 <div class="cssmenu">
				<ul>
					<li class="active"><a href="<?php echo base_url();?>/index.php/Form">SignUp</a></li> |
					<!--<li><a href="<?php echo $assets_location;?>checkout.html">Wishlist</a></li> |
					<li><a href="<?php echo $assets_location;?>checkout.html">Checkout</a></li> |-->
					<li><a href="<?php echo base_url();?>index.php/login_user">Log In</a></li> |
				
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	 <div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="<?php echo $assets_location;?>index.html"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="<?php echo base_url();?>/index.php/MyController/">Home</a></li>
			</ul>
			</div>
		</div>
	</div>
          <div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Register</h4>
    		   <form method="post" action="<?php echo base_url();?>index.php/form/submit">
    			 <div class="col_1_of_2 span_1_of_2">
		   			<div><input type="text" name="name" placeholder="name"></div>
		    			<div><input type="text" name="username" placeholder="username"></div>
		    			<div><input type="password" name="password" placeholder="password"></div>
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2">	
		    		<div><input type="text" name="address" placeholder="address"></div>

		    		<div><input type="text" name="country" placeholder="Country"></div>		        
		          <div><input type="text" name="city" placeholder="City"></div>
		           <div>
		          </div>
		          	<div><input type="text" name="phone_number" placeholder="phone_number"></div>
		          </div>

		      <div class="grey">
					   <button type="submit" name="Submit" value="submit">Submit</button>
					 </div>
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>
    <div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap"> 
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>Contact us</h3>
						<div class="company_address">
					
							   		<p>087752806361</p>
					   		<p>Phone:(031) 222 666 444</p>
					 	 	<p>Email: <span>snm.com</span></p>
					   		
					   </div>
					   
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
		  </div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	             <div class="copy">
			    
		         </div>
				<div class="f-list2">
				 <ul>
					
				 </ul>
			    </div>
			    <div class="clear"></div>
		      </div>
	     </div>
	</div>
</body>
</html>