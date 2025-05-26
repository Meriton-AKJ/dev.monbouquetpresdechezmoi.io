  <!--Section 0: comment ça marche?-->
  <section id="comment-marche">
  <h1>Créez Votre Bouquet Parfait</h1>
  <p>Choisissez chaque fleur individuellement et composez un bouquet unique qui vous ressemble. 
     Des créations sur-mesure pour chaque occasion spéciale.</p>
     <a href="/catalogue">Découvrir nos fleurs</a>
     <a href="/FAQ">Comment ça marche ?</a>
    </section>
  <!--Section 1: bannière promotionnel//Image de bouquets saisonniers-->
  <section id="banniere-promo">
      <h2>Découvrez notre promotion de la semaine</h2>
      <div class="image-banniere-promo">
      <img src="assets/images/Bouquet promotionnel Hiver.jpg" alt="Image de bouquets promotionnel">
      </div>
  </section>
  <hr>

  <!--Section 2: catalogue-->
  <section id="catalogue-acceuil">
      <?php foreach ($data['mesfleurs'] as $fleur): ?>
          <h3>
              <img src="/assets/images/<?= $fleur['avatar'] ?>" alt="<?= $fleur['title'] ?>">
              <p><?= $fleur['title'] ?></p>
          </h3>
      <?php endforeach; ?>
  </section>

  <!--Section 3: Projets à venir-->
  <section id="a-venir-acceuil">
      <img src="assets/images/Bouquet estivale.jpg" alt="Bouquets estivales">
      <a href="/catalogue/season/ete">Découvrez notre bouquet <strong>estivale</strong>, en avance!</a>

      <img src="assets/images/Bouquet automnale.jpg" alt="Bouquets automnales">
      <a href="/catalogue/season/automne">Découvrez notre bouquet <strong>automnale</strong>, en avance!</a>

  </section>

  <!--Section 4: E-mail // contact-->
  <section id="contact-acceuil">
      <h2>Rejoignez nous</h2>
      <ul>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="#">E-mail</a></li>
      </ul>
  </section>