<?php

class Profile{
    private int $id;
    private string $pseudo;
    private string $email;
    private string $password;

    private Groupe $groupe;
    private array $suggestions = [];
    private array $enquetes = [];


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
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of groupe
     */ 
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set the value of groupe
     *
     * @return  self
     */ 
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get the value of suggestions
     */ 
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * Set the value of suggestions
     *
     * @return  self
     */ 
    public function setSuggestions($suggestions)
    {
        $this->suggestions = $suggestions;

        return $this;
    }

    /**
     * Get the value of enquetes
     */ 
    public function getEnquetes()
    {
        return $this->enquetes;
    }

    /**
     * Set the value of enquetes
     *
     * @return  self
     */ 
    public function setEnquetes($enquetes)
    {
        $this->enquetes = $enquetes;

        return $this;
    }
}


