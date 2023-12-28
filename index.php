<?php
require_once('admin/function.php');
connectdb();
 $ttl = mysql_fetch_array(mysql_query("SELECT sitename, email, mobile FROM general_setting WHERE id='1'"));
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title> <?php echo $ttl[0]; ?></title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<style>
	<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}

</script>


body {
    margin-top: 50px; /* Required margin for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}



body {
    background: url('img/bg.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
	
	
	
	
	</style>
	
	

<style type="text/css">
#marquee_replacements{
 border:0px solid #000;
 width:200px;
 height:150px;
 overflow:hidden;
}
#marquee_replacements p.spacers{
 height:150px;
}
</style>



<style type="text/css">
#marquee_replacement{
 border:0px solid #000;
 width:200px;
 height:150px;
 overflow:hidden;
}
#marquee_replacement p.spacer{
 height:150px;
}
</style>


<script type="text/javascript">

var speed = 2;
function init(){
  var el = document.getElementById("marquee_replacement");
  el.style.overflow = 'hidden';
  scrollFromBottom();
}
 
var go = 0;
var timeout = '';
function scrollFromBottom(){
  clearTimeout(timeout);
  var el = document.getElementById("marquee_replacement");
  if(el.scrollTop >= el.scrollHeight-150){
    el.scrollTop = 0;
  };
  el.scrollTop = el.scrollTop + speed;
  if(go == 0){
    timeout = setTimeout("scrollFromBottom()",50);
  };
}
 
function stop(){
  go = 1;
}
 
function startit(){
  go = 0;
  scrollFromBottom();
}



/////for 2nd
var speeds = 2;
function inits(){
  var els = document.getElementById("marquee_replacements");
  els.style.overflow = 'hidden';
  scrollFromBottoms();
}
 
var gos = 0;
var timeouts = '';
function scrollFromBottoms(){
  clearTimeout(timeouts);
  var els = document.getElementById("marquee_replacements");
  if(els.scrollTop >= els.scrollHeight-150){
    els.scrollTop = 0;
  };
  els.scrollTop = els.scrollTop + speeds;
  if(gos == 0){
    timeouts = setTimeout("scrollFromBottoms()",50);
  };
}
 
function stops(){
  gos = 1;
}
 
function startits(){
  gos = 0;
  scrollFromBottoms();
}

window.onload = function(){

startits();
startit();

}


</script>



	
</head>
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;">
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		 <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo $ttl[0]; ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
					      <?php
	  $ddaa = mysql_query("SELECT id, title FROM menus ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {			

if($data[0]==1){
	
}else{
 echo "<li><a href=\"menu.php?id=$data[0]\">$data[1]</a></li>";
	
}
	}
	?>
					
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		
	
	</header> <!-- end of header area -->


<div class="container"><br/><br/><br/>
			<div class="row">
			<div class="row clearfix">
				<div class="col-md-4">
					<img src="img/logo.png" alt="">
				</div>
				<div class="col-md-4 column">
								<?php
$rc = mysql_fetch_array(mysql_query("SELECT radiocode FROM general_setting WHERE id='1'"));
if ($rc[0]=="0"){
}else{
echo "$rc[0]";
}

?>	 

				
				
				</div>
				<div class="col-md-4 column">
					<h3 style="color: #fff;">
					
					<?php					
					echo "Phone: $ttl[1]<br>Email: $ttl[2] ";
					?>
 					</h3>
				</div>
			</div>

				
			</div>
			
			
			
		</div>
			<br>
			<br>
		<section class="slider" id="home">	

<h1>&nbsp;</h1>
				<div class="container">
				

				<div class="col-md-5 column">
<?php
$add = mysql_fetch_array(mysql_query("SELECT title, img FROM ads WHERE id='1'"));
echo "<a href=\"$add[0]\" target=\"_blank\"><img src=\"img/advertise/$add[1]\" alt=\"\" style=\"width:100%; height:100px;\"></a>";
?>
						
				
				</div>
				<div class="col-md-2 column">
				</div>
				<div class="col-md-5 column">
<?php
$add = mysql_fetch_array(mysql_query("SELECT title, img FROM ads WHERE id='2'"));
echo "<a href=\"$add[0]\" target=\"_blank\"><img src=\"img/advertise/$add[1]\" alt=\"\" style=\"width:100%; height:100px;\"></a>";
?>				
				</div>
		<br/><br/><br/><br/>

		
    
			
					<div class="row">

					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
							<div class="header-backup"></div>
					        <!-- Wrapper for slides -->
					        <div class="carousel-inner" role="listbox">
							
								     
									 <?php
									 
$tvc = mysql_fetch_array(mysql_query("SELECT tvcode FROM general_setting WHERE id='1'"));
if ($tvc[0]=="0"){
	


//////---------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> SLIDER
	  $f1 = mysql_fetch_array(mysql_query("SELECT id, img FROM sliders"));
 echo " <div class=\"item active\"><img src=\"img/slider/$f1[1]\" alt=\"\"></div>";
	  
	  $ddaa = mysql_query("SELECT id, img FROM sliders ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {									
 echo " <div class=\"item\"><img src=\"img/slider/$data[1]\" alt=\"\"></div>";
	}
//////---------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> SLIDER


}else{
echo "$tvc[0]";
}
	?> 
					        </div>

					        <!-- Controls -->
					        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev"></a>
					        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next"></a>
					    </div>

					</div>
				</div>
			</section><!-- end of slider section -->

<br>
<br>
<br>
			
	  <div class="container">
<div class="row clearfix">
		<div class="col-md-3 column">
		
		
                    <div class="panel panel-primary">
					
                        <div class="panel-heading">Programs</div>
                        <div class="panel-body">
        
		<div id="marquee_replacement" onmouseout="startit();" onmouseover="stop();">
			<p class="spacer"></p>				
      <?php
	  $ddaa = mysql_query("SELECT id, title, tm FROM programs ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {									
 echo " <a href=\"programs.php?id=$data[0]\"><h4>$data[2]  : $data[1] </h4></a>";
	}
	?>
<p class="spacer"></p>
       </div> </div>
                        
                    </div>
			
		</div>
		<div class="col-md-6 column">
			 <div class="panel panel-primary">
					
                       
                        <div class="panel-body" style="height: 274px; ">
				<?php
$txt = mysql_fetch_array(mysql_query("SELECT btext FROM menus WHERE id='1'"));
echo "$txt[0]";
?>	                            
     
	 </div>
                        
                    </div>
		</div>
		<div class="col-md-3 column">
		
		
                    <div class="panel panel-primary">
					
                        <div class="panel-heading">
                            RJ's List
                        </div>
                        <div class="panel-body">
       <div id="marquee_replacements" onmouseout="startits();" onmouseover="stops();">
			<p class="spacers"></p>	
	   
	   							
      <?php
	  $ddaa = mysql_query("SELECT id, title, img FROM rjs ORDER BY id");
    echo mysql_error();
    while ($data = mysql_fetch_array($ddaa))
    {									
 echo " <a href=\"rjdetails.php?id=$data[0]\"><h4>
 <img src=\"img/rj/$data[2]\" alt=\"\" style=\"height:32px; width:32px;\">$data[1]
 </h4></a>";
	}
	?>
	
	   <p class="spacers"></p>	
	   
       </div> </div>
                        
                    </div>
		
	   </div>
	</div>

    

    </div>		
			
	<div class="container">
			<div class="row">
			<div class="container">
				

				<div class="col-md-5 column">
				<?php
$add = mysql_fetch_array(mysql_query("SELECT title, img FROM ads WHERE id='3'"));
echo "<a href=\"$add[0]\" target=\"_blank\"><img src=\"img/advertise/$add[1]\" alt=\"\"  style=\"width:100%; height:100px;\"></a>";
?>	
				
				</div>
				<div class="col-md-2 column">
				</div>
				<div class="col-md-5 column">
					<?php
$add = mysql_fetch_array(mysql_query("SELECT title, img FROM ads WHERE id='4'"));
echo "<a href=\"$add[0]\" target=\"_blank\"><img src=\"img/advertise/$add[1]\" alt=\"\"  style=\"width:100%; height:100px;\"></a>";
?>	
				
				</div>
				</div>

				
			</div>
			
			
			
		</div>

				
			
			<!-- footer starts here -->
			<footer class="footer clearfix">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 footer-para">
							<p style="color:#fff; font-size:18px;">&copy; <?php echo $ttl[0]; ?></p>
						</div>

						<div class="col-xs-6 text-right">
							<!--a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a-->
						</div>
					</div>
				</div>
			</footer>



	

	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>