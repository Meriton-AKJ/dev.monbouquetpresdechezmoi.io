  <?php foreach ($data['seasons'] as $season): ?>
  <a href=""><?= $season['name'] ?></a><br>
  <?php endforeach; ?>

<section class="catalogue-catalogue">



  <?php foreach ($data['mesproduits'] as $product): ?>
    <article class="card" style="width: 22rem;">
      <img src="/assets/images/<?= $product['avatar'] ?>" class="card-img-top" alt="<?= $product['title'] ?>">
      <div class="card-body">
        <h5 class="card-title"><?= $product['title'] ?></a></h5>
        <p class="card-text"><?= $product['description'] ?></p>
        <p class="card-text"><?= $product['price'] ?> €</p>
      </div>
    </article>
  <?php endforeach; ?>

</section>
<!--<a href="/fleur.php">-->