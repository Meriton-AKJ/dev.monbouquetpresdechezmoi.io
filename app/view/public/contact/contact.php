<?php
if (isset($data['message'])) {
    echo '<p>' . $data['message'] . '</p>';
}

?>

<div class="contact-container">
    <!-- Formulaire de contact -->
    <form action="/contact/send" method="POST" id="contact-form">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" placeholder="Entrer votre nom" value="<?= $data['post_data']["name"] ?? ''; ?>">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" placeholder="Entrer votre prénom" value="<?= $data['post_data']["prenom"] ?? ''; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Entrer votre email" value="<?= $data['post_data']["email"] ?? ''; ?>">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" rows="4" placeholder="Entrer votre message"><?= $data['post_data']["message"] ?? ''; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <!-- Informations de contact -->
    <div class="contact-info">
        <h3><mark>Informations de contact</mark></h3>
        <p><strong>Adresse :</strong> 66 Groenveld, Zaventem 1930, Belgique</p>
        <p><strong>Téléphone :</strong> +32 487 72 54 35</p>
        <p><strong>Email :</strong> monbouquetpresdechezmoi@info.be</p>
        <p><strong>Horaires :</strong></p>
        - Lundi : 9h - 12h
        <br>- Mardi - Vendredi : 9h - 17h
        <br>- Samedi : 12h - 15h</p>


    </div>
</div>
