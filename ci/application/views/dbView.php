<html>
<head>
	<title>
		Data
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,‌​100italic,300,300ita‌​lic,400italic,500,50‌​0italic,700,700itali‌​c,900italic,900' rel='stylesheet' type='text/css'>
</head>
	<body>
	
	<h1>Database</h1> 
	<table class="table">
		<caption>Vehicle Data</caption>
		<thead>
		<tr>
			<th>Id</th>
			<th>Reg. No</th>
			<th>Time</th>
			<th>Description</th>
		</tr>
			
		</thead>
		<tbody>
		<?php foreach($items as $item){ ?>
			<tr>
			<td><?php	echo $item->id;  ?></td>
			<td><?php	echo $item->regNo;  ?></td>
			<td><?php 	echo $item->time; ?></td>
			<td><?php 	echo $item->descr; ?></td>
			</tr>
			<?php 	} ?>
		</tbody>
	</table>

		
	</body>
</html>


