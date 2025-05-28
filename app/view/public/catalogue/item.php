<?php if (!empty($data['produit'])): ?>
<section class="produit-detail">
    <article class="produit-card">
        <div class="produit-header">
            <h1><?= $data['produit']['title'] ?></h1>
        </div>
        
        <div class="produit-content">
            <div class="produit-image">
                <img src="/assets/images/<?= $data['produit']['avatar'] ?>" 
                     alt="<?= $data['produit']['title'] ?>" 
                     class="img-fluid">
            </div>
            
            <div class="produit-info">
                <div class="description">
                    <h3>Description</h3>
                    <p><?= nl2br($data['produit']['description']) ?></p>
                </div>
                
                <div class="prix">
                    <h3>Prix</h3>
                    <p class="price-tag"><?= $data['produit']['price'] ?> €</p>
                </div>
                
                <div class="actions">
                    <button class="btn btn-primary">Ajouter au panier</button>
                    <a href="/catalogue" class="btn btn-secondary">Retour au catalogue</a>
                </div>
            </div>
        </div>
    </article>
</section>

<?php else: ?>
<section class="produit-not-found">
    <div class="error-message">
        <h2>Produit non trouvé</h2>
        <p>Le produit que vous recherchez n'existe pas ou n'est plus disponible.</p>
        <a href="/catalogue" class="btn btn-primary">Retour au catalogue</a>
    </div>
</section>
<?php endif; ?>