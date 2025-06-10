<?php
    function add()
    {
        
       /* $operators = db()->query('SELECT id, username FROM operator')->fetchAll();
        $tags = db()->query('SELECT id, name FROM tag')->fetchAll();
        render('catalogue/add.php', ['operators' => $operators, 'tags' => $tags], 'admin');*/
        $operators = db()->query('SELECT id, username FROM operator')->fetchAll();
        $seasons = db()->query("SELECT id, name FROM tag where type='season'")->fetchAll();
        $themes = db()->query("SELECT id, name FROM tag where type='theme'")->fetchAll();
        $colors = db()->query("SELECT id, name FROM tag where type='color'")->fetchAll();
        render('catalogue/add.php', ['operators' => $operators, 
                                      'seasons' => $seasons, 
                                      'themes' => $themes,
                                      'colors' => $colors,], 
                                      'admin');


    }
    function edit($id)
    {
        $fleur = db()->prepare('SELECT * FROM item WHERE id = :id');
        $fleur->execute([':id' => $id]);
        $fleur = $fleur->fetch();

        $operators = db()->query('SELECT id, username FROM operator')->fetchAll();
        $seasons = db()->query("SELECT id, name FROM tag where type='season'")->fetchAll();
        $themes = db()->query("SELECT id, name FROM tag where type='theme'")->fetchAll();
        $colors = db()->query("SELECT id, name FROM tag where type='color'")->fetchAll();
        $titles = db()->query("SELECT id, title FROM item")->fetchAll();
        $slugs = db()->query("SELECT id, slug FROM item")->fetchAll();
        $descriptions = db()->query("SELECT id, description FROM item")->fetchAll();
        $contenus = db()->query("SELECT id, content FROM item")->fetchAll();
        $avatars = db()->query("SELECT id, avatar FROM item")->fetchAll();
        $prixs = db()->query("SELECT id, price FROM item")->fetchAll();
        $stocks = db()->query("SELECT id, stock FROM item")->fetchAll();
        $statuts = db()->query("SELECT id, status FROM item")->fetchAll();
        $tags = db()->query('SELECT id, name FROM tag')->fetchAll();
        render('catalogue/form.php', ['fleur' => $fleur, 
                                      'operators' => $operators, 
                                      'tags' => $tags, 
                                      'seasons' => $seasons, 
                                      'themes' => $themes,
                                      'colors' => $colors,
                                      'titles' => $titles,
                                      'slugs' => $slugs,
                                      'descriptions' => $descriptions,
                                      'contenus' => $contenus,
                                      'avatars' => $avatars,
                                      'prixs' => $prixs,
                                      'stocks' => $stocks,
                                      'statuts' => $statuts], 
                                      'admin');
    }

    function save()
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Mise à jour de l'article
            update();
        } else {
            // Création d'un nouvel article
            create();
        }
    }

    function create()
    {
        $fleurs = [
            ':operator_id' => $_POST['operator_id'],
            ':theme_tag_id' => $_POST['theme_tag_id'],
            ':season_tag_id' => $_POST['season_tag_id'] ?? null,
            ':color_tag_id' => $_POST['color_tag_id'] ?? null,
            ':title' => $_POST['title'],
            ':slug' => $_POST['slug'],
            ':description' => $_POST['description'] ?? null,
            ':content' => $_POST['content'] ?? null,
            ':avatar' => $_POST['avatar'] ?? null,
            ':price' => $_POST['price'] ?? null,
            ':stock' => $_POST['stock'] ?? null,
            ':status' => $_POST['status'] ?? 'draft',
        ];

        db()->prepare('INSERT INTO item (
        operator_id,  theme_tag_id, season_tag_id, color_tag_id, 
        title, slug, description, content, avatar, price, stock, status
    ) VALUES (
        :operator_id, :theme_tag_id, :season_tag_id, :color_tag_id, 
        :title, :slug, :description, :content, :avatar, :price, :stock, :status
    )')->execute($fleurs);

        // Redirection après insertion
        header('Location: /admin/catalogue/add');
        exit;
    }

    function update()
    {
        // Récupération et sécurisation des données du formulaire
        $fleurs = [
            ':id' => $_POST['id'],
            ':operator_id' => $_POST['operator_id'],
            ':operator_id' => $_POST['operator_id'],
            ':theme_tag_id' => $_POST['theme_tag_id'],
            ':season_tag_id' => $_POST['season_tag_id'] ?? null,
            ':color_tag_id' => $_POST['color_tag_id'] ?? null,
            ':title' => $_POST['title'],
            ':slug' => $_POST['slug'],
            ':description' => $_POST['description'] ?? null,
            ':content' => $_POST['content'] ?? null,
            ':avatar' => $_POST['avatar'] ?? null,
            ':price' => $_POST['price'] ?? null,
            ':stock' => $_POST['stock'] ?? null,
            ':status' => $_POST['status'] ?? 'draft',
        ];

        // Requête SQL de mise à jour
        db()->prepare('UPDATE item SET
        operator_id = :operator_id,
        theme_tag_id = :theme_tag_id,
        season_tag_id = :season_tag_id,
        color_tag_id = :color_tag_id,
        title = :title,
        slug = :slug,
        description = :description,
        content = :content,
        avatar = :avatar,
        price = :price,
        stock = :stock,
        status = :status
        WHERE id = :id
    ')->execute($fleurs);

        // Redirection après mise à jour
        header('Location: /admin/catalogue');
        exit;
    }
function delete($id)
{
    $fleur = db()->prepare('SELECT * FROM item WHERE id = :id');
    $fleur->execute([':id' => $id]);
    $fleur = $fleur->fetch();

    $operators = db()->query('SELECT id, username FROM operator')->fetchAll();
    $seasons = db()->query("SELECT id, name FROM tag where type='season'")->fetchAll();
    $themes = db()->query("SELECT id, name FROM tag where type='theme'")->fetchAll();
    $colors = db()->query("SELECT id, name FROM tag where type='color'")->fetchAll();
    $titles = db()->query("SELECT id, title FROM item")->fetchAll();
    $slugs = db()->query("SELECT id, slug FROM item")->fetchAll();
    $descriptions = db()->query("SELECT id, description FROM item")->fetchAll();
    $contenus = db()->query("SELECT id, content FROM item")->fetchAll();
    $avatars = db()->query("SELECT id, avatar FROM item")->fetchAll();
    $prixs = db()->query("SELECT id, price FROM item")->fetchAll();
    $stocks = db()->query("SELECT id, stock FROM item")->fetchAll();
    $statuts = db()->query("SELECT id, status FROM item")->fetchAll();
    $tags = db()->query('SELECT id, name FROM tag')->fetchAll();
    
    render(
        'catalogue/delete.php', 
        [
            'fleur' => $fleur, 
            'operators' => $operators, 
            'tags' => $tags, 
            'seasons' => $seasons, 
            'themes' => $themes,
            'colors' => $colors,
            'titles' => $titles,
            'slugs' => $slugs,
            'descriptions' => $descriptions,
            'contenus' => $contenus,
            'avatars' => $avatars,
            'prixs' => $prixs,
            'stocks' => $stocks,
            'statuts' => $statuts
        ], 
        'admin'
    );
}