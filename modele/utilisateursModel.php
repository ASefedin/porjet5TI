<?php

function createUser($pdo)
{
    try {
        $query = "insert into user (nomUser, prenomUser, loginUser, Mot_de_passeUser, role, emailUser) values (:nomUser, :prenomUser, :loginUser, :Mot_de_passeUser, :role, :emailUser )";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
         "nomUser" => $_POST["txtNom"],
         "prenomUser" => $_POST["txtPrenom"],
         "loginUser" => $_POST["txtLogin"],
         "Mot_de_passeUser" => $_POST["txtMot_de_passe"],
         'role' => 'user',
         "emailUser" => $_POST["txtEmail"],
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function connectUser($pdo){
    try {
        $query = "select * from users where loginUser = :loginUser and passWordUser = :passWordUser";
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'loginUser' => $_POST['login'],
            'Mot_de_passeUser' => $_POST['mot_de_passe'],
        ]);
        $user = $connectUser->fetch();
        if ($user) {
            $_SESSION['user'] = $user;
        }
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}