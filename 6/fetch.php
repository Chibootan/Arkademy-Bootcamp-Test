<?php

//fetch.php

include("database_connection.php");

$query = "SELECT * FROM arkad";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>Name</th>
		<th>Work</th>
		<th>Salary</th>
		<th>Action</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td width="40%">'.$row["name"].'</td>
			<td width="40%">'.$row["work"].'</td>
			<td width="40%">'.$row["salary"].'</td>
			<td width="40%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["id"].'">Edit</button>
				<button type="button" name="delete" class="btn btn-danger btn-xs delete"  id="'.$row["id"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>