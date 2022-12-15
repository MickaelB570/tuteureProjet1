

<?php //lien,idPays,dessinateur,auteur,annee,etat,description,stock,prix,nom,id ?>


<div class="content-ajout">
    <h2>Gestion des mangas</h2>
    <div id="object-list">
     
    <form action="?uc=gererManga&action=ajouterManga&option=validerSaisie" method="post">
                <div class="corps-form">
                    <fieldset>
                        <legend>Ajouter un manga</legend>
                        <table class="table" id="espaceElement">
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
                                    <label for="description">
                                        Description du manga : 
                                    </label>
                                </td>
                                <td>
                                        <textarea id="description" name="description" rows="8" cols="53">
                                        </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="etat">
                                        Etat : 
                                    </label>
                                </td>
                                <td>
                                    <div>
                                        <input type="radio" id="cours" name="etat" value="1">
                                        <label for="cours">En cours</label>
                                        </div>

                                        <div>
                                        <input type="radio" id="fini" name="etat" value="2">
                                        <label for="fini">Fini</label>
                                        </div>

                                    </div>
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
                                    <select name="idPays" id="idPays">
                                        <option value="">--Merci de choisir un pays--</option>
                                        <option value="1">Japon</option>
                                    </select>
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
                            <tr>
                                <td>
                                    <label for="genre">
                                        Genre :
                                        <p onclick="addTab()" class="text-primary">Ajouter un genre</p> 
                                    </label>
                                </td>
                                <td id="espaceElement">
                                    <select name="genre" id="genre">
                                        <option value="">--Merci de choisir un genre--</option>
                                        <option value="1">Action</option>
                                        <option value="2">Comédie</option>
                                        <option value="3">Romance</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                <div class="pied-form">
                    <p>
                        <input class='btn btn-outline-success' id="cmdValider" name="cmdValider" 
                                type="submit"
                                value="Ajouter"/>
                    </p> 
                </div>
            </form>

            <script>
   i = 0;
                function addTab() {
            i++;
            if(i < 3)
            {
                let tr = document.createElement("tr");
                let td1 = document.createElement("td");
                let td2 = document.createElement("td");
                let label = document.createElement("label");
                let opt0 = document.createElement("option");
                let opt1 = document.createElement("option");
                let opt2 = document.createElement("option");
                let opt3 = document.createElement("option");
                let input = document.createElement('select');

                input.id = "genre"+i;
                input.name  = "genre"+i;
                
                label.for = "Genre"+i;

                opt0.text = "--Merci de choisir un genre--";

                opt1.value = "1";
                opt1.text = "Action";

                opt2.value = "2";
                opt2.text = "Comédie";

                opt3.value = "3";
                opt3.text = "Romance";

                input.add(opt0, null);
                input.add(opt1, null);
                input.add(opt2, null);
                input.add(opt3, null);

                td1.appendChild(input);
                td2.appendChild(label);

                tr.appendChild(td2);
                tr.appendChild(td1);

                let espaceElement = document.getElementById("espaceElement");

                espaceElement.appendChild(tr);
            }
        }
            </script>
    </div>
</div>          