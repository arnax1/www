<div id="content_top">

<img class="main" src="<?php echo base_url();?>assets/img/<?php echo $shop_id;?>_logo.png" alt="logo"/>
																

<!--
  <div id="rotator">
       <ul>
         <li class="show"></li>
         <li><img src="<?php echo base_url();?>assets/img/1885_image1.jpg" alt="1895_image1" /></li>
         <li><img src="<?php echo base_url();?>assets/img/1893_image1.jpg" alt="1893_image1" /></li>
		 <li><img src="<?php echo base_url();?>assets/img/1894_image1.jpg" alt="1894_image1" /></li>
		 <li><img src="<?php echo base_url();?>assets/img/akc1.png" alt="1894_image1" /></li>
		 <li><img src="<?php echo base_url();?>assets/img/akc2.png" alt="1894_image1" /></li>
		 <li><img src="<?php echo base_url();?>assets/img/akc3.png" alt="1894_image1" /></li>
       </ul>
    </div>-->
</div>
	
  
 
<?php for ($i = 0; $i < count($akcijos); $i++) { ?>

<div id="content1" class="content_square">
<?php echo $akcijos[$i]['prekes_title'] ?>
<img src="<?php echo base_url(); ?>assets/img/akcijos/<?php echo $akcijos[$i]['prekes_img'] ?>">
</div>

<?php if (count($akcijos)-1 > $i)  $i++; else break;  ?>

<div id="content2" class="content_square">
<?php echo $akcijos[$i]['prekes_title'] ?>
<img src="<?php echo base_url(); ?>assets/img/akcijos/<?php echo $akcijos[$i]['prekes_img'] ?>">
</div>

<?php if (count($akcijos)-1 > $i)  $i++; else break;  ?>

<p>
 <div id="content_small1" class="content_small">
 <?php echo $akcijos[$i]['prekes_title'] ?>
	<img src="<?php echo base_url(); ?>assets/img/akcijos/<?php echo $akcijos[$i]['prekes_img'] ?>"/>
  </div>
  
<?php if (count($akcijos)-1 > $i)  $i++; else break;  ?>
  
  <div id="content_small2" class="content_small">
  <?php echo $akcijos[$i]['prekes_title'] ?>
    <img src="<?php echo base_url(); ?>assets/img/akcijos/<?php echo $akcijos[$i]['prekes_img'] ?>"/>
  </div>
  
<?php if (count($akcijos)-1 > $i)  $i++; else break;  ?>
 
  <div id="content_small3" class="content_small">
  <?php echo $akcijos[$i]['prekes_title'] ?>
	<img src="<?php echo base_url(); ?>assets/img/akcijos/<?php echo $akcijos[$i]['prekes_img'] ?>"/>
  </div>
</p>
<?php } ?>

  </div>