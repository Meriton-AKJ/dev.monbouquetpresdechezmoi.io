<?php if (!empty($data['seasons']) && is_array($data['seasons'])): ?>
  <?php foreach ($data['seasons'] as $season): ?>
    <a href=""><?= htmlspecialchars($season['name']) ?></a><br>
  <?php endforeach; ?>
<?php endif; ?>

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