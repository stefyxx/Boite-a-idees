<?php

class EnqueteManager{
    public PDO $bdd;

    public function __construct(PDO $objetBD)
    {
        $this->bdd = $objetBD;
    }
    //methods CRD pour l'Enquete

    /**
     * Inserer un'enquete de type Enquete
     */
    public function insertEnquete(Enquete $enquete): void
    {
        $sql = "INSERT INTO enquete (date, type_id, note_id) " .
            "VALUES (:date, :type, :note)";

        $requete = $this->bdd->prepare($sql); 
        $requete->bindValue(":date", $enquete->getDate());
        $requete->bindValue(":type", $enquete->getType()->getId());
        $requete->bindValue(":note", $enquete->getNote()->getId());

        //erreur d'insertion
        var_dump($requete->errorInfo());
        //erreur connexion
        var_dump($this->bdd->errorInfo());
        
        $requete->execute();
        // on recupere l'id à l'objet inseré maintenaint
        $enquete->hydrate(['id' => $this->bdd->lastInsertId()]);
        // si on n'utilise pas le hydrate:
        // $user->setId($this->bdd->lastInsertId());
    }

    /**
     * Deleter un'enquete de type Enquete en recherchant par ID
     */
    public function deleteEnquete(Enquete $enquete)
    {
        $sql = "DELETE FROM enquete WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $enquete->getId());
        $requete->execute();

        var_dump($requete->errorInfo());
        var_dump($this->bdd->errorInfo());
    }

    /**
     * Reader=> Select un User par Id dans la DB
     */

    public function selectEnqueteParId(int $id): Enquete
    {
        $sql = "SELECT * FROM enquete WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id",$id);
        $requete->execute();
        $arrayUnEnquete = $requete->fetch(PDO::FETCH_ASSOC); 
        // une seule ligne, un seul array
        return new Enquete($arrayUnEnquete);
    }
    
    

}