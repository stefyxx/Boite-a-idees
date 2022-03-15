<?php

class SuggestionManager{
    public PDO $bdd;
    
    public function __construct(PDO $objetBD)
    {
        $this->bdd = $objetBD;
    }
    //methods CRUD pour le Suggestion
    
    /**
     * Inserer un suggestion de type Suggestion
     */
    public function insertSuggestion(Suggestion $suggestion): void
    {
        $sql = "INSERT INTO suggestion (date, objet, message) " .
            "VALUES (:date, :objet, :message)";
        $requete = $this->bdd->prepare($sql); 
        $requete->bindValue(":date", $suggestion->getDate());
        $requete->bindValue(":objet", $suggestion->getObjet());
        $requete->bindValue(":message", $suggestion->getMessage());

        //erreur d'insertion
        var_dump($requete->errorInfo());
        //erreur connexion
        var_dump($this->bdd->errorInfo());
        
        $requete->execute();
        // on recupere l'id à l'objet inseré maintenaint
        $suggestion->hydrate(['id' => $this->bdd->lastInsertId()]);
        // si on n'utilise pas le hydrate:
        // $user->setId($this->bdd->lastInsertId());
    }

    /**
     * Deleter un suggestion de type Suggestion en recherchant par ID
     */
    public function deleteSuggestion(Suggestion $suggestion)
    {
        $sql = "DELETE FROM suggestion WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $suggestion->getId());
        $requete->execute();

        var_dump($requete->errorInfo());
        var_dump($this->bdd->errorInfo());
    }

    /**
     * Reader=> Select un suggestion par Id dans la DB
     */

    public function selectSuggestionParId(int $id): Suggestion
    {
        $sql = "SELECT * FROM suggestion WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id",$id);
        $requete->execute();
        $arrayUnSuggestion = $requete->fetch(PDO::FETCH_ASSOC); 
        // une seule ligne, un seul array
        return new Suggestion($arrayUnSuggestion);
    }
    
    /**
     * Mettre a jour un suggestion
     */
    public function updateSuggestionParId (Suggestion $suggestion) : void {
        $sql = "UPDATE suggestion SET date = :date,
                                    objet = :objet,
                                    message = :message
                WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $suggestion->getId());
        $requete->bindValue(":date",$suggestion->getDate());
        $requete->bindValue(":object",$suggestion->getObjet());
        $requete->bindValue(":message",$suggestion->getMessage());
        $requete->execute();      
    }

}