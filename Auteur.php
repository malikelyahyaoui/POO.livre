
<?php

class Auteur {

    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom){

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];

    }

    public function getNom(): string {

        return $this->nom;

    }

    public function setNom(string $nom){

        $this->nom = $nom;

    }

    public function getPrenom(): string {

        return $this->prenom;

    }

    public function setPrenom(string $prenom){

        $this->prenom = $prenom;

    }

    public function getLivres(): array {

        return $this->livres;

    }

    public function setLivres(array $livres){

        $this->livres = $livres;

    }

    public function ajouterLivre(Livre $livre) {

        $this->livres[] = $livre;

    }

    public function __toString(): string {

        return "{$this->prenom} {$this->nom}";

    }

    public function afficherBibliographie(): string {
        $result = "<b>Livres de {$this}</b><br>";

        foreach ($this->livres as $livre) {

            if ($livre->getAuteur() == $this) {

                $result .= $livre;

            }

        }

        return $result;

    }

}

