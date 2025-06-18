  <!--Section 0: comment ça marche?-->
  <section id="comment-marche">
      <h2>Créez Votre Bouquet Parfait</h2>
      <p>Choisissez chaque fleur individuellement et composez un bouquet unique qui vous ressemble.
          Des créations sur-mesure pour chaque occasion spéciale.</p>
      <a href="/catalogue">Découvrir nos fleurs</a>
      <a href="/FAQ">Comment ça marche ?</a>
  </section>
  <hr>
  <!--Section 1: bannière promotionnel//Image de bouquets saisonniers-->
  <section id="banniere-promo">
      <h2>Découvrez Notre Promotion De La Semaine</h2>
      <div class="image-banniere-promo">
          <img src="assets/images/Bouquet promotionnel Hiver.jpg" alt="Image de bouquets promotionnel">
          <p>Bouquet <strong>hivernale</strong></p>
      </div>

  </section>
  <hr>

  <!--Section 2: catalogue-->
  <div class="titre-catalogue-acceuil">
    <h2>Dernières Nouveautés Du Catalogue</h2>
  </div>
  
  <section id="catalogue-acceuil">
      <?php foreach ($data['mesfleurs'] as $fleur): ?>
          <h3>
              <img src="/assets/images/<?= $fleur['avatar'] ?>" alt="<?= $fleur['title'] ?>">
              <p><?= $fleur['title'] ?></p>
          </h3>
      <?php endforeach; ?>
  </section>
    <hr>

  <!--Section 3: Projets à venir-->
<section id="a-venir-acceuil">
  <div class="bouquet-block gauche">
    <img src="assets/images/Bouquet estivale.jpg" alt="Bouquets estivales">
    <a href="/catalogue/season/ete">Découvrez notre bouquet <strong>estivale</strong>, en avance!</a>
  </div>

  <div class="bouquet-block droite">
    <img src="assets/images/Bouquet automnale.jpg" alt="Bouquets automnales">
    <a href="/catalogue/season/automne">Découvrez notre bouquet <strong>automnale</strong>, en avance!</a>
  </div>
</section>

    <hr>
  <!--Section 4: E-mail // contact-->
  <section id="contact-acceuil">
      <h2>Rejoignez Nous</h2>

      <a href="/contact">Contact</a>
      <a href="#">E-mail</a>

  </section>
    <hr>

    <!--Section 5: composer un bouquet-->
 <section id="composer-bouquet-acceuil">
  <h2>Comment Créer Votre Bouquet ?</h2>

  <div class="etape-composer">
    <div class="etape">
      <div class="numero">1</div>
      <h3>Explorez</h3>
      <p>Parcourez notre catalogue de fleurs</p>
    </div>

    <div class="etape">
      <div class="numero">2</div>
      <h3>Sélectionnez</h3>
      <p>Choisissez vos fleurs favorites</p>
    </div>

    <div class="etape">
      <div class="numero">3</div>
      <h3>Composez</h3>
      <p>Créez votre bouquet unique</p>
    </div>

    <div class="etape">
      <div class="numero">4</div>
      <h3>Recevez</h3>
      <p>Livraison fraîche à domicile</p>
    </div>
  </div>

  <a href="/catalogue">Composer mon bouquet maintenant !</a>
</section>
