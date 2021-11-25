<?php

class User{
    public $nom;
    public $prenom;
    public $mail;

    public function __construct($p, $n, $m) 
    {
        $this->prenom=$p;
        $this->nom=$n;
        $this->mail=$m;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function setNom($NewNom)
    {
        $this->nom=$NewNom;
    }
    public function setPrenom($NewPrenom)
    {
        $this->prenom=$NewPrenom;
    }
    public function setMail($NewMail)
    {
        $this->mail=$NewMail;
    }

}



