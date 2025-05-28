<?php
if (isset($data['message'])) {
    echo '<p>' . $data['message'] . '</p>';
}

?>

<form action="/contact/send" method="POST" id="contact-form">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" name="name" class="form-control" placeholder="Entrer votre nom" value="<?= $data['post_data']["name"] ?? ''; ?>">
    </div>
    <div class="form-group">
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" class="form-control" placeholder="Entrer votre prenom " value="<?= $data['post_data']["prenom"] ?? ''; ?>">

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Entrer votre email" value="<?= $data['post_data']["email"] ?? ''; ?>">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" rows="4" placeholder="Entrer votre message"><?= $data['post_data']["message"] ?? ''; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>