<?PHP
require 'dbconn.php'; // functions used in the script
$title=addslashes($_POST['title']);
$author=addslashes($_POST['author']);
$where_is=addslashes($_POST['where_is']);
//$dbconn = pg_connect ("host=192.168.1.14 port=5432 dbname=ruggeri user=postgres password=Superman123") or die ('no db');
//header('Content-Type: application/json'); //for correct output in browsers
$sql="INSERT INTO `books`(`title`, `author`, `where_is`) VALUES ('$title','$author','$where_is')";

//echo $sql;
//$book_list=mysql_query($db,$sql) or die("Query non valida: " . mysql_error());;
//$alias_list=array();
//foreach ($items_list as $test)
//{
//   array_push( $alias_list,$test['alias']);
//}
//echo json_encode($alias_list);
////echo indent(json_encode($items_list));
$result = $mysqli->query($sql);
// conteggio dei record restituiti dalla query
if($result->num_rows >0)
 {
// generazione di un array numerico
  while($row = $result->fetch_array(MYSQLI_NUM))
  {
   echo $row[0];
   echo "<br />n";
  }
 }





?>  