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
<title>White Shepherd Funeral Service</title>
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

	


	 	<div id="container">
	 		<div class="row">
	 			<br/><br/><br/>
	 			<h1>Garcia Memorial Customer Information</h1>
	 		</div>
	 		 
	 			<br/>
	 		<div class="row">
	 			<p>
	 				<a href="create.php" class="btn-success btn-large">Create</a> <br/>
	 			</p>
	 		
	 			<br/>
	 		</div>
	 		<div class="row">
	 			<table class="table table-condensed">
	 				<thead>
	 					<tr>
	 						<th><h5>Name</h5></th>
	 						<th><h5>Age</h5></th>
	 						<th><h5>Birthday</h5></th>
	 						<th><h5>Email Address</h5></th>
	 						<th width="150"><h5>Mobile Number</h5></th>
	 						<th><h5>Action</h5></th>
	 					</tr>
	 				</thead>
	 				<tbody>
	 					<?php
	 						include 'connect.php';
	 						$pdo = Database::connect();
	 						$sql ='SELECT * FROM client ORDER BY id DESC';
	 						foreach ($pdo->query($sql) as $row){
	 							echo '<tr>';
	 							echo '<td width=100>'.'<h6>'.$row['name'].'</h6>'. '</td>' ;
	 							echo '<td width=100>'.'<h6>'.$row['age'].'</h6>'. '</td>' ;
	 							echo '<td width=100>'.'<h6>'.$row['birthday'].'</h46>'. '</td>' ;
	 							echo '<td width=120>'.'<h6>'.$row['email'].'</h6>'.'</td>';
	 							echo '<td>'.'<h6>'.$row['mobile'].'</h6>'.'</td>';
	 							echo '<td width =250>';
	 							echo '<a class="btn btn-primary" href="read.php?id='.$row['id'].'">Read</a>';
	 							echo ' ';
	 							echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
	 							echo ' ';
	 							echo '<a class="btn btn-warning" href="delete.php?id='.$row['id'].'">Delete</a>';
	 							echo '</tr>';
	 						}
	 					Database::disconnect();	

	 					?>
	 				</tbody>
	 	
	 	
	 	</div>
</div>
</div></div></br></br></br>   

      
<script src="../jquery-1.11.3-jquery.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>

	 </body>
</html>
