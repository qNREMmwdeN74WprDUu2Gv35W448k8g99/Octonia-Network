<div class="container">
    <br><br><br>
    <div class="panel panel-default">
        <div class="panel-body">
            <?php if (empty($donations)) { ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Erreur :</strong> Il est pas possible de faire un don pour le serveur actuellement.
                </div>
            <?php } ?>
            <?php foreach ($donations as $k => $v): $v = current($v); ?>
                <div class="col-md-12 col-sm-12">
                    <div class="box-image-text blog">
                        <div class="content">
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                <input name="currency_code" type="hidden" value="EUR"/>
                                <input name="shipping" type="hidden" value="0.00"/>
                                <input name="tax" type="hidden" value="0.00"/>
                                <input name="return" type="hidden" value="#success"/>
                                <input name="cancel_return" type="hidden" value="#erreur"/>
                                <input name="cmd" type="hidden" value="_donations"/>
                                <input name="business" type="hidden" value="<?= $v['email'] ?>"/>
                                <input name="item_name" type="hidden" value="Dons"/>
                                <input name="no_note" type="hidden" value="1"/>
                                <input name="lc" type="hidden" value="FR"/>
                                <input name="bn" type="hidden" value="PP-BuyNowBF"/>
                                <h4>Vous aimez notre serveur ? Faites un don !</h4>
                                <p>
                                    Créer un serveur c'est bien, mais pour cela divers frais rentrent en jeu, chaque mois, nous devons payer nos machines sur lesquels sont hébergés notre site internet et nos serveurs de jeux.
                                    Nous devons également payer les développeurs qui sont derrières et qui permettent jour après jour d'ajouter et améliorer les fonctionnalités du serveur.<br>
                                    En effectuant un don, vous ne gagnez pas de points boutique, mais vous nous faites un clin d'oeil et vous nous remerciez de proposer un bon serveur !<br>
                                    Vous pouvez cliquer sur le bouton ci-dessous pour éffectuer un don via PayPal.
                                </p>

                                <center>
                                    <input name="submit" src="https://www.capcontrelecancer.org/wp-content/uploads/2015/08/logo-paypal.png" type="image" style="height: 50px;"/>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
