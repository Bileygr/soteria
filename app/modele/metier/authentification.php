<?php
class Authentification {
    private $id;
    private $utilisateur;
    private $mot_de_passe;
    private $cle_secrete;

    public function __construct($id, $utilisateur, $mot_de_passe, $cle_secrete){
        $this->id = $id;
        $this->utilisateur = $utilisateur;
        $this->mot_de_passe = $mot_de_passe;
        $this->cle_secrete = $cle_secrete;
    }

    public function getId(){
        return $this->id;
    }

    public function getUtilisateur(){
        return $this->utilisateur;
    }

    public function getMotdepasse(){
        return $this->mot_de_passe;
    }

    public function getClesecrete(){
        return $this->cle_secrete;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setUtilisateur($utilisateur){
        $this->utilisateur = $utilisateur;
    }

    public function setMotdepasse($mot_de_passe){
        $mot_de_passe_crypte = password_hash($mot_de_passe, PASSWORD_BCRYPT);
        $this->mot_de_passe = $mot_de_passe_crypte;
    }

    public function setClesecrete($cle_secrete){
        $this->cle_secrete = $cle_secrete;
    }
}
?>