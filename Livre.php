<?php
class Livre {
   private string $titre;
   private int $nombrePages;
   private int $anneeParution;
   private float $prix;
   private Auteur $auteur;
   
   public function __construct(string $titre, int $nombrePages, int $anneeParution, float $prix, Auteur $auteur) {
       $this->titre = $titre;
       $this->nombrePages = $nombrePages;
       $this->anneeParution = $anneeParution;
       $this->prix = $prix;
       $this->auteur = $auteur;
       $this->auteur->ajouterLivre($this);
 
   }

   public function getAuteur() : Auteur {
    return $this-> auteur;
   }

   public function setAuteur($auteur){
      $this->auteur = $auteur;
     return $this;
   }

   public function getTitre(){
      return $this->titre;
   }

   public function setTitre($titre){
      $this->titre = $titre;

      return $this;
   }
 
   public function getNombrePages(){
      return $this->nombrePages;
   }

   public function setNombrePages($nombrePages){
      $this->nombrePages = $nombrePages;

      return $this;
   }

   public function getAnneeParution(){
      return $this->anneeParution;
   }
 
   public function setAnneeParution($anneeParution)
   {
      $this->anneeParution = $anneeParution;

      return $this;
   }

   public function getPrix()
   {
      return $this->prix;
   }

   public function setPrix($prix)
   {
      $this->prix = $prix;

      return $this;
   }

   public function __toString(): string {
      return "{$this->titre} ({$this->anneeParution}) : {$this->nombrePages} pages / {$this->prix}€ <br>";
  }

   }

