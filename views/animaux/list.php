<body>
<ul>
    <li><a href="/proprietaires">Proprietaires</a></li>
    <li><a href="/animaux">Animaux</a></li>
    <li><a href="/sejours">Séjours</a></li>
    <li><a href="/behavior">(Behaviors)</a></li>
</ul>
<h1 id="titre" style="cursor: pointer;">Animaux</h1>
<p>Cliquer sur le titre pour afficher ou cacher le formumaire d'ajout/édition.</p>
<div id="add">
    <h3>Formulaire d'ajout d'un animal</h3>
    <form action="" method="post" class="addAnimalForm">
        <div class="animalLabel">
            <label for="nom">Nom : </label>
            <input id="nom" name="nom" type="text" style="width: 255px;" placeholder="Nom de l'animal" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Billy''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="fk_sexe">Sexe :</label>
            <select id="fk_sexe" name="fk_sexe" style="width: 263px;" required>
                <option value="" disabled selected>Sexe de l'animal</option>
                <?php foreach ($sexes as $sexe): ?>
                    <option value="<?= $sexe->id ?>"><?= $sexe->nom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="animalLabel">
            <label for="fk_race">Race :</label>
            <select id="fk_race" name="fk_race" style="width: 263px;" required>
                <option value="" disabled selected>Race de l'animal</option>
                <?php foreach ($races as $race): ?>
                    <option value="<?= $race->id ?>"><?= $race->nom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="animalLabel">
            <label for="dn">Date de naissance : </label>
            <input id="dn" name="dn" type="date" style="width: 172px;" min="2000-01-01" max="2022-01-01" title="Date minimum : ''01/01/2000'' → Date maximum : ''01/01/2022''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="chaleur">Date de dernière chaleur : </label>
            <input id="chaleur" name="chaleur" type="date" style="width: 130px;" min="2000-01-01" max="2022-01-01" title="Date minimum : ''01/01/2000'' → Date maximum : ''01/01/2022''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="veto">Vétérinaire : </label>
            <input id="veto" name="veto" type="text" style="width: 215px;" placeholder="Nom du vétérinaire de l'animal" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Durant''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="puce">N° de puce : </label>
            <input id="puce" name="puce" type="text" style="width: 215px;" placeholder="Numéro de puce de l'animal" pattern="[0-9]{15}" title="Ne doit comprendre que des caractères numériques et doit comporter 15 chiffres ! Exemple : ''123456789123456''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="fk_proprio">Propriétaire :</label>
            <select id="fk_proprio" name="fk_proprio" style="width: 220px;" required>
                <option value="" disabled selected>Nom du propriétaire de l'animal</option>
                <?php foreach ($proprietaires as $proprietaire): ?>
                    <option value="<?= $proprietaire->id ?>"><?= $proprietaire->nom; ?> <?= $proprietaire->prenom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <button type="submit" class="add">Ajouter cet animal</button>
    </form>
</div>
<div id="update" style="display: none;">
    <h3>Formulaire d'édition d'un animal</h3>
    <form action="" method="post" class="updAnimalForm">
        <input type="hidden" id="uid" value="">
        <div class="animalLabel">
            <label for="nom">Nom : </label>
            <input id="unom" name="nom" type="text" style="width: 255px;" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Billy''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="fk_sexe">Sexe :</label>
            <select id="ufk_sexe" name="fk_sexe" style="width: 263px;" required>
                <option value="" disabled selected>Sexe de l'animal</option>
                <?php foreach ($sexes as $sexe): ?>
                    <option value="<?= $sexe->id ?>"><?= $sexe->nom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="animalLabel">
            <label for="fk_race">Race :</label>
            <select id="ufk_race" name="fk_race" style="width: 263px;" required>
                <option value="" disabled selected>Race de l'animal</option>
                <?php foreach ($races as $race): ?>
                    <option value="<?= $race->id ?>"><?= $race->nom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="animalLabel">
            <label for="dn">Date de naissance : </label>
            <input id="udn" name="dn" type="date" style="width: 172px;" min="2000-01-01" max="2022-01-01" title="Date minimum : ''01/01/2000'' → Date maximum : ''01/01/2022''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="chaleur">Date de dernière chaleur : </label>
            <input id="uchaleur" name="chaleur" type="date" style="width: 130px;" min="2000-01-01" max="2022-01-01" title="Date minimum : ''01/01/2000'' → Date maximum : ''01/01/2022''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="veto">Vétérinaire : </label>
            <input id="uveto" name="veto" type="text" style="width: 215px;" pattern="[a-zA-ZÀ-ÿ]+" title="Ne doit comprendre que des caractères alphabétiques ! Exemple : ''Durant''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="puce">N° de puce : </label>
            <input id="upuce" name="puce"  type="text" style="width: 215px;" pattern="[0-9]{15}" title="Ne doit comprendre que des caractères numériques et doit comporter 15 chiffres ! Exemple : ''123456789123456''" required>
        </div>
        <br>
        <div class="animalLabel">
            <label for="fk_proprio">Propriétaire :</label>
            <select id="ufk_proprio" name="fk_proprio" style="width: 220px;" required>
                <option value="" disabled selected>Nom du propriétaire de l'animal</option>
                <?php foreach ($proprietaires as $proprietaire): ?>
                    <option value="<?= $proprietaire->id ?>"><?= $proprietaire->nom; ?> <?= $proprietaire->prenom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <button type="submit" class="upd">Modifier cet animal</button>
    </form>
</div>
<h3>Liste des animaux</h3>
<div class="update">
    <?php include('list_xhr.php') ?>
</div>
</body>

