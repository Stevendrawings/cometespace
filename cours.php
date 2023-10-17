<?php 

// --------- Start Notre premier Hello World --------- //

// echo "Hello World !";

// --------- Utiliser des commentaires --------- //

// echo "Hello World !";

/*

echo "Hello World !";

*/

// --------- Variables --------- // 

// $ageInt = 18;
// $ageFloat = 18.5;
// $ageString = "\"29\"";
// $ageBool = false;

// echo $ageBool;

// --------- Concaténer des variables : associer --------- //

// $direBonjour = "Hello";
// $name = "Stevens";

// echo $direBonjour . " " . $name . " !";

// --------- Faire des mathématiques --------- //

// $premierNombre = 9;
// $deuxiemeNombre = 479;

// $total = ($premierNombre * $deuxiemeNombre); 

// echo ++$total

// --------- Faire des mathématiques --------- //

        // $tableauArray = array(
        //     'id'        => 2798,
        //     'prenom'    => 'Stevens',
        //     'nom'       => 'carl', 
        //     'age'       => 19
        // );

        // echo 'Bojour ' 
        // . $tableauArray['prenom'] 
        // . ' votre identifiant est ' 
        // . $tableauArray['id'] . ' ' 
        // . 'vous avez ' . $tableauArray['age'] 
        // . ' ans !';

        // $tableauId = array(
        //     "Stevens",
        //     14,
        //     "903JKFE",
        //     'jefferson'
        // );

        // echo $tableauId[2];

// --------- Exercice Final --------- //

        // $tabPresentation = array('798FEKELFM', 'Stevens', 'karl', 20);

        // echo "Bonjour "
        // . $tabPresentation[1] 
        // . " " . $tabPresentation[2] 
        // . " vous avez 20 ans dans 50 ans vous aurez " 
        // . $tabPresentation[3] + 50 . ' !';

// --------- L’expression IF --------- //

    // == EST EGAL
    // > EST SUPERIEUR
    // < EST INFERIEUR
    // <= INFERIEUR OU EGAL
    // >= EST SUPERIEUR OU EGAL
    // != EST DIFFERENT 
    
        // $age = 18; 

        // if($age > 18){
        //     echo 'Vous etes majeur';
        // } else if($age == 18){
        //     echo "Vous avez atteint la majorité";
        // } else if($age < 18){
        //     echo "Vous etes mineur";
        // }


// --------- Les conditions multiples --------- //

        // $pseudo = "Tintin";
        // $motDePasse = "890FEF";

        // if($pseudo == "Tintin" && $motDePasse == "890FEF"){
        //     echo "Vous etes connecté.";
        // }

// --------- Les conditions ternaires --------- //

        // $nombre = 10;
        // echo ($nombre % 10 == 0) ? "true" : "false";

// --------- L’expression IF ELSE --------- //

// $pseudo = "Stevens";
// $mdp = "Lune";

// if($pseudo == "Stevens" && $mdp == "Lune"){
//     echo "Vous etes connecté !";
// } else {
//     echo "Votre identifiant est invalide";
// }

// --------- L’expression IF ELSE IF ELSE --------- //

// $age = 18;

// if($age > 18){
//     echo "Vous etes majeur";
// } else if($age == 18){
//     echo "Vous etes enfin majeur";
// } else {
//     echo "Vous etes mineur";
// }

// --------- Utiliser des SWITCH --------- //

// $note = 10;

// switch ($note){
//     case 0 : echo "Vous etes un tres muavais eleve";
//     break;
//     case 1 : echo "Vous etes un mauvais eleve";
//     break;
//     case 2 : echo "Vous avez pas de tres bonne notions";
//     break;
//     case 3 : echo "Vous avez pas de notion";
//     break;
//     case 4 : echo "Vous avez pas trop d'acquis";
//     break;
//     case 5 : echo "Vous avez des acquis ";
//     break;
//     case 6 : echo "Vous avez la moyenne ";
//     break;
//     case 6 : echo "Vous avez une bonne moyenne ";
//     break;
//     case 7 : echo "Vous avez une très bonne moyenne ";
//     break;
//     case 8 : echo "Vous etes un bon eleve ";
//     break;
//     case 9 : echo "Vous etes un très bon eleve ";
//     break;
//     case 10 : echo "Vous avez la note parfaite et vous etes un très bonne eleve ";
//     break;
//     default;
// }

// --------- Ecrire des conditions simples de façon concise --------- //

// $number = 10;

// if($number == 10)
//     echo 'true';
//  else 
//     echo 'false';

?>