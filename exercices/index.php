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


<h2>Exemple f : rappels html/css </h2>

<p class="attention">
    Il faut nettoyer la plaie avant de mettre le 
    pansement sinon il y a un risque d'infection.
</p>

<p>
   Vous pouvez appeler les secours en composant le numéro.
</p>

<p class="attention">
   Veillez à être CLAIR, BREF et PRECIS sur le danger et 
   sur le lieu de l'accident.
</p>

<?php print("<h2>YO !</h2>"); ?>


<h2>Exemple g : les opérateurs php </h2>

<?php 
    $x = 20;
    $y = 6;
?>
<ul>
    <li><?php echo ($x + $y); // Affiche 26 ?></li>
    <li><?php echo ($x - $y); // Affiche 14 ?></li>
    <li><?php echo ($x * $y); // Affiche 120 ?></li>
    <li><?php echo ($x / $y); // Affiche 3.3333333... ?></li>
    <li><?php echo ($x % $y); // Affiche 2 ?></li>

    <?php
        $y = 20;
        $y += 100; // similaire à "$y = $y + 100;"
        echo "<li>".$y."</li>"; // Affiche 120

        $z = 50;
        $z -= 25;
        echo "<li>".$z."</li>"; // Affiche 25

        $i = 5;
        $i *= 6; // similaire à "$i = $i * 6"
        echo "<li>".$i."</li>"; // Affiche 30

        $j = 10;
        $j /= 5;
        echo "<li>".$j."</li>"; // Affiche 2

        $k = 20;
        $k %= 7;
        echo "<li>".$k."</li>"; // Affiche 6

        $o = "Bonjour";
        $o .= ", monde ! ";
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde !"
        $o .= $o; // similaire à "$o = $o . $o"
        echo "<li>".$o."</li>"; // Affiche "Bonjour, monde ! Bonjour, monde !"
//Fonction var_dump

        $x = 100;
        $y = "100";
        echo "<li>";
            var_dump($x == $y); // "valeur égale à"
        echo "</li>";

        echo "<li>";
            var_dump($x === $y); // "valeur et type égaux à"
        echo "</li>";

        echo "<li>";
            var_dump($x != $y); // "valeur différente de"
        echo "</li>";

        echo "<li>";
            var_dump($x !== $y); // "valeur et types différents de"
        echo "</li>";

        $a = 50;
        $b = 90;
        echo "<li>";
            var_dump($a > $b); // "strictement supérieur à"
        echo "</li>";

        echo "<li>";
            var_dump($a >= $b); // "supérieur ou égal à"
        echo "</li>";

        echo "<li>";
            var_dump($a < $b); // "strictement inférieur à"
        echo "</li>";

        echo "<li>";
        var_dump($a <= $b); // "inférieur ou égal à"
    echo "</li>";
    ?>
</ul>
<h2>Exemple h) les operateurs logiques</h2>
<ul>
    <li><?php var_dump(10 AND 0);?></li>
    <li><?php var_dump(10 OR 0);?></li>
    <li><?php var_dump(10 && 0);?></li>
    <li><?php var_dump(10 || 0);?></li>
    <li><?php var_dump(! true);?></li>
</ul>
<h2>Exemple i&nbsp;) les conditions if</h2>
<p>
<?php
$x=10;
if ($x >= 10) {
echo "Bonjour!";
} elseif ($x < 5) {
echo "Salut!";
} else {
echo "Rien à faire";
}
?>
</p>

<h2>Exemple j&nbsp;) les boucles switch</h2>

<?php
$favcolor="red";
echo "<p>";
switch ($favcolor) {
case "red":
echo "Votre couleur préféré est le rouge!";
break;
case "blue":
echo "Votre couleur préféré est le bleu!";
break;
case "green":
echo "Votre couleur préféré est le vert!";
break;
default:
echo "Vous n’avez pas de couleur préféré!";
}
echo "</p>";
?>

<h2>Exemples k) boucle while</h2>

<?php
$x=1;
echo "<ul>";
while($x<=5) {
echo "<li>$x</li><br>";
$x++;
}
echo "</ul>";
?>

<?php
$x=1;
echo "<ul>";
do {
echo "<li>$x</li>";
$x++;
} while ($x<=5);
echo "</ul>";
?>


<h2>Exemples l) boucle for</h2>

<?php
echo "<ul>";
for ($i =0; $i <= 10; $i++) {
echo "<li>$i</li>";
}
echo "</ul>";
?>

<h2>Exercices d'entrainement</h2>
<h3>Exercice 1</h3>

<?php

$x=1;
$y=835;
while($x<$y){
    $x++;
}
echo "<span>".$x."</span><br>";
echo "<span>".$y."</span>";
?>

<h3>Exercice 2</h3>

<?php
$x=1;
$y=835;
do {
    $x++;
} while($x<$y);
echo "<span>".$x."</span><br>";
echo "<span>".$y."</span>";
?>

<h3>Exercice 3</h3>
<?php
echo "<ul>";
for ($i =0; $i <= 1000; $i++) {
    if ($i % 7 == 0) {
    echo "<li>".$i."</li>";
    }
}
?>

<h3>Exercice 4</h3>

<?php
echo "<p>";
for ($i =2; $i < 3457; $i++) {
    if (3457 % $i == 0){
    echo "3457 n'est pas un nombre premier";} }
     {
    echo "3457 est un nombre premier";}

echo "</p>";
?>
<h2>Exemple m) les tableaux</h2>
<?php
$cars=["Dacia", "BMW", "Toyota"];
echo "<span>$cars[0]</span><br>";
echo "<span>$cars[1]</span><br>";
echo "<span>$cars[2]</span><br>";

$taille = count($cars);
echo "<ul>";
for($i =0; $i < $taille ;$i++) {
echo "<li>".$cars[$i]."</li>";
}
echo "</ul>";
?>

<h2>Exemples n) les tableaux associatifs</h2>
<?php
$age=["Zakaria"=>"27","Fatima"=>"37","Rida"=>"43"];
//Ou:
$tab=["nom"=>["Zakaria","Fatima","Rida"],"age"=>["27","37","43"]];
$age["Zakaria"]="27";
$age["Fatima"]="37";
$age["Rida"]="43";
?>

</body>
</html>