<h1>Ajouter une fleur</h1>

<form action="/admin/catalogue/save" method="post" enctype="multipart/form-data">
    <label>Opérateur (ID): <input type="number" name="operator_id" required></label><br>
    <label>Catégorie (ID): <input type="number" name="category_tag_id" required></label><br>
    <label>Thème (ID): <input type="number" name="theme_tag_id" required></label><br>
    <label>Saison (ID): <input type="number" name="season_tag_id"></label><br>
    <label>Couleur (ID): <input type="number" name="color_tag_id"></label><br>

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