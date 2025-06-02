<h1>Ajouter une fleur</h1>

<form action="/admin/catalogue/save" method="post" enctype="multipart/form-data">
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
    <label>Titre: <input type="text" name="title" required></label><br>
    <label>Slug: <input type="text" name="slug" required></label><br>
    <label>Description: <textarea name="description"></textarea></label><br>
    <label>Contenu: <textarea name="content"></textarea></label><br>
    <label>Avatar (URL): <input type="text" name="avatar"></label><br>
    <label>Prix: <input type="number" name="price" step="0.01"></label><br>
    <label>Stock: <input type="number" name="stock"></label><br>

    <label>Statut:
        <select name="status">
            <option value="draft">Brouillon</option>
            <option value="published">Publié</option>
            <option value="archived">Archivé</option>
        </select>
    </label><br><br>

    <button type="submit">Enregistrer</button>
</form>