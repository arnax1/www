<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8;">
<title>Akcijos.lt</title>
<link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/login_strip.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/animation.css" type="text/css" rel="stylesheet" />

<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/animation.js"></script>

</head>
<body>
<div id="wrapper">
  <div id="header">
	<div class="login_strip">
	  <ul>
		<li><a href="index.htm">Prisijungti</a></li>
		<li><a href="index.htm">Registruotis</a></li>
		<!--<li><a href="index.htm">Prisijungti per<img src="<?php echo base_url(); ?>assets/img/fb.png" alt="fb"></a></li>-->
	  </ul>
	</div>
	<div id="head_logo">
	  <div id="logo" onclick="window.location='/'"></div>
	  <div class="subscribeArea">
	    <input type="text" placeholder="Paieška" id="subscriberInput">
		<button id="subscriberButton">ieškoti</button>
		<div id="subscribeExample">Pavyzdys: obuoliai</div>
	  </div>
	</div>
  </div>
  <div id="content_wrapper">
	<div class="nav">
      <ul>
		<!--<script type="text/javascript"> 
		  $(function(){
          $('nav.a').on('click', function(){
          $('nav.a').removeClass('active');
          $(this).addClass('active');
          });
        </script>-->
		
<?php foreach ($shops as $shop) { ?>
<li><a href="<?php echo base_url(); ?>index.php/<?php echo $shop['shop_url']?>"><?php echo $shop['shop_name']?></a></li>
<?php }?>		
	  </ul>
    </div>