<div class="box_card">
    <?php foreach ($regimes as $re) {
        # code...?>
    <div class="card_item">
        <div class="card_titre"><?php echo $re['libele']; ?></div>
        <div class="card_description">
            <div class="card_description_titre">Déscription</div>
            <div class="card_texte">
            <?php echo $re['descriptions']; ?>
            </div>
        </div>
        <div class="box_bouton">
            <!-- <button id="btn_supp">Supprimer</button> -->
            <button id="btn_modif">Suivre</button>
        </div>
    </div>
    <?php } ?>
</div>