<?php
// ----------------------------------------------------------------------------------------
/* projet_e-commerce
 * 
*/
// ----------------------------------------------------------------------------------------

/**
 * paramètres de configuration de l'appplication
 */

// gestion d'erreur 
ini_set('error_reporting', E_ALL);      // en phase de développement
//ini_set('error_reporting', 0);        // en phase de production 

// constantes pour l'accès à la base de données

// Serveur MySql
define('DB_SERVER', 'localhost');
// Nom de la base de données
define('DB_DATABASE', 'projet_e-commerce');
// Nom d'utilisateur pour se connecter à la base de données
define('DB_USER', 'root');
// Mot de passe pour se connecter à la base de données
define('DB_PWD', '');

// La dsn en entier
define('DSN', 'mysql:dbname='.DB_DATABASE.';host='.DB_SERVER);

// PDO
define ('PDO_EXCEPTION_VALUE',-99);


