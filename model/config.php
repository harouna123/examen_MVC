<?php
    function getConnexion(){
        define('dns', 'mysql:host=127.0.0.1;dbname=gestion_paiement;charset=UTF8mb4');
        define('user', 'root');
        define('pass', '');

        try {
            $connexion = new PDO(dns, user, pass);
            
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        } 
        return $connexion;
    }

  