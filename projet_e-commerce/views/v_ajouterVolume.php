<?php
$id = $_GET["id"];
//echo $id;
?>

<div class="bg-volume-ajout text-center mt-5 mb-5">

            <h1><center><?= $titre_volume ?></center></h1><br>
            <form action="?uc=gererManga&action=ajouterVolume&id=<?= $id ?>&option=validerSaisie" method="post">
            <div class="corps-form">
                <fieldset>
                <table class="table">
                        <tr >
                            <td>
                                <label for="volume">
                                    Volume : 
                                </label>
                            </td>
                            <td>
                                <input 
                                    type="number" id="volume" 
                                    name="volume" min="1"
                                    size="50" maxlength="128" required/>
                            </td>
                        </tr>
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
                                    
                             
                        </table>
                        <br>
                <div class="pied-form">
                    <p>
                        <input class='btn btn-outline-success' id="cmdValider" name="cmdValider" 
                                type="submit"
                                value="Ajouter"/>
                    </p> 
                </div>
            </form>
</div>
