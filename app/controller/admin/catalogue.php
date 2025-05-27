    <?php
function add(){
    render('catalogue/add.php', [], 'admin');
}

function save(){
    $fleurs = [
        ':operator_id' => $_POST['operator_id'],
        ':category_tag_id' => $_POST['category_tag_id'],
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
        operator_id, category_tag_id, theme_tag_id, season_tag_id, color_tag_id, 
        title, slug, description, content, avatar, price, stock, status
    ) VALUES (
        :operator_id, :category_tag_id, :theme_tag_id, :season_tag_id, :color_tag_id, 
        :title, :slug, :description, :content, :avatar, :price, :stock, :status
    )')->execute($fleurs);

    // Redirection après insertion
    header('Location: /admin/catalogue/add');
    exit;
}
    ?>

