<?PHP

//$dbconn = mysql_connect ('localhost' ,'root','st3f4n0')  or die ('no db');
//$db= mysql_select_db('colibri_php', $dbconn) or die('Could not select database.');
$mysqli = new mysqli("localhost", "root", "st3f4n0", "colibri_php");
// verifica dell'avvenuta connessione
//if (mysqli_connect_errno()) {
//           // notifica in caso di errore
//        echo "Errore in connessione al DBMS: ".mysqli_connect_error();
//           // interruzione delle esecuzioni i caso di errore
//        exit();
// 
//}
//else {
//           // notifica in caso di connessione attiva
//        echo "Connessione avvenuta con successo";
//}
?>