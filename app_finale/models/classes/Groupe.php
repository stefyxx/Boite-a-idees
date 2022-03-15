<?php

class Groupe{
    private int $id;
    private string $nom;
    private array $profiles = [];

    public function hydrate(array $valeurs)
    {
        foreach ($valeurs as $Propriete => $valeurPropriete) {
            if (isset($valeurs[$Propriete])) {
                $this->$Propriete = $valeurPropriete;
            }
        }
    }

    public function __construct(array $valeurs)
    {
        $this->hydrate($valeurs);
    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of profiles
     */ 
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Set the value of profiles
     *
     * @return  self
     */ 
    public function setProfiles($profiles)
    {
        $this->profiles = $profiles;

        return $this;
    }
}


