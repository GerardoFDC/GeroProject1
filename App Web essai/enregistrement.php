
<?php
try {
    $bdd=new PDO('mysql:host=;dbname=mabase','root','');

}
catch(Exception $e)
{
    die('Error'.$e-> getMessage());
}
if(  isset($_POST['matricule']) && isset($_POST['adresse']) && isset($_POST['dates']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['filiere'])  && isset($_POST['options']) && isset($_POST['inscription'])  && isset($_POST['commentaire'] ))
{

$a=$bdd->prepare ("INSERT INTO enregistrer (matricule,adresse,dates,nom,prenom,sexe,filiere,options,inscription,commentaire)VALUES( :matricule,:adresse,:dates,:nom,:prenom,:sexe,:filiere,:options,:inscription,:commentaire  )");
$a->execute (array(
   'matricule'=>$_POST['matricule'],
 'adresse'=>$_POST['adresse'],
  'dates'=>$_POST['dates'],
   'nom'=>$_POST['nom'],
    'prenom'=>$_POST['prenom'],
     'sexe'=>$_POST['sexe'],
     'filiere'=>$_POST['filiere'],
      'options'=>$_POST['options'],
        'inscription'=>$_POST['inscription'],
        
          'commentaire'=>$_POST['commentaire']
));


$a->closeCursor();

$b=$bdd->query("SELECT * FROM enregistrer");

echo'<table>';
echo'<tr>';

echo'<td>';
echo 'matricule';
echo'</td>';

echo'<td>';
echo 'adresse';
echo'</td>';

echo'<td>';
echo 'dates';
echo'</td>';

echo'<td>';
echo 'nom';
echo'</td>';

echo'<td>';
echo 'prenom';
echo'</td>';

echo'<td>';
echo 'sexe';
echo'</td>';

echo'<td>';
echo 'filiere';
echo'</td>';

echo'<td>';
echo 'options';
echo'</td>';

echo'<td>';
echo 'inscription';
echo'</td>';

echo'<td>';
echo 'situation';
echo'</td>';

echo'<td>';
echo 'commentaire';
echo'</td>';


echo'</tr>';


while($c=$b->fetch())
{


echo'<tr>';

echo'<td>';
echo $c['matricule'];
echo'</td>';

echo'<td>';
echo $c['adresse'];
echo'</td>';

echo'<td>';
echo $c['dates'];
echo'</td>';

echo'<td>';
echo $c['nom'];
echo'</td>';

echo'<td>';
echo $c['prenom'];
echo'</td>';

echo'<td>';
echo $c['sexe'];
echo'</td>';

echo'<td>';
echo $c['filiere'];
echo'</td>';

echo'<td>';
echo $c['options'];
echo'</td>';

echo'<td>';
echo $c['inscription'];
echo'</td>';


echo'<td>';
echo $c['commentaire'];
echo'</td>';


echo'</tr>';









}
echo'</table>';
$b->closeCursor();


}
else{echo"<script>alert('Error')</script>";}


?>      
