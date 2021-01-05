<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css"/>
    </head>
<body>

<h1> Exercice 1 de PHP</h1>
<h2> chaine de caractere</h2>

<p>
<?php
echo"Hello World"
?>
</p>
<h2>les variables</h2>

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

<h2>Incrementation</h2>

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

<h2> Du php dans une balise html</h2>
<!-- Mise en place d'une liste!-->
<ul>
<li><?php echo $texteDuParagraphe; ?></li>
<li><?php echo $entier; ?></li>
<li><?php echo $decimal; ?></li>
<li><?php echo $x; ?></li>
<li><?php echo $y; ?></li>
<li><?php echo $z; ?></li>
</ul>
<h2>html dans une balise php</h2>
<?php
echo "<p>".$texteDuParagraphe."</p>";  //le point permet de concatener/coller ?>
<?php echo "<a href='https://google.fr'>".$z."</a>" ?>


<h2>rappels html/css </h2>

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


<h2>les opérateurs php </h2>

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
<h2>les operateurs logiques</h2>
<ul>
    <li><?php var_dump(10 AND 0);?></li>
    <li><?php var_dump(10 OR 0);?></li>
    <li><?php var_dump(10 && 0);?></li>
    <li><?php var_dump(10 || 0);?></li>
    <li><?php var_dump(! true);?></li>
</ul>
<h2>les conditions if</h2>
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

<h2>les boucles switch</h2>

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

<h2>boucle while</h2>

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


<h2>boucle for</h2>

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
for ($i =7; $i <= 1000; $i+=7) { // syntaxe permet d'optimiser le code au lieu de parcourir tt les nombres
    
    echo "<li>".$i."</li>";
    
}
?>

<h3>Exercice 4</h3>

<?php
echo "<p>";
$j=3457;
for ($i =2; $i <= $j; $i++) {
    if ($j % $i == 0 && $j!=$i) {
        echo $j." n'est pas un nombre premier";
        break;
    } 
    else if ($i==$j) {//si la condition precedente n'est pas remplie et si on arrive au bout de la liste

        echo $j." est un nombre premier";
    }
}
     
    

echo "</p>";
?>

<h2>les tableaux</h2>
<?php
$cars=["Dacia", "BMW", "Toyota"];
echo "<span>$cars[0]</span><br>";
echo "<span>$cars[1]</span><br>";
echo "<span>$cars[2]</span><br>";

$cars[] = "Mercedes"; //on ajoute un element au tableau
$cars[] = "Renault";

$taille = count($cars); //on mesure la taille du tableau
echo "<ol type= 'A' reversed >";
for($i =0; $i < $taille ;$i++) { // on parcoure tout le tableau
echo "<li>".$cars[$i]."</li>"; 
}
echo "</ol>";
?>

<h2>les tableaux associatifs</h2>
<?php
//$age=["Zakaria"=>"27","Fatima"=>"37","Rida"=>"43"];
//Ou:
$tab=["nom"=>["Zakaria","Fatima","Rida"],"age"=>["27","37","43"]]; //tableau multidiemsions

echo $tab["nom"][1];
echo $tab["age"][1];
$tab["nom"][]= "houda";
$tab["age"][]= "32";
echo $tab["nom"][3];


//$age["Zakaria"]="27";
//$age["Fatima"]="37";
//$age["Rida"]="43";

//$nom = readline("entrer votre nom");//fonction qui permet d'entrer la donnee
//echo $nom;
?>
<h2> Exercices sur les tableaux</h2>
<!-- Exercice :
    Écrire un tableau qui contient tous les mois de l'année puis l'afficher
    grâce aux 3 différentes boucles (for, while et do,while).

    Exercice :
    Écrire un tableau associatif, qui associe des pays à des capitales 
    (France, Norvège, Sénégal, Inde, Chine, Mexique).
    Afficher ces capitales grâce à un foreach.
-->
<?php
$mois_de_lannee=["janivier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
echo "<ol>";
for($i =0; $i <=11 ;$i++) { // on parcoure tout le tableau
    echo "<li>".$mois_de_lannee[$i]."</li>"; 
    }
    echo "</ol>";
    $x=0;
    echo "<ul>";
    while($x<=11) {
    echo "<li>".$mois_de_lannee[$x]."</li><br>";
    $x++;
    }
    echo "</ul>";
    $x=0;
echo "<ol type= 'A'>";
do {
echo "<li>".$mois_de_lannee[$x]."</li>";
$x++;
} while ($x<=11);
echo "</ol>";

$tab=["France"=>"Paris","Norvege"=>"Oslo","Senegal"=>"Dakar","Inde"=>"New Delhi","Mexique"=>"Mexico"];
echo "<ul>";
foreach($tab as $key => $value) {
echo "<li>".$key." a pour capitale ".$value."</li>";
}
echo "</ul>";

/* Exercice :
Écrire un tableau x avec comme données "A", "B", "C" et "D".
Un tableau y avec comme données "E", "F", "G" et "H"

À l'aide d'une boucle de votre choix, mettre y à la suite de x.

À l'aide d'une boucle de votre choix, afficher x.
*/
$x=["A","B","C","D"];
$y=["E","F","G","H"];
foreach ($y as $value) {
    $x[]="$value";
}
    echo $x[6];




    ?>
    





</body>
</html>