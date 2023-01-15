<?php
class Calendrier extends DateTime
{
    public $jour;
    public $annee;
    public $mois;
    public $jour_semaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
    public $semaines = [];

    public function definirjour($jour)
    {
        $this->jour = $jour;
    }
    public function afficherjour()
    {
        return $this->jour;

    }
    public function afficherJourprec($jour)
    {
        return $jour - 1;

    }
    public function afficherJoursuiv($jour)
    {
        return $jour + 1;

    }
    public function afficherJourSemaine()
    {
        return $this->jour_semaine;
    }
    public function definirAnnee($annee)
    {
        $this->annee = $annee;
    }
    public function afficherAnnee()
    {
        return $this->annee;
    }
    public function afficherMois()
    {
        return $this->mois;
    }
    public function definirMois($mois)
    {
        $this->mois = $mois;
    }
    public function afficherSemaines()
    {
        return $this->semaines;
    }


    public function creer()
    {
        $date = $this->setDate($this->afficherAnnee(), $this->afficherMois(), $this->afficherjour());
        //The number of days in the given month
        $jour_mois = $date->format('t');
        //The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
        $debut_mois = $date->format('N');

        /*Nombre mois du mois
        var_dump($jour_mois);*/

        /*
        var_dump($debut_mois);
        exit;
        */

        //$array_name= array_fill($start, $count, $value)
        $jours = array_fill(0, ($debut_mois - 1), '');

        for ($x = 1; $x <= $jour_mois; $x++) {
            $jours[] = $x;
        }
        /*PHP array_chunk() function splits the given array into arrays of chunks with specific number of elements.
        array_chunk ( array $array , int $size [, bool $preserve_keys = FALSE ] ) : array
        array	The array which will be split into chunks.
        size	The number of elements in each chunk.
        preserve_keys	If TRUE, keys of the source array will be preserved.If FALSE, keys of the chunks will reindex.*/
        $this->semaines = array_chunk($jours, 7);
    }

}
?>