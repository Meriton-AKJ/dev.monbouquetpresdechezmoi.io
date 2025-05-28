<?php

// Affiche le catalogue de produits
function catalogue()
{
    
    $stmt = db()->query('SELECT * FROM item');
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    render('catalogue/catalogue.php', ['mesproduits' => $products]);

}

// Affiche les produits d'une saison spécifique
function saison($season_slug){
    
    
    $stmt = db()->prepare('SELECT * FROM `item` 
                           JOIN tag t_season ON item.season_tag_id = t_season.id
                           WHERE t_season.slug = :season_slug;');
    $stmt->execute(['season_slug' => $season_slug]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = db()->prepare("SELECT * FROM `tag` WHERE type = 'season'");
    $stmt->execute();
    $seasons = $stmt->fetchAll(PDO::FETCH_ASSOC);


    render('catalogue/catalogue.php', ['mesproduits' => $products, 'seasons' => $seasons]);
}

// Affiche UN SEUL produit basé sur son slug
function item($slug) {
    $stmt = db()->prepare('SELECT * FROM item WHERE slug = ?');
    $stmt->execute([$slug]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    render('catalogue/item.php', ['produit' => $product]);
}