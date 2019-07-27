<?php

//action.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$query = "
		INSERT INTO arkad (name, work, salary) VALUES ('".$_POST["name"]."', '".$_POST["work"]."', '".$_POST["salary"]."')
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Inserted...</p>';
	}
	if($_POST["action"] == "fetch_single")
	{
		$query = "
		SELECT * FROM arkad WHERE id = '".$_POST["id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['name'] = $row['name'];
			$output['work'] = $row['work'];
			$output['salary'] = $row['salary'];
		}
		echo json_encode($output);
	}
	if($_POST["action"] == "update")
	{

		
		$query = "
		UPDATE arkad 
		SET name = '".$_POST["name"]."', 
		work = '".$_POST["work"]."', 
		salary = '".$_POST["salary"]."'
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM arkad WHERE id = '".$_POST["id"]."'";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}
}

?>