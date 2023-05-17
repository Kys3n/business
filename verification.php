<?php
// Adresse IP autorisée à accéder à la page "merci.html"
$adresseIPAutorisee = '192.168.0.100';

// Récupérer l'adresse IP de l'utilisateur
$adresseIPUtilisateur = $_SERVER['REMOTE_ADDR'];

// Vérifier si l'adresse IP de l'utilisateur est autorisée
if ($adresseIPUtilisateur === $adresseIPAutorisee) {
    // L'utilisateur est autorisé à accéder à la page "merci.html"
    // Placez ici le code pour afficher la page "merci.html" ou effectuer une redirection vers cette page
} else {
    // L'utilisateur n'est pas autorisé à accéder à la page "merci.html"
    // Vous pouvez afficher un message d'erreur ou effectuer une redirection vers une autre page
    echo "Accès non autorisé.";
}
?>
