<?php

class Note{
    private int $id;
    private string $label; //insatisfait, peu satisfait, bof, satisfait, génial
    private int $valeur;   //  0,            50,            100


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
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of valeur
     */ 
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set the value of valeur
     *
     * @return  self
     */ 
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

}


