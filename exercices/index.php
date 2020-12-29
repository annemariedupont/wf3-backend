<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css"/>
    </head>
<body>

<h1> Exercice 1 de PHP</h1>
<h2> Exemple a)</h2>

<p>
<?php
echo"Hello World"
?>
</p>
<h2>Exemple b)</h2>

<?php
$texteDuParagraphe = "HelloWorld";
$entier = 7;
$decimal = 10.5;
$x = 12.5;
$y = 4;
$z = $x + $decimal;

define("Vitesse_Max",300);
?>

<p><?php
echo $z;
echo " ";
echo $texteDuParagraphe;
echo " ";
echo $entier;
echo " ";
echo $decimal;
echo " ";
echo constant("Vitesse_Max");
?></p>

<h2>Exemple c)</h2>

<?php
// incrementation (ajout de 1);
$z++;//on ajoute 1 a z
$z = $z + 1;//on ajoute 1 a z
$z += 1;//on ajoute 1 a z

$z--;//on retire 1 a z
$z = $z - 1;//on retire 1 a z
$z -= 1;//on retire 1 a z
$z -= $entier; //on retire la valeur de entier (7) a z
?>
<p><?php echo $z; ?></p>

<h2>Exemple d) du php dans une balise html</h2>
<!-- Mise en place d'une liste!-->
<ul>
<li><?php echo $texteDuParagraphe; ?></li>
<li><?php echo $entier; ?></li>
<li><?php echo $decimal; ?></li>
<li><?php echo $x; ?></li>
<li><?php echo $y; ?></li>
<li><?php echo $z; ?></li>
</ul>
<h2>Exemple e)html dans une balise php</h2>
<?php
echo "<p>".$texteDuParagraphe."</p>";  //le point permet de concatener/coller ?>
<?php echo "<a href='https://google.fr'>".$z."</a>" ?>
<?php
//echo "<p>Sayah a dit:"./"bonjour tout le monde"/."</p>" ?>  
</body>
</html>