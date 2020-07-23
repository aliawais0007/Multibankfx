
<?php 

function get_news(){
	$dbConnection1 = new PDO('sqlite:/var/www/multibankfx/database/multibankfx.sqlite3',"","",array(
		PDO::ATTR_PERSISTENT => TRUE,
		PDO::ERRMODE_EXCEPTION => TRUE));
		$stmt = $dbConnection1->query("SELECT * FROM company_news");
		while ($row = $stmt->fetch()) {
			echo "ali".$row['title']."<br />\n";
		}
}
?>