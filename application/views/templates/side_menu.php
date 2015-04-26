<div class="nav_wrapper">
 <ul>
    <li><a class="white">VISOS AKCIJOS</a></li>
	<div class="nav_body">
	  <li><a href='<?php echo base_url();?>index.php/welcome/naujausios'>Naujausios akcijos</a></li>
	  <li><a href='<?php echo base_url();?>index.php/welcome/didziausios'>Didžiausios akcijos</a></li>
	  <li><a href='<?php echo base_url();?>index.php/welcome/populiariausios'>Populiariausios akcijos</a></li>
	  
	  <div class="nav_right">
	    <li><a class="white">KATEGORIJOS</a></li>
	    <div class="nav_body">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}

$sql = 'SELECT kat_name, kat_url FROM kategorijos';

mysqli_select_db($conn, 'akcijos');
mysqli_set_charset($conn, "utf8");
$retval = mysqli_query($conn, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
    echo "<li><a href='";
	echo base_url();
	echo "index.php/welcome/{$row['kat_url']}'>{$row['kat_name']}</a></li>";
} 
mysqli_close($conn);
?>
		</div>
	  </div>
	</div>
   </ul>
  </div>
  <div id="cart">
</div>
