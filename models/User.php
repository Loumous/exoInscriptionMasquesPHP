<?php
namespace Lou\model;

use PDO;

class User{
    public $id;
    public $nom;
    public $prenom;
    public $mdp;


public static function getAll(){
    $dbh= Dao::openDatabase();
    $query = "SELECT * FROM `familles`;";
    $sth = $dbh->prepare($query);
    $sth->execute();
    $sth->setFetchMode(PDO::FETCH_CLASS,"Lou\\model\\User");
    $userRecupBDD = $sth->fetchAll();
    Dao::closeDatabase();
    return $userRecupBDD;
}

public static function findById(int $idRecuDeVu){
    $dbh = Dao::openDatabase();
    $query = "SELECT * FROM `familles` WHERE `id` = :identifiantDeVu;";
    $sth = $dbh ->prepare($query);
    $sth ->bindParam(":identifiantDeVu", $idRecuDeVu);
    $sth->execute();
    $sth->setFetchMode(PDO::FETCH_CLASS, "Lou\\model\\User");
    $UserTrouverDepuisIdDeVu = $sth->fetch();
    Dao::closeDatabase();
    return $UserTrouverDepuisIdDeVu;
}



}