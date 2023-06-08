<?php


//Hier maken we een class, We zeggen tegen de code "Hey, we gaan dalijk, misschien, een speler aanmaken, ALS we een speler gaan
//aanmaken dan ziet de speler er zo uit als we hieronder beschrijven.
class Speler{
    /*Hieronder zie je public $naam staan onder andere. Je hoeft voor nu nog niet te weten wat protected is of doet*/
    /*Een speler moet een naam hebben*/
    public $naam;
    /*Een speler moet een level hebben*/
    public $level;
    /*Een speler moet geld hebben om spullen te kopen*/
    public $money;

    /*Een constructor is een methode die altijd wordt geactiveerd zodra de programmeur een nieuwe speler gaat aanmaken*/
    public function __construct($naam)
    {
        /*Hier zeggen we dat dus bij het aanmaken van een speler op z'n minst een naam moet worden ingevuld anders mag de speler niet worden aangemaakt*/
        $this->naam = $naam;
    }

    /*Zeg hallo is in dit geval een functie (methode), een speler KAN hallo zeggen als we dat willen.*/

    public function zeg_hallo(){
        echo "Goedemiddag allemaal!";
    }


    /*Dit is een methode met de naam zeg_hallo_met_naam en doet zoals de methode naam al doet vermoeden
    de tekst "Goedemiddag allemaal, ik ben....." (en de naam van de nog onbekende speler erbij plaatsen
    */
    public function zeg_hallo_met_naam(){
        echo "Goedemiddag allemaal, ik ben " . $this->naam;
    }
}

/*Met new Speler zeggen we tegen de code 'hoi, ik wil een nieuwe speler maken o.b.v de class hierboven
Omdat we in de __construct methode hebben gezegd dat we een naam eisen bij het aanmaken van de speler moeten we in de () een naam schrijving
We slaan vervolgens de speler met alle eigenschappen op in de variabel $player_one*/

$player_one = new Speler("John doe");

/*We zeggen nu tegen onze code "Pak het object player_one en laat de naam zien van deze speler*/
echo $player_one->naam;

//hier roepen we de methode "zeg_hallo" op . het enige wat het doet is "Goedemiddag allemaal" tonen op het scherm.
$player_one->zeg_hallo();

//hier roepen we de methode "zeg_hallo_met_naam" op.
//het verschil is dat we in deze methode zeggen dat hij aan het einde van de zin "$this->naam" moet plaatsen, we zeggen daar dus niet "ik ben John doe"
//maar "ik ben $this->naam" omdat we nog niet weten WIE hallo zegt, nu is het John Doe, maar misschien maken we later wel een andere speler aan die Jane Doe heet.

$player_one->zeg_hallo_met_naam();