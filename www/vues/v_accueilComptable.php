<?php
/**
 * Vue Accueil Comptable
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Guila Serfaty <serfatyguila@gmail.com>
 
 */
?>
<div id="accueil">
    <h2>
        Gestion des frais<small> - Comptable : 
            <?php 
            echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']
            ?></small>
    </h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading"  style='background-color:orange'>
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Navigation
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=validerFrais&action=choisirVisiteur"
                           class="btn btn-success btn-lg" role="button"> 
                            <span class="glyphicon glyphicon-pencil"></span>
                            <br>Valider la fiche de frais</a>
                        <a href="index.php?uc=suivrePaiement&action=choixFiche"
                           class="btn btn-primary btn-lg" role="button"style='background-color:orange'>
                            <span class="glyphicon glyphicon-list-alt" ></span>
                            <br>Suivre le paiement de la fiche de frais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>