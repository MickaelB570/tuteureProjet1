

<?php //lien,idPays,dessinateur,auteur,annee,etat,description,stock,prix,nom,id ?>


<div id="content">
    <h2>Gestion des mangas</h2>
    <div id="object-list">
     
    <form action="?uc=gererManga&action=ajouterManga&option=validerSaisie" method="post">
                <div class="corps-form">
                    <fieldset>
                        <legend>Ajouter un manga</legend>
                        <table>
                        <tr>
                                <td>
                                    <label for="id">
                                        ID du manga : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="id" 
                                        name="id"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nom">
                                        Nom du manga : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="nom" 
                                        name="nom"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="prix">
                                        Prix du manga : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="prix" 
                                        name="prix"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="stock">
                                        Stock du manga : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="stock" 
                                        name="stock"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="description">
                                        Description du manga : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="description" 
                                        name="description"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="etat">
                                        Etat : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="etat" 
                                        name="etat"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="annee">
                                        Année de publication :
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="annee" 
                                        name="annee"
                                        size="50" maxlength="128" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="auteur">
                                        Auteur : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="auteur" 
                                        name="auteur"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="dessinateur">
                                        Dessinateur : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="dessinateur" 
                                        name="dessinateur"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="idPays">
                                        Id du pays : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="idPays" 
                                        name="idPays"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="lien">
                                        Lien de la couverture : 
                                    </label>
                                </td>
                                <td>
                                    <input 
                                        type="text" id="lien" 
                                        name="lien"
                                        size="50" maxlength="128"/>
                                </td>
                            </tr>
                        </table>
                <div class="pied-form">
                    <p>
                        <input id="cmdValider" name="cmdValider" 
                                type="submit"
                                value="Ajouter"/>
                    </p> 
                </div>
            </form>
    </div>
</div>          