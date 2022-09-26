
<?php
try {
    $bdd=new PDO('mysql:host=;dbname=mabase','root','');

}
catch(Exception $e)
{
    die('Error'.$e-> getMessage());
}
if(isset($_POST['codefil']) && isset($_POST['libellefil']))
{

$a=$bdd->prepare ("INSERT INTO filiere (codefil,libellefil)VALUES(:codefil,:libellefil)");
$a->execute (array(
   'codefil'=>$_POST['codefil'],
 'libellefil'=>$_POST['libellefil']
));

$a->closeCursor();

$b=$bdd->query("SELECT * FROM filiere");

echo'<table>';
echo'<tr>';

echo'<td>';
echo 'codefil';
echo'</td>';

echo'<td>';
echo 'libellefil';
echo'</td>';




echo'</tr>';


while($c=$b->fetch())
{


echo'<tr>';

echo'<td>';
echo $c['codefil'];
echo'</td>';

echo'<td>';
echo $c['libellefil'];
echo'</td>';


echo'</tr>';









}
echo'</table>';
$b->closeCursor();


}
else{echo"<script>alert('Error')</script>";}


?>    