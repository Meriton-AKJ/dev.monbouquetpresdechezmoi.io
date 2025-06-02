
<section class="catalogue-filtre">
  <?php
      echo '<a href="/catalogue" class="filtre-principal">Toutes les fleurs</a>';
      echo '<a href="/catalogue/saison/ete">Été</a>';
      echo '<a href="/catalogue/saison/printemps">Printemps</a>';
      echo '<a href="/catalogue/saison/automne">Automne</a>';
      echo '<a href="/catalogue/saison/hiver">Hiver</a>';
  ?>
</section>


<section class="catalogue-catalogue">
  <?php
  if (!empty($data['mesproduits']) && is_array($data['mesproduits'])) {
    foreach ($data['mesproduits'] as $product) {
      echo '<article class="card">';
      echo '<hr>';
      echo '<h2>' . $product['title'] . '</h2>';
      echo '<img src="/assets/images/' . $product['avatar'] . '" alt="' . $product['title'] . '">';
      echo '<p>' . $product['description'] . '</p>';
      echo '<p>Prix: ' . $product['price'] . ' €</p>';
      echo '<div class = "stock">';
      echo '<a href="/catalogue/item/' . $product['slug'] . '">Voir le produit</a>';
      echo '<a href="/panier" class="cart-icon">
              <i class="fa-solid fa-cart-shopping"></i>
            </a>';
      echo '</div>';
      echo '</article>';
    }
  }
  ?>
</section>