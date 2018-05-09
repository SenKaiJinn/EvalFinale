<?php


class Chat
{

    private $prenom;


    private $age;


    private $couleur;


    private $sexe;


    private $race;

    // Le constructeur qui permet d'utiliser This -> on rentre les parametres ()
    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this->prenom = $prenom;
        $this->age = $age;
        $this->couleur = $couleur;
        $this->sexe = $sexe;
        $this->race = $race;

    }

    // set le prénom du chat
    private function setPrenom($prenom){

        if($prenom > 3 && $prenom < 20) {
            $this->prenom = $prenom;
            return $this;
        } else {
            echo "Rentrer un prénom entre 3 et 20 caractéres please";
        }
    }
    // set l'age du chat x9
    private function setAge($age){
        if(int($age)) {
            $this->age = $age;
            return $this;
        } else {
            echo "Rentrer un  nombre.";
        }
    }
    // set la couleur , la robe
    private function setCouleur($couleur){
        if($couleur > 3 && $prenom < 10) {
            $this->couleur = $couleur;
            return $this;
        } else {
            echo "Vous devez entrer un prénom entre 3 et 10 charactère.";
        }
    }
    // set male ou femelle ou hermaphrodite ?
    private function setSexe($sexe){
        if($sexe == 'male' || $sexe == 'femelle') {
            $this->sexe = $sexe;
            return $this;
        } else {
            echo "Male ou femelle le cadrisse ?.";
        }
    }


    private function setRace($race){
        if($race > 3 && $race < 20) {
            $this->race = $race;
            return $this;
        } else {
            echo "Choissisez une race qui fait mini 3 caractéres et maxi 20 caractéres ";
        }
    }


    public function getPrenom(){
        return $this->prenom;
    }


    public function getAge(){
        return $this->age;
    }


    public function getCouleur(){
        return $this->couleur;
    }


    public function getSexe(){
        return $this->sexe;
    }


    public function getRace(){
        return $this->race;
    }


    public function getInfos(){

        $infos = array(
            "Nom du chat ".$this->getPrenom(),
            "l'age du minou : ".$this->getAge(),
            "la couleur du chat :".$this->getCouleur(),
            "le sex du chat ? ".$this->getSexe(),
            "La race du minou ".$this->getRace()
        );
        return $infos;
    }

}


?>