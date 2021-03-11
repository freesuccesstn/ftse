<?php if (!isset($_SESSION)) {
  session_start();
 $_SESSION['MM_LangB']="eng";
}

require_once('Connections/connexion.php');
mysql_select_db($database_connexion, $connexion);
include "bwgest/includes/variables.texte.php";
require_once('bwgest/includes/function.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fédération Tunisienne des Sports Equestres</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<meta http-equiv="reply-to" content="" />
<meta http-equiv="Content-Language" content="FR" />
<link href="style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="pro_dropdown_3/pro_dropdown_3.css" />
<script src="pro_dropdown_3/stuHover.js" type="text/javascript"></script>
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<style type="text/css">
	a#vlb{display:none}.msg_slideshow {
	margin:0 auto;
	width: 330px;
	height: 270px;
}
    </style>
<script type="text/javascript" src="engine1/jquery.js"></script>
	<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>


<body>
<div id="container">
  <?php include("inc_header.php") ?>
  <div id="contenu">
  <?php include("inc_actus.php") ?>
  
  <div class="colonne2">

  <?php include("inc_lastResult.php") ?>
  <?php include("inc_lastVideo.php") ?>
  <?php include("inc_lastPhoto.php") ?>
  <div class="colonne2-1">
    <div class="clearer"></div>
    </div>
  
  
  
  <div class="colonne2-2">
    <div class="clearer"></div>
  </div>
  
</div>
  <?php include("inc_droite.php") ?>

  <div class="clearer"></div>



<div class="clearer"></div>
</div>
<div id="contenu1">&nbsp;&nbsp;&nbsp;&nbsp;</div>
<?php include("inc_sponsors.php") ?>
<div class="clearer"></div>
</div>

<?php include("inc_footer.php") ?>
<script type="text/javascript">
<!--
swfobject.registerObject("FLVPlayer");
//-->
</script>
</body>
</html>
