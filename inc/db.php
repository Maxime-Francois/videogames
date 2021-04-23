<?php

// TODO #1 créer un objet PDO permettant de se connecter à la base de données "videogame"
// et le stocker dans la variable $pdo
// --- START OF YOUR CODE ---

$pdo = new PDO(
    'mysql:dbname=videogame;host=localhost;charset=UTF8', // dsn
    'root', // user
    'root92', // password
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING] // option pour vori les erreurs
);





// --- END OF YOUR CODE ---
