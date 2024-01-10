<pre>
<?php
print_r($_POST);
?>
</pre>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tas";

$id = $_POST['Teilnehmer_Teilnehmer'];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // sql to delete a record
  $sql = "DELETE FROM tbl_kurs_teilnehmer WHERE FK_Teilnehmer=$id";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>