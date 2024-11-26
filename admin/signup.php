<?php

require 'function.php';
session_start();

if (is_user())
	redirect('index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign In</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
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

  <link rel="stylesheet" type="text/css" href="../css/form/pure-min.css">
  <link rel="stylesheet" type="text/css" href="../css/form/style.css">

</head>


<body>
<div class="con">
		<div class="main">
  			<div class="main_resize">

 				 <div class="header">
      				<div class="logo">
                <img src="../img/oo.png" width=90 height=90 style="-webkit-transform:rotate(45deg);float:left; margin-top:30px ;margin-right:10px">
                  <h1 style="font-size:35px;padding-top:5px;"><a href="#"><span>Garcia Memorial Reservation <span class="sr">And Services</span></span></a></h1>
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
      </div>
      

      						<div class="clr"></div><br/><br/>
      							
      				</div>
        <!--/searchform -->
        
      			</div>
     
            <div class="widgets">
                  <ul>
                    <li><a href="https://www.facebook.com/julius.gudo14"><img src="../png/1.png"><a></li>
                    <li><a href="https://twitter.com/jul_stirlingite"><img src="../png/2.png"></a></li>
                    <li><img src="../png/3.png"></li>
                    <li><img src="../png/4.png"></li>
                     <li><img src="../png/5.png"></li>
                      <li><a data-toggle="modal" data-target="#largeModal"><img src="../png/uu.png"></a></li>
                  </ul>
               </div> 

   			<div id="navv">   
      			<div class="menu_nav">

      
        			<ul>
          			<li><a href="../index.php">Home</a></li>
           			<li><a href="../gallery.php">Gallery</a></li>
            		<li></span><a href="../plan.php">Planning</a></li>
          			<li><a href="../about.php">About Us</a></li>
          			<li><a href="../contact/index.php">Contact Us</a></li>
                <li><a href="signin.php">Login</a></li>
          			</ul>
				</div>

      		</div>
      

      <div class="clr"></div>
      </div>   
    
      <hr>


		
<div class="content">
      <div class="content_bg">
        <div class="mainbar">
          <div class="article">
                    <div class="clr"></div>
                    
                   <div id="form-con">
  <div class="container">
    <h1 class="a">Admin Sign Up</h1>
    

    <!-- error or success message will appear here -->
      <?php if (!empty($_GET['error'])): ?>
        <p class="status status-error pure-input-1"><?php echo $_GET['error']?></p>
      <?php endif ?>

      <?php if (!empty($_GET['success'])): ?>
        <p class="status status-success pure-input-1"><?php echo $_GET['success']?></p>
      <?php endif ?>
    <div id="form1">
    <!-- signup form -->
    <form action="signup_post.php" class="pure-form pure-form-stacked" method="post">
      <br/><br/>
    <fieldset class="pure-group">
        <span><img src="../png/uu.png"></span><input type="text"  name="username" placeholder="username">
        <br class="clear"><br/>
        <span><img src="../png/pp.png" class="pw"><input type="password"  name="password" placeholder="password">
        <br/><br/><br/>
        <div id="but">
        <input class="pure-button pure-button-primary pure-input-1" type="submit" value="Sign Up">
  
        <a href="signin.php"><input class="btn btn-success" type="button" value="Sign In"></a>
        </div>

    </fieldset>

    </form>
  </div></div><br/>
</div>
</div>
            <div class="clr"></div>
          </div>
          

            <div class="clr"></div>
          </div>
        </br>
      <div id="rightss">
        <div class="sidebar"></br>
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
                              <h3><span>Obituaries &amp; Tributes</span></h3>
                              <div><img src="../img/fune.jpeg" height="100"></div>
                               <p class="par">It's not always possible to pay respects in person, so we hope that this small token will help.</p></br>
                      </div>
        
                     
                            <div class="clr"></div>
      </div>
    </div>
  </div><br/>
                   

                   
                  </div></br></br>
                        <div class="clr"></div>

    </div>
    <br/>
 
  </div>

</div>      




             <div id="footer">
  <div id="one"><h5>Copyright &copy; 2017 Garcia Memorial Reservation and Services</h5>
    <h6>09153873454</h6>
    <p>Sta. Rita Lubao Pampanga<br />
      Email: <a href="index.php" style="color:blue;">garciamemorial@funeral.com</a><br />
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
</div><div class="clr"></div>
</div>
</div>
 <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><center>ACCOUNT</center></h4>
              </div>
              <div class="modal-body">
                <center>


                          <?php 

                              if (empty($_SESSION['username'])){
                                 echo  '<h3>'. 'You must log in first!'. '</h3>'.'</br>'. '<a href="../signin.php"><input class="btn btn-success" type="button" value="Sign In">'.'</a>'.'</br>'.'</br>'. '<a href="signin.php">'.'<input class="btn btn-warning" type="button" value="Admin Login">'.'</a>'; 
                                    }  
                            
                            else {
                              echo  '<h3 style="color:#78bbe6;"class="hello">'.'Hello'.'&nbsp;'.'&nbsp;'.'<span class="blue">'.$_SESSION['username'], '</span>'.'!'.'</h3>'.'<span style="color:#78bbe6;font-size:20px;" >'.'</br>'.'You are now logged in!'.'</span>'.'&nbsp;'.'&nbsp;'.'<a href="signout.php">'.'<button type="button" class="btn btn-success btn-lg">'.'Logout'.'</button>'.'</a>'; } ?>
                    
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