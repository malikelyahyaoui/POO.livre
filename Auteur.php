<?php



class   Auteur{
    private string $Prenom;
    private string $Nom;



public function __construct(string $nom,string $prenom,){
    $this->nom = $nom;
    $this->prenom = $prenom;
}


    public function getPrenom()
    {
        return $this->Prenom;
    }

    
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

   
    public function getNom()
    {
        return $this->Nom;
    }

   
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }



    public function __toString(){
        return $this->prenom." ".$this->nom;
    }
}