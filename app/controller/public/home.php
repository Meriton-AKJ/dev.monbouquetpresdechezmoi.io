<?php

function home()
{
     $query = "SELECT item.id, item.title, item.slug, item.avatar, t_thm.name as theme FROM `item` 
     JOIN tag t_thm ON t_thm.id = item.theme_tag_id
     ORDER BY item.created_at DESC LIMIT 2;";
     $stmt = db()->query($query);

     $catalogue_home = $stmt->fetchAll(PDO::FETCH_ASSOC);
     render('home/home.php', ['mesfleurs' => $catalogue_home]);
}
