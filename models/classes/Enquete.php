<?php

include_once("./Type.php");
include_once("./Note.php");

class Enquete{
    private int $id;
    private DateTime $date;
    private Type $type;
    private Note $note;

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
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of note
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */ 
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }
}


