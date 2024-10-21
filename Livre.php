<?php



class Livre{
    private string $Titre;
    private string $NbPages;
    private DateTime $AnneParution;
    private string $Prix;


    public function __construct(string $Titre, string $NbPages,string $AnneParution,string $Prix){
        $this->Titre = $Titre;
        $this->NbPages = $NbPages;
        $this->AnneParution = new DateTime($AnneParution);
        $this->Prix = $Prix;
    }


   
    public function getTitre():string
    {
        return $this->Titre;
    }

   
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;

        return $this;
    }

    
    public function getNbPages()
    {
        return $this->NbPages;
    }

    
    public function setNbPages($NbPages)
    {
        $this->NbPages = $NbPages;

        return $this;
    }

    
    public function getAnneParution():DateTime
    {
        return $this->AnneParution;
    }

    
    public function setAnneParution($AnneParution)
    {
        $this->AnneParution = $AnneParution->format("Y");

        return $this;
    }

    
    public function getPrix()
    {
        return $this->Prix;
    }

    
    public function setPrix($Prix)
    {
        $this->Prix = $Prix;

        return $this;
    }


    public function afficherBibliographie(){
        $result = "<h2>Livres de $this</h2>";


        foreach ($this->Livre as $livre){
             $result .= $Titre->getTitre()."(".$AnneParution->getAnneParution().") :".$NbPages->getNbPages()."pages /".$Prix->getPrix()."€ <br>";
        }

        return $result;
   }


    public function __toString(){
        return $this->Titre;
   }


}