<?php

/**
 * 1. Créez une constante contenant le nombre 12
 * 2. Créez une deuxième constante qui contient le nombre 2
 * 3. Affichez le résultat de la première constante multipliée par la deuxième constante
 * 4. Créez une constante contenant la chaîne: C'est cool PHP
 * 5. Calculez le résultat de la première constante additionnée de la deuxième constante, le tout multiplié par la
 *    longueur de la chaîne de la troisième constante ( attention aux priorités )
 */
// TODO Votre code ici.

const NUMBER1 = 12;
const NUMBER2 = 2;
const STRING1 = "C'est cool PHP";

echo "Résultat de 12 + 2 = " . NUMBER1 * NUMBER2 . "<br>";
echo "Résultat de (12 + 2) * la longueur de la chaîne 'C'est cool PHP' = " . (NUMBER1 + NUMBER2) * strlen(STRING1) . "<br>";


/**
 * 6. Utilisez la bonne constante magique et éventuellement la bonne fonction pour afficher un maximum d'informations sur la page actuelle4
 */
// TODO Votre code ici.

function info($const){
    echo $const . "<br>";
}

info(__FILE__);