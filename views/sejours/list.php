<body>
<ul>
    <li><a href="/proprietaires">Proprietaires</a></li>
    <li><a href="/animaux">Animaux</a></li>
    <li><a href="/sejours">Séjours</a></li>
    <li><a href="/behavior">(Behaviors)</a></li>
</ul>
<h1 id="titreS" style="cursor: pointer;">Séjours</h1>
<p>Cliquer sur le titre pour afficher ou cacher le formumaire d'ajout.</p>
<div id="add">
    <h3>Formulaire de création d'un nouveau séjour</h3>
    <form action="" method="post" class="addSejourForm">
        <div class="sejourLabel">
            <label for="fk_animal">Nom de l'animal :</label>
            <select id="fk_animal" name="fk_animal" style="width: 247px;" required>
                <option value="" disabled selected>Nom de l'animal participant au séjour</option>
                <?php foreach ($animaux as $animal): ?>
                    <option value="<?= $animal->id ?>"><?= $animal->nom; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <div class="sejourLabel">
            <label for="debut">Date de début du séjour : </label>
            <input id="debut" name="debut" type="date" style="width: 201px;" min="2022-01-01" max="2023-01-01" title="Date minimum : ''01/01/2022'' → Date maximum : ''01/01/2023''" required>
        </div>
        <br>
        <div class="sejourLabel">
            <label for="fin">Date de fin du séjour : </label>
            <input id="fin" name="fin" type="date" style="width: 218px;" min="2022-01-01" max="2023-01-01" title="Date minimum : ''01/01/2022'' → Date maximum : ''01/01/2023''" required>
        </div>
        <br>
        <!--<div class="sejourLabel">
            <label for="fk_proprio">Propriétaire :</label>
            <input id="fk_proprio" name="fk_proprio" placeholder="Nom du propriétaire de l'animal" type="text" disabled="disabled" style="width: 268px;" required>
        </div>
        <br>-->
        <button type="submit" class="add">Créer ce séjour</button>
    </form>
</div>
<h3>Liste des séjours</h3>
<div class="update">
    <?php include('list_xhr.php') ?>
</div>
</body>

