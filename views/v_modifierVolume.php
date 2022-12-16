<?php
$id = $_GET["id"];
$vol = $_GET["vol"];
?>

<div class="bg-volume-ajout text-center mt-5 mb-5">
<h1><center><?= $stock_modif ?></center></h1><br>
    <form action="?uc=gererManga&action=modifierVolume&id=<?= $id ?>&vol=<?= $vol ?>&option=validerSaisie" method="post">
                <div class="corps-form">
                    <fieldset>
                        <table class="table">
                            <tr>
                                <td>
                                    <label for="stock">
                                        Stock : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="number" id="stock" 
                                        name="stock" min="0"
                                        size="50" maxlength="128" required/>
                                </td>
                            </tr>
                            <tr>  
                        </table>
                        <br>
                <div class="pied-form">
                    <p>
                        <input class='btn btn-outline-success' id="cmdValider" name="cmdValider" 
                                type="submit"
                                value=<?= $modifier ?>>
                    </p> 
                </div>
    </form>
</div>
