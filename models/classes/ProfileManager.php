<?php

class ProfileManager{
    public PDO $bdd;
    
    public function __construct(PDO $objetBD)
    {
        $this->bdd = $objetBD;
    }
    //methods CRUD pour le Profile
    
    /**
     * Inserer un user de type Profile
     */
    public function insertUser(Profile $user): void
    {
        $sql = "INSERT INTO profile (pseudo, email, password, groupe_id) " .
            "VALUES (:pseudo, :email, :password, :groupe)";
        $requete = $this->bdd->prepare($sql); 
        $requete->bindValue(":pseudo", $user->getPseudo());
        $requete->bindValue(":email", $user->getEmail());
        $requete->bindValue(":password", $user->getPassword());
        $requete->bindValue(":groupe", $user->getGroupe()->getId()); //on retour l'id du Group

        //erreur d'insertion
        var_dump($requete->errorInfo());
        //erreur connexion
        var_dump($this->bdd->errorInfo());
        
        $requete->execute();
        // on recupere l'id à l'objet inseré maintenaint
        $user->hydrate(['id' => $this->bdd->lastInsertId()]);
        // si on n'utilise pas le hydrate:
        // $user->setId($this->bdd->lastInsertId());
    }

    /**
     * Deleter an user de type Profile en recherchant par ID
     */
    public function deleteUser(Profile $user)
    {
        $sql = "DELETE FROM profile WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $user->getId());
        $requete->execute();

        var_dump($requete->errorInfo());
        var_dump($this->bdd->errorInfo());
    }

    /**
     * Reader=> Select un User par Id dans la DB
     */

    public function selectUserParId(int $id): Profile
    {
        $sql = "SELECT * FROM profile WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id",$id);
        $requete->execute();
        $arrayUnUser = $requete->fetch(PDO::FETCH_ASSOC); 
        // une seule ligne, un seul array
        return new Profile($arrayUnUser);
    }
    /**
     * Reader=> Select un User par email de la DB
     */

    public function selectUserParEmail(string $email)
    {
        $sql = "SELECT * FROM profile WHERE email=:email";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":email",$email);
        $requete->execute();
        $res = $requete->fetch(PDO::FETCH_ASSOC);

        if (isset($res))
        {
            return true;
        }

    }
    /**
     * Reader=> Select un User par pseudo de la DB
     */

    public function selectUserParPseudo(string $pseudo)
    {
        $sql = "SELECT * FROM profile WHERE pseudo=:pseudo";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":pseudo",$pseudo);
        $requete->execute();
        $pseudo = $requete->fetch(PDO::FETCH_ASSOC);
        
        $pseudoObjet = new Profile($pseudo);

        return $pseudoObjet;
    }
    
    /**
     * Mettre a jour un User
     */
    public function updateUserParId (Profile $user) : void {
        $sql = "UPDATE profile SET pseudo = :pseudo, 
                                email = :email,
                                password = :password,
                                groupe = :groupe
                WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $user->getId());
        $requete->bindValue(":pseudo",$user->getPseudo());
        $requete->bindValue(":email",$user->getEmail());
        $requete->bindValue(":password",$user->getPassword());
        $requete->bindValue(":groupe", $user->getGroupe()->getId());
        $requete->execute();      
    }

}