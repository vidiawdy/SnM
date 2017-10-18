<?php
$assets_location = base_url()."assets/";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>indexAfter</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $assets_location;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $assets_location;?>css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='<?php echo $assets_location;?>http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo $assets_location;?>js/jquery1.min.js"></script>
<!-- start menu -->
<link href="<?php echo $assets_location;?>css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $assets_location;?>js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="<?php echo $assets_location;?>css/fwslider.css" media="all">
    <script src="<?php echo $assets_location;?>js/jquery-ui.min.js"></script>
    <script src="<?php echo $assets_location;?>js/css3-mediaqueries.js"></script>
    <script src="<?php echo $assets_location;?>js/fwslider.js"></script>
<!--end slider -->
<script src="<?php echo $assets_location;?>js/jquery.easydropdown.js"></script>
</head>
<body>
     <div class="header-top">
	   <div class="wrap"> 

   			
			 <div class="cssmenu">
				<ul>
					 <?php
                          if ($this->session->has_userdata('nama')) {
                              echo
                                 '
                                 <li>
                                    <a href="'.base_url('index.php/MyController').'">'.$this->session->userdata("nama").'
                                    </a>
                                 </li>
                                 <li>
                                    <a href="'.base_url('index.php/Login_User/logout').'">logout
                                    </a>
                                 </li>
                                 ';
                          }
                          else{
                              echo
                                 '
                                 <li>
                                    <a href="'.base_url('index.php/Login_user/index').'">login
                                    </a>
                                 </li>
                                 
                                 ';
                          }
                              ?>|
					<!--<li><a href="checkout.html">Wishlist</a></li> |
					<li><a href="checkout.html">Checkout</a></li> |--> |
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.html"><img src="<?php echo $assets_location;?>images/LOGOSS.PNG" alt=""/></a>
                                        <h3 class="title" style="color: black">Selamat datang di dashboad anda</h3>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="<?php echo base_url();?>/index.php/MyController/indexAfter">Home</a></li>
			<li><a class="color4" href="<?php echo base_url();?>/index.php/MyController/makanan">Makanan</a>
				</li>				
				<li><a class="color5" href="<?php echo base_url();?>/index.php/MyController/minuman">Minuman</a>
			
				</li>
				
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
       
	  <div class="tag-list">
	    
		<ul class="icon1 sub-icon1 profile_img">
			
				<ul class="sub-icon1 list">
					<li><h3>No Products</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="<?php echo $assets_location;?>images/brand.jpg" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">Sponsorship and Media Partner</h4>
                        <!-- /Text description -->
                    </div>
                    
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="<?php echo $assets_location;?>images/yuhu.jpg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">We are here to make your job easier! </h4>
                        <p class="description">as a bridge between you and your supporter</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
 
	   <div class="clear"></div>
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