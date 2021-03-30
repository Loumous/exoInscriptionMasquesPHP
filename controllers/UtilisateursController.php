<?php
namespace Lou\controller;


class UtilisateursController
{//fait pour afficher restaurants
    public static function listeUtilisateurs($page){
        $UtilisateursRecupBDDEnregistrerDansModel = User::getAll();
        View::setTemplate('listeUtilisateurs');
        View::bindVariable("affichageUtilisateurs", $UtilisateursRecupBDDEnregistrerDansModel);
        View::display();
    }

    public static function findByEmail(string $emailRecu){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM familles WHERE email = :emailDeVue;";
        $sth = $dbh ->prepare($query);
        $sth ->bindParam(":emailDeVue", $emailRecu);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Lou\model\User");
        $UserTrouverDepuisIdDeVu = $sth->fetch();
        Dao::closeDatabase();
        return $UserTrouverDepuisIdDeVu;
    }

    public static function findBymdp(string $mdpRecu){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM familles WHERE mdp = :mdpDeVue;";
        $sth = $dbh ->prepare($query);
        $sth ->bindParam(":mdpDeVue", $mdpRecu);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Lou\model\User");
        $UserTrouverDepuisIdDeVu = $sth->fetch();
        Dao::closeDatabase();
        return $UserTrouverDepuisIdDeVu;
    }
}