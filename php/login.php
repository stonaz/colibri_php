<?PHP
require 'dbconn.php'; // functions used in the script
$user=$_POST['user'];
$password=$_POST['password'];
$query="SELECT * from users where user='$user' and password =SHA1('$password')";
$result = $mysqli->query($query);
// conteggio dei record restituiti dalla query
if($result->num_rows >0)
{
    header('Location: ../index.html');
}
?>