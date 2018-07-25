<?php
include 'lib/pagination.php';
?>

<!DOCTYPE html>
<html>
 <head>
  	<title>PHP Pagination Example</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="css/style.css" type="text/css" />
 </head>
 <body>
 	<div class="container">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h2>Pagination using PHP</h2>
	    </div>
	      <div class="table-responsive">
	        <table class="table table-striped table-bordered table-hover">
	          <thead>
        		<tr>
        		  <th>Name</th>
        		  <th>Email</th>
        		  <th>Phone</th>
        		</tr>
      		  </thead>
      		  <tbody>
      		  	<tr>
      		  		<?php
						while($row = $query->fetch_array(MYSQLI_ASSOC))
						{
						?>
							<tr>
								<td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['phone']; ?></td>
							</tr>
						<?php
						}		
					?>
      		  	</tr>
      		  </tbody>
	        </table>
	        <div><?php echo $pagination; ?></div>
	  </div>
	</div>
 </body>
 </html>