<body>
<ul>
    <li><a href="/proprietaires">Proprietaires</a></li>
    <li><a href="/animaux">Animaux</a></li>
    <li><a href="/sejours">Séjours</a></li>
    <li><a href="/behavior">(Behaviors)</a></li>
</ul>

<h1 id="titre" style="cursor: pointer;">Propriétaires</h1>
<p>Cliquer sur le titre pour afficher ou cacher le formumaire d'ajout/édition.</p>
<div id="add">
    <h3>Formulaire d'ajout d'un propriétaire</h3>
    <form action="" method="post" class="addProprioForm">
        <div class="proprioLabel">
            <label for="nom">Nom : </label>
            <input id="nom" name="nom" type="text" style="width: 333px;" placeholder="Nom du propriétaire" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Dupont''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="prenom">Prénom : </label>
            <input id="prenom" name="prenom" type="text" style="width: 315px;" placeholder="Prénom du propriétaire" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Bertrand''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="dn">Date de naissance : </label>
            <input id="dn" name="dn" type="date" style="width: 250px;" min="1900-01-01" max="2022-01-01" title="Date minimum : ''01/01/1900'' → Date maximum : ''01/01/2022''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="adresse">Adresse : </label>
            <input id="adresse" name="adresse" type="text" style="width: 313px;" placeholder="Adresse du propriétaire" pattern="[A-Za-zÀ-ÿ0-9\s\-\.]+" title="Ne doit comprendre que des caractères alphanumériques, des espaces et certains symboles ( . - ) ! Exemple : ''Rue St.Dion-Valmont 45''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="fk_localite">Localité :</label>
            <select id="fk_localite" name="fk_localite" style="width: 320px;" required>
                <option value="" disabled selected>Localité du propriétaire</option>
                <?php foreach ($localites as $localite): ?>
                    <option value="<?= $localite->id ?>"><?= $localite->cp," ".$localite->nom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="tel">Téléphone : </label>
            <input id="tel" name="tel" type="text" style="width: 297px;" placeholder="Numéro de téléphone du propriétaire" pattern="[+]{1}[3]{1}[2]{1}[0-9]{9}|[0]{2}[3]{1}[2]{1}[0-9]{9}" title="Doit commencer par + ou 00 suivi de 32 et du reste du numéro sans le 0 de début. Exemple : ''+32 498 27 27 27'' (sans les espaces)" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="email">Email : </label>
            <input id="email" name="email" type="email" style="width: 326px;" placeholder="Email du propriétaire"  title="Format email standard. Exemple : ''mail@service.com''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="contact">Autre n° de contact : </label>
            <input id="contact" name="contact" type="text" style="width: 240px;" placeholder="Numéro de téléphone de l'autre contact" pattern="[+]{1}[3]{1}[2]{1}[0-9]{9}|[0]{2}[3]{1}[2]{1}[0-9]{9}" title="Doit commencer par + ou 00 suivi de 32 et du reste du numéro sans le 0 de début. Exemple : ''+32 498 27 27 27'' (sans les espaces)"  required>
        </div>
        <br>
        <button type="submit" class="add">Ajouter ce propriétaire</button>
    </form>
</div>
<div id="update" style="display: none;">
    <h3>Formulaire d'édition d'un propriétaire</h3>
    <form action="" method="post" class="updProprioForm">
        <input type="hidden" id="uid" value="">
        <div class="proprioLabel">
            <label for="nom">Nom : </label>
            <input id="unom" name="nom" type="text" style="width: 333px;" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Dupont''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="prenom">Prénom : </label>
            <input id="uprenom" name="prenom" type="text" style="width: 315px;" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Bertrand''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="dn">Date de naissance : </label>
            <input id="udn" name="dn" type="date" style="width: 250px;" min="1900-01-01" max="2022-01-01" title="Date minimum : ''01/01/1900'' → Date maximum : ''01/01/2022''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="adresse">Adresse : </label>
            <input id="uadresse" name="adresse" type="text" style="width: 313px;" pattern="[A-Za-zÀ-ÿ0-9\s\-\.]+" title="Ne doit comprendre que des caractères alphanumériques, des espaces et certains symboles ( . - ) ! Exemple : ''Rue St.Dion-Valmont 45''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="fk_localite">Localité :</label>
            <select id="ufk_localite" name="fk_localite" style="width: 320px;" required>
                <option value="" disabled selected>Localité du propriétaire</option>
                <?php foreach ($localites as $localite): ?>
                    <option value="<?= $localite->id ?>"><?= $localite->cp," ".$localite->nom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="tel">Téléphone : </label>
            <input id="utel" name="tel" type="text" style="width: 297px;" pattern="[+]{1}[3]{1}[2]{1}[0-9]{9}|[0]{2}[3]{1}[2]{1}[0-9]{9}" title="Doit commencer par + ou 00 suivi de 32 et du reste du numéro sans le 0 de début. Exemple : ''+32 498 27 27 27'' (sans les espaces)" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="email">Email : </label>
            <input id="uemail" name="email" type="email" style="width: 326px;" title="Format email standard. Exemple : ''mail@service.com''" required>
        </div>
        <br>
        <div class="proprioLabel">
            <label for="contact">Autre n° de contact : </label>
            <input id="ucontact" name="contact" type="text" style="width: 240px;" pattern="[+]{1}[3]{1}[2]{1}[0-9]{9}|[0]{2}[3]{1}[2]{1}[0-9]{9}" title="Doit commencer par + ou 00 suivi de 32 et du reste du numéro sans le 0 de début. Exemple : ''+32 498 27 27 27'' (sans les espaces)" required>
        </div>
        <br>
        <button type="submit" class="update">Modifier ce propriétaire</button>
    </form>
</div>
<h3>Liste des propriétaires</h3>
<div class="update">
    <?php include('list_xhr.php') ?>
</div>
</body>

