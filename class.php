<?php
class User{
    public $nom;
    public $prenom;
    public $mail;

    public function __constructor($N, $P, $M) 
    {
        $this->nom=$N;
        $this->prenom=$P;
        $this->mail=$M;
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
$user1= new User ("Laetitia", "Pinto", "email@gmail.com");





?>