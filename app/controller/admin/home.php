<?php
function home() {
    echo '
    <div class="admin-dashboard">
        <h1>Panneau d\'administration</h1>
        <ul class="admin-links">
            <li><a href="/admin/catalogue/add">➕ Ajouter un produit</a></li>
            <li><a href="/admin/catalogue/edit">✏️ Modifier un produit</a></li>
            <li><a href="/admin/catalogue/delete">🗑️ Supprimer un produit</a></li>
            <li><a href="/checkin/bye">🚪 Déconnexion</a></li>
        </ul>
    </div>';
    die;
}

