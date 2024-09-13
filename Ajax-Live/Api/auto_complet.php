<?php 

include '../db_conn.php';

if (isset($_POST['s'])) {
	
	$key = "%{$_POST['s']}%";

	$sql = "SELECT * FROM data WHERE title LIKE ? OR link Like ? LIMIT 5";

	$stmt = $conn->prepare($sql);
	$stmt->execute([$key, $key]);

	if ($stmt->rowCount() > 0) {
		$results = $stmt->fetchAll();
		foreach ($results as $result) { ?>
		<li>
		  <a href="<?=$result['link']?>"><?=$result['title']?></a>
		</li>
	   <?php
       }
	}else echo "not found";
}