<?php
	include('config.php');
	
	$link = @mysqli_connect(
		$config['server'],
		$config['username'],
		$config['password'],
		$config['database']
	);
	
	if(!$link){
		die('Error: ' . mysqli_connect_error());
	}
	
	$data = [];
	$result = mysqli_query($link, "select * from students");
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row;
	}
?>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
	<?php foreach($data as $i => $row){ ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
		</tr>
	<?php } ?>
</table>