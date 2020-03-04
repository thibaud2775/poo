<?php
namespace monEspace1;
class Personne {
    public $_nom;
    public $_prenom;
    public $_age;

    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($nom)
    {
        $this->_nom = $nom;
        return $this;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
        return $this;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function setAge($age)
    {
        $this->_age = $age;
        return $this;
    }
}