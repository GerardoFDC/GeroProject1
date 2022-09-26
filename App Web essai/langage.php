
<?php
try {
    $bdd=new PDO('mysql:host=;dbname=mabase','root','');

}
catch(Exception $e)
{
    die('Error'.$e-> getMessage());
}
if(isset($_POST['codelang']) && isset($_POST['libellelang']))
{

$a=$bdd->prepare ("INSERT INTO langage (codelang,libellelang)VALUES(:codelang,:libellelang)");
$a->execute (array(
   'codelang'=>$_POST['codelang'],
 'libellelang'=>$_POST['libellelang']
));

$a->closeCursor();

$b=$bdd->query("SELECT * FROM langage");

echo'<table>';
echo'<tr>';

echo'<td>';
echo 'codelang';
echo'</td>';

echo'<td>';
echo 'libellelang';
echo'</td>';




echo'</tr>';


while($c=$b->fetch())
{


echo'<tr>';

echo'<td>';
echo $c['codelang'];
echo'</td>';

echo'<td>';
echo $c['libellelang'];
echo'</td>';


echo'</tr>';









}
echo'</table>';
$b->closeCursor();


}
else{echo"<script>alert('Error')</script>";}


?>    