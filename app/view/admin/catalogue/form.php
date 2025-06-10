<h1>Modifier une fleur</h1>

<form action="/admin/catalogue/save" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['fleur']['id'] ?? '' ?>">

    <label>Opérateur (ID):
        <select name="operator_id" required>
            <?php foreach ($data['operators'] as $operator): ?>
                <option value="<?= $operator['id'] ?>" <?= isset($data['fleur']['operator_id']) && $data['fleur']['operator_id'] == $operator['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($operator['username']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>



    <label>Thème (ID):
        <select name="theme_tag_id" required>
            <?php foreach ($data['themes'] as $theme): ?>
                <option value="<?= $theme['id'] ?>" <?= isset($data['fleur']['theme_tag_id']) && $data['fleur']['theme_tag_id'] == $theme['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($theme['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Saison (ID):
        <select name="season_tag_id" required>
            <?php foreach ($data['seasons'] as $season): ?>
                <option value="<?= $season['id'] ?>" <?= isset($data['fleur']['season_tag_id']) && $data['fleur']['season_tag_id'] == $season['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($season['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Couleur (ID):
        <select name="color_tag_id">
            <?php foreach ($data['colors'] as $color): ?>
                <option value="<?= $color['id'] ?>" <?= isset($data['fleur']['color_tag_id']) && $data['fleur']['color_tag_id'] == $color['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($color['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Titre:
        <select name="title">
            <?php foreach ($data['titles'] as $title): ?>
                <option value="<?= htmlspecialchars($title['title']) ?>" <?= isset($data['fleur']['title']) && $data['fleur']['title'] == $title['title'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($title['title']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>


    <label>Slug: 
        <select name="slug">
            <?php foreach ($data['slugs'] as $slug): ?>
                <option value="<?= htmlspecialchars($slug['slug']) ?>" <?= isset($data['fleur']['slug']) && $data['fleur']['slug'] == $slug['slug'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($slug['slug']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Description: 
        <select name="description">
            <?php foreach ($data['descriptions'] as $description): ?>
                <option value="<?= htmlspecialchars($description['description']) ?>" <?= isset($data['fleur']['description']) && $data['fleur']['description'] == $description['description'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($description['description']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Contenu:
        <select name="content">
            <?php foreach ($data['contenus'] as $content): ?>
                <option value="<?= htmlspecialchars($content['content']) ?>" <?= isset($data['fleur']['content']) && $data['fleur']['content'] == $content['content'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($content['content']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Avatar (URL): 
    <select name="avatar">
            <?php foreach ($data['avatars'] as $avatar): ?>
                <option value="<?= htmlspecialchars($avatar['avatar']) ?>" <?= isset($data['fleur']['avatar']) && $data['fleur']['avatar'] == $avatar['avatar'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($avatar['avatar']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Prix:
        <select name="prix">
            <?php foreach ($data['prixs'] as $prix): ?>
                <option value="<?= htmlspecialchars($prix['price']) ?>" <?= isset($data['fleur']['price']) && $data['fleur']['price'] == $prix['price'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($prix['price']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>Stock: 
        <select name="stock">
            <?php foreach ($data['stocks'] as $stock): ?>
                <option value="<?= htmlspecialchars($stock['stock']) ?>" <?= isset($data['fleur']['stock']) && $data['fleur']['stock'] == $stock['stock'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($stock['stock']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <label>Statut:
        <select name="statut">
            <?php foreach ($data['statuts'] as $statut): ?>
                <option value="<?= htmlspecialchars($statut['status']) ?>" <?= isset($data['fleur']['status']) && $data['fleur']['status'] == $statut['status'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($statut['status']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>

    <button type="submit">Enregistrer</button>
</form>

