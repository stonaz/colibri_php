<?PHP
require 'dbconn.php';
header('Content-Type: application/json'); //for correct output in browsers
$title=$_GET['title'];
$author=$_GET['author'];
$rows=array();
$sql="SELECT * from  `books` where 1 ";
if ($title)
    {
        $sql.= " and title like '%$title%' ";
    }
if ($author)
    {
        $sql.= " and author like '%$author%' ";
    }
$sql.=" order by author";
$result = $mysqli->query($sql) or die ('no query: '.$php_errormsg);
while($row = $result->  fetch_assoc())
{
$rows[] = $row;
}
$arr = $result->num_rows;

//print_r($rows);
echo json_encode($rows);







?>  