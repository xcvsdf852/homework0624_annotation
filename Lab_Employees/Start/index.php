<?php
    require_once('config.php');
    
    $link = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
    $result = mysql_query("set names utf8", $link);
    mysql_select_db($dbname,$link);

    $cmd = "select * from employee";
    $result = mysql_query($cmd,$link);
    // echo $result;
    // exit;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Employee Details</h1>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">
	    <?php while($row = mysql_fetch_assoc($result)){ ?>
		<li>
		<a href="employeeDetails.php?id=<?php echo $row["id"];?>"> 
			<img src="images/<?php echo $row["picture"];?>">
			<h4><?php echo $row["firstName"] . " " . $row['lastName'];  ?> </h4>
			<p><?php echo $row["title"];?> </p> <span class="ui-li-count"><?php echo $row["managerId"];?></span>
		</a>
		</li>
		<?php } ?>
		
	</ul>
</div>

</div>
</body>
</html>