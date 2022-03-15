<?php

class GroupeManager
{
    public PDO $bdd;
    
    public function __construct(PDO $co)
    {
        $this->bdd = $co;
    }

    public function select()
    {
        $sql = "SELECT * FROM groupe";
        $requete = $this->bdd->prepare($sql);
        $requete->execute();
        $arrayGroupes = $requete->fetchAll(PDO::FETCH_ASSOC); 

        //var_dump($arrayGroupes);

        $arrayObjetsGroupes = [];
        foreach ($arrayGroupes as $groupe) {
            $arrayObjetsGroupes[] = new Groupe($groupe);
        }
        return $arrayObjetsGroupes;
    }

}

