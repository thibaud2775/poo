<?php
// appel des fichiers
require_once 'namespace1.php';
require_once 'namespace2.php';

//déclarer espaces
use monEspace1 as A;
use monEspace2 as B;

// on instancie 
$personneA = new A\Personne();

$personneA->setNom('jean');
$personneA->setPrenom('jeannot');
$personneA->setAge('67');

echo "<h3>PERSONNE A </h3>";
echo $personneA->getPrenom().'<br>';
echo $personneA->getNom().'<br>';
echo $personneA->getAge().'<br>';


$personneB = new B\Personne();

$personneB->setNom('pierre');
$personneB->setPrenom('pierrot');
$personneB->setTaille('173');

echo "<h3>PERSONNE B </h3>";
echo $personneB->getPrenom().'<br>';
echo $personneB->getNom().'<br>';
echo $personneB->getTaille().'<br>';

class Article {
    public $_titre;
    public $_auteur;

    public function __construct($titre,$auteur){
        $this->setTitre($titre);
        $this->setAuteur($auteur);
    }
    public function getTitre()
    {
        return $this->_titre;
    }
    public function setTitre($new_titre)
    {
        $this->_titre = $new_titre;
        return $this;
    }
    public function getAuteur()
    {
        return $this->_auteur;
    }
    public function setAuteur($new_auteur)
    {
        $this->_auteur = $new_auteur;
        return $this;
    }


}
$article = new Article('cool le poo','thibaud');
print_r($article->getTitre());
print_r($article->getAuteur());

