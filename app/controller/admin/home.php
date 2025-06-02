<?php

function home(){ 
    echo '<a href="/checkin/bye">Deconnexion</a>';
    echo '<br>';
    echo '<a href="/admin/catalogue/add">Ajouter un produit</a>';
    echo '<br>';
    echo '<a href="/admin/catalogue/edit">Modifier un produit</a>';

    die;
}
