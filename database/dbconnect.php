
<?php 

function get_news(){
	$dbConnection1 = new PDO('sqlite:/var/www/multibankfx/database/multibankfx.sqlite',"","",array(
		PDO::ATTR_PERSISTENT => TRUE,
		PDO::ERRMODE_EXCEPTION => TRUE));
		$stmt = $dbConnection1->query("SELECT * FROM company_news");
		while ($row = $stmt->fetch()) {
			echo "ali".$row['title']."<br />\n";
		}
		echo "ali"."<br />\n";
}
?>