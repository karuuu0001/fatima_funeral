
<?php
require_once('../function.php');
session_start();

if (!is_user()) {
  redirect('../signin.php');
}

?>


<?php
	require 'connect.php';
	$id = null;
	if(!empty ($_GET['id'])){
		$id = $_REQUEST['id'];
	}

	if(null==$id){
		header ("Location : index.php");
	} else{
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM client where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();
	}
?>



	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Garcia Memorial || Info</title>
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
  <script type="text/javascript" src="js/scripts.js"></script>
<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
	
	<link rel="stylesheet" href="../css/style3.css">
	<link rel="stylesheet" href="../bootstrap/style.css">


	<script src ="../js/bootstrap.min.js"></script>
</head>
	

	 <body>

	 	<div class="widgets">
                  <ul>
                    <li><a href="https://www.facebook.com/julius.gudo14"><img src="../png/1.png"><a></li>
                    <li><a href="https://twitter.com/jul_stirlingite"><img src="../png/2.png"></a></li>
                    <li><img src="../png/3.png"></li>
                    <li><img src="../png/4.png"></li>
                     <li><img src="../png/5.png"></li>
                  </ul>
               </div>   
            </div>



<div class="con1">
<div class="main1">
  <div class="main_resize1">

 <div class="header1">
                <div class="logo1">
                     <img src="../img/oo.png" width=90 height=90 style="-webkit-transform:rotate(45deg);float:left; margin-top:30px ;margin-right:10px">
                  <h1 style="font-size:35px;padding-top:20px;"><a href="#"><span>Garcia Memorial Reservation <span class="sr">And Services</span></span></a></h1>
                  </br>  
                
                </div>

        <div class="up1">


    <center><h5 style="color:white;padding:0;"class="hello">Hello <span class="blue"><?php echo $_SESSION['username'];?></span>!<img src="../png/uu.png" style="width:30px;height:30px;"></h5>
   
    <a href="signout.php"><button type="button" class="btn btn-success btn-lg" style="margin:0;">Logout</button></a>
  </center>  
  
  </div>

        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <br/><br/>
      <div class="menu_nav1">

      
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="message.php">Messages</a></li>
           
       
        </ul>
    </br>
  <div class="clr"></div>
      </div>   
</br>

	<div id="bg">
	 <div class="container">
	 	<div class="span10 offset1">
	 		<div class="row">
	 			<br/><br/><br/>
	 			<h1>Read a Customer Information</h1>
	 		</div>
	 		<br/></br/></br/>
	 		<div class="form-horizontal">
	 			<div class="control-group">
	 				<label class="control-label"><h4 class="he">Name:</h4 class="he"></label>
	 				<div class="controls">
	 					<label class="checkbox"><h5 class="b"><?php echo $data['name'];?></h5></label>
	 				</div>

	 		</div>
	 		<div class="control-group">
	 			<label class="control-label"><h4 class="he">Age:</h4 class="he"></label>
	 			<div class="controls">
	 				<label class="checkbox"><h5 class="b"><?php echo $data['age'];?></h5></label>
	 			</div>
	 		</div>
	 		<div class="control-group">
	 			<label class="control-label"><h4 class="he">Birthday:</h4 class="he"></label>
	 			<div class="controls">
	 				<label class="checkbox"><h5 class="b"><?php echo $data['birthday'];?></h5></label>
	 			</div>
	 		</div>
	 		<div class="control-group">
	 			<label class="control-label"><h4 class="he">Email Address:</h4 class="he"></label>
	 			<div class="controls">
	 				<label class="checkbox"><h5 class="b"><?php echo $data['email'];?></h5></label>
	 			</div>
	 		</div>

	 		<div class="control-group">
	 			<label class="control-label"><h4 class="he">Mobile Number:</h4></label>
	 			<div class="controls">
	 				<label class="checkbox"><h5 class="b"><?php echo $data['mobile'];?></h5></label>
	 			</div>
	 		</div>

	 		<div id="buttons">

	 			<a class="btn btn-success btn-lg" href="index.php">Back</a><br/><br/><br/><br/>
	 		</div>
	 		<br/><br/><br/>
	 	</div>
	 </div>
</div></div>
</div>
</div>
 	</div>
             <div id="footer">
	              <div id="one"><h5 style="color:black;">Copyright &copy; 2017 Garcia Memorial Reservation and Services</h5>
	                <h6>09153873454</h6>
	                <p>Sta. Rita Lubao Pampanga<br />
	                  Email: garciamemorial	@funeral.com<br /><br /> 
	                <a href="admin/index.php" style="color:green"> Admin</a> | Privacy Policy | Site Map | Portfolio<br />
	              </div>


                    <div id="right">
                      <div class="wrap"><h5 style="color:black;">Why Come to Us</h5><p>Our Story</p>
                       <p> Our Products </p><p>Contact Us </p><p>Obituaries</p>
                       </div>
                       <div class="wrap"><h5 style="color:black;">Funeral Planning</h5><p>Plan Ahead</p>
                          <p> Our Products</p><p>Contact Services</p>
                       </div>
                       <div class="wrap"><h5 style="color:black;">Community Links</h5><p>Local Business</p>
                       </div>
                       <div class="wrap"><h5 style="color:black;">Flowers</h5><p>Order Flowers</p>
                      </div>
                 	   </div>
              		</div>
   			 </div>
   			
</body>


</html>