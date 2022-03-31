<?php

/* **
 * Vue Corriger Element Hors Forfait 
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Guila Serfaty <serfatyguila@gmail.com>
 
 */
?>

<div class="row">
    <h3>Nouvel élément hors forfait</h3>
    <div class="col-md-4">
        <form action="index.php?uc=validerFrais&action=actualiserNouvelElement" 
              method="post" role="form">
            <div class="form-group">
                <label for="txtDateHF">Date (jj/mm/aaaa): </label>
                <input type="text" id="txtDateHF" name="dateFrais" 
                       class="form-control" id="text">
            </div>
            <div class="form-group">
                <label for="txtLibelleHF">Libellé</label>             
                <input type="text" id="txtLibelleHF" name="libelle" 
                       class="form-control" id="text">
            </div> 
            <div class="form-group">
                <label for="txtMontantHF">Montant : </label>
                <div class="input-group">
                    <span class="input-group-addon">€</span>
                    <input type="text" id="txtMontantHF" name="montant" 
                           class="form-control" value="">
                </div>
            </div>
             <a href="index.php?uc=validerFrais&action=corrigerElementHorsForfait=<?php echo $id ?>" >
                            <button class="btn btn-success" type="submit">corriger</button></a>
                            
                     <a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
                           onclick="return confirm('Voulez-vous vraiment réinitialiser ce frais?');">
                            <button class="btn btn-danger" type="submit">effacer</button></a></td>
           
           
          
        </form>
    </div>
</div>