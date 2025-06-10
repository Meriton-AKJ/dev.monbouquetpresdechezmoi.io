<?php

function send()
{   
    // Vérifier que les données POST existent
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: /contact');
        exit;
    }

    // Validation des données
    $errors = [];
    
    if (empty($_POST['name'])) {
        $errors[] = "Le nom est obligatoire";
    }
    
    if (empty($_POST['prenom'])) {
        $errors[] = "Le prénom est obligatoire";
    }
    
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Un email valide est obligatoire";
    }
    
    if (empty($_POST['message'])) {
        $errors[] = "Le message est obligatoire";
    }

    // S'il y a des erreurs, retourner au formulaire
    if (!empty($errors)) {
        $message = "Erreurs : " . implode(', ', $errors);
        render('contact/contact.php', [
            'message' => $message,
            'post_data' => $_POST
        ]);
        return;
    }

    try {
        // Sauvegarder le message dans la base de données
        $stmt = db()->prepare('INSERT INTO message (name, email, subject, content, ip_address, created_at) VALUES (:name, :email, :subject, :content, :ip_address, NOW())');
        
        $stmt->execute([
            ':name' => $_POST['name'] . ' ' . $_POST['prenom'], // Combiner nom et prénom
            ':email' => $_POST['email'],
            ':subject' => 'Contact depuis le site web', // Sujet par défaut
            ':content' => $_POST['message'],
            ':ip_address' => $_SERVER['REMOTE_ADDR'] ?? null
        ]);

        // Rediriger vers la page de succès
        render('contact/success.php', [
            'message' => 'Votre message a été envoyé avec succès !'
        ]);

    } catch (Exception $e) {
        // En cas d'erreur, retourner au formulaire avec un message d'erreur
        render('contact/contact.php', [
            'message' => 'Erreur lors de l\'envoi du message. Veuillez réessayer.',
            'post_data' => $_POST
        ]);
    }
}

function contact()
{ 
    render('contact/contact.php');
}
?>