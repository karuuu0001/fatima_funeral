<?php
require_once('../function.php');
session_start();

if (!is_user()) {
  redirect('../signin.php');
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Garcia Memorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/style4.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/font-awesome.css">
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/arial.js"></script>
<script type="text/javascript" src="../js/cuf_run.js"></script>
  <script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/scripts.js"></script>

</head>

<body>
	 <div class="con">
        <div class="main">
          <div class="main_resize">
            <div class="header">
              <div class="logo">
              	  <img src="../img/oo.png" width=90 height=90 style="-webkit-transform:rotate(45deg);float:left; margin-top:30px ;margin-right:10px">
                  <h1 style="font-size:35px;padding-top:20px;"><a href="#"><span>Garcia Memorial Reservation <span class="sr">And Services</span></span></a></h1>
              </div>
          
        <div id="log">

               <div class="center">
                      <div class="search">
                          <form method="get" id="search" action="#">
                            <span>
                            <input type="text" placeholder = "Search Here" name="s" id="s" />
                            <input name="searchsubmit" type="image" src="../images/search.gif" value="Go" id="searchsubmit" class="btn"  />
                            </span>
                          </form>
                        </div>
                </div>
    
                       <div class="up">
                            <center><h5 style="color:white;padding:0;"class="hello">Hello <span class="blue"><?php echo $_SESSION['username'];?></span>!<img src="../png/uu.png" style="width:30px;height:30px;"></h5>
                            <a href="../signout.php"><button type="button" class="btn btn-success btn-lg" style="margin:0;">Logout</button></a>
                            </center>  
                       </div>
         </div>
              

              <div class="clr"></div></br></br>
                 
              </div>        
          </div>
				 <div class="widgets">
				        <ul>
				          <li><img src="../png/1.png"></li>
				          <li><img src="../png/2.png"></li>
				          <li><img src="../png/3.png"></li>
				          <li><img src="../png/4.png"></li>
				           <li><img src="../png/5.png"></li>
				            <li><a data-toggle="modal" data-target="#largeModal"><img src="../png/uu.png"></a></li>
				        </ul>
				     </div>   
                  <div id="navv">   
                    <div class="menu_nav">
                          <ul>
                              <li><a href="../home.php">Home</a></li>
                              <li><a href="../gallery.php">Gallery</a></li>
                              <li></span><a href="../plan.php">Planning</a></li>
                              <li><a href="../about.php">About Us</a></li>
                              <li class="active"><a href="index.php">Contact Us</a></li>
                         
                          </ul>
                          <div class="clr"></div>
                     
                   

                    <br/>
                    <br/><br/>


				<div class="sidebar">
				        <div class="pull-center">
				           <span ><img src="../png/calendar.png" class="calendar"></span>
				                <?php
				                $Today = date('y:m:d');
				                $new = date('l, F d, Y', strtotime($Today));
				                echo $new;
				                ?>
				      </div>
				            <br/>
				         
				           
				         
				              <div class="gadget">
				              <h3><span>Order Flowers</span></h3>

				              <div><img src="../img/ii.png"></div>
				              <p class="par">Offer a gift of comfort and beauty to a family suffering from loss.</p>

				         
				          <div class="gadget">
				            <h3><span>Wise Words</span></h3>
				            <div class="clr"></div>
				            <div class="testi">
				              <p><span class="q"><img src="../images/qoute_1.gif" width="20" height="15" alt="" /></span> We can let circumstances rule us, or we can take charge and rule our lives from within. <span class="q"><img src="../images/qoute_2.gif" width="20" height="15" alt="" /></span></p>
				              <p class="title"><strong>Earl Nightingale</strong></p>
				            </div>
				          </div>
				        </div>
				        <div class="clr"></div>
				       
				       </div>
									
				</div>

					<div class="pull-cen">
							<h2 style="color:#78bbe6;">Contact Form</h2>
							
							<form class="form form-inline" method="POST" action="contact_query.php">
								
								<p class="full_name">
									<label for="full_name" class="label">Your Name</label><br/>
									<input type="text" name="full_name" id="full_name" placeholder="" autofocus="autofocus" />
									
								</p>
								
								<p class="email">
									<label for="email"class="label">Your Email Address</label><br/>
									<input type="text" name="email" id="email" placeholder="" />
									
								</p>	
							
								<p class="message">
									<label for="message" class="label">Your Message</label><br/>
									<textarea   rows=5  cols=6 name="message" placeholder="" /></textarea> 
									
								</p>
								<p class="button_submit">
								<input type="submit" name="send_message" value="Send" />
								</p>

							</form>
						</div>

					
</div>
						<div class="clear"></div>
			
	


                                    <div id="connect"><h3 style="color:#78bbe6;">Connect with Us</h3>
                                          <div id="social">
                                             <a href="#"><img src="../png/fb.png"></a>
                                              <a href="#"><img src="../png/twitter.png"></a>
                                              <a href="#"><img src="../png/in.png"></a>
                                              <a href="#"><img src="../png/ha.png"></a>
                                          </div>
                                    </div><br/>
                                   <br/>
                            </div>
            <div id="footer">
  <div id="one"><h5>Copyright &copy; 2017 White Shepherd Funeral Service</h5>
    <h6>09153873454</h6>
    <p>Sta. Rita Lubao Pampanga<br />
      Email: <a href="index.php" style="color:blue;">whiteshepherd@funeral.com</a><br />
      <br /> 
     <a href="admin/index.php" style="color:green"> Admin</a> | Privacy Policy | Site Map | Portfolio<br />
      

  </div>
  <div id="right">
    <div class="wrap"><h5>Why Come to Us</h5><p<a href="index.php" style="color:green;">Our Story</a></p>
     <p> <a href="index.php" style="color:green;">Our Products</a> </p><p><a href="index.php" style="color:green;">Contact Us </a></p><p><a href="index.php" style="color:green;">Obituaries</a></p>
    </div>
    <div class="wrap"><h5>Funeral Planning</h5><p><a href="index.php" style="color:green;">Plan Ahead</a></p>
     <p> <a href="index.php" style="color:green;">Our Products</a></p><p><a href="index.php" style="color:green;">Contact Services</a></p>
    </div>
    <div class="wrap"><h5>Community Links</h5><p><a href="index.php" style="color:green;">Local Business</a>
      </p>
    </div>
    <div class="wrap"><h5>Flowers</h5><p><a href="index.php" style="color:green;">Order Flowers</a>
      </p>
    </div>
  </div>
</div>
  <div class="dev">
    <h5>Developed by Julius N. Guevarra</h5>
  </div>
<div class="container">
 <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><center>DEVELOPER</center></h4>
              </div>
              <div class="modal-body">
               <center>


                          <?php 

                              if (empty($_SESSION['username'])){
                                 echo  '<h3>'. 'You must log in first!'. '</h3>'.'</br>'. '<a href="../signin.php"><input class="btn btn-success" type="button" value="Sign In">'.'</a>'.'</br>'.'</br>'. '<a href="../admin/signin.php">'.'<input class="btn btn-warning" type="button" value="Admin Login">'.'</a>'; 
                                    }  
                            
                            else {
                              echo  '<h3 style="color:#78bbe6;"class="hello">'.'Hello'.'&nbsp;'.'&nbsp;'.'<span class="blue">'.$_SESSION['username'], '</span>'.'!'.'</h3>'.'<span style="color:#78bbe6;font-size:20px;" >'.'</br>'.'You are now logged in!'.'</span>'.'&nbsp;'.'&nbsp;'.'<a href="../signout.php">'.'<button type="button" class="btn btn-success btn-lg">'.'Logout'.'</button>'.'</a>'; } ?>
                    
                        </center>
              </div>
           
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              
              </div>
            </div>
          </div>
        </div>  
      </div>
         
<script src="../jquery-1.11.3-jquery.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
</body>

</html>

