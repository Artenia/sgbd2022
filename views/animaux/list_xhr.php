
<!-- Petite partie de vue (div) qui s'occupe d'afficher la liste des propriétaires -->

<input type="hidden" id="entity" value="animaux">
<table>
    <tr>
        <td>Nom</td>
        <td>Sexe</td>
        <td>Race</td>
        <td>Date de naissance</td>
        <td>Dernière chaleur</td>
        <td>Vétérinaire</td>
        <td>Puce</td>
        <td>Propriétaire</td>
    </tr>
    <?php if (isset($animaux) && !empty($animaux)): ?>
    <?php foreach($animaux as $animal): ?>
    <tr id="<?= $animal->id ?>">
        <td data-property="nom" data-value="<?= $animal->nom; ?>"><?= $animal->nom; ?></td>
        <td data-property="sexe" data-value="<?= $animal->sexe->id; ?>"><?= $animal->sexe->nom; ?></td>
        <td data-property="race" data-value="<?= $animal->race->id; ?>"><?= $animal->race->nom; ?></td>
        <td data-property="dn" data-value="<?= $animal->dn; ?>"><?= $animal->dn; ?></td>
        <td data-property="chaleur" data-value="<?= $animal->chaleur; ?>"><?= $animal->chaleur; ?></td>
        <td data-property="veto" data-value="<?= $animal->veto; ?>"><?= $animal->veto; ?></td>
        <td data-property="puce" data-value="<?= $animal->puce; ?>"><?= $animal->puce; ?></td>
        <td data-property="proprietaire" data-value="<?= $animal->proprietaire->id; ?>"><?= $animal->proprietaire->nom; ?> <?= $animal->proprietaire->prenom; ?></td>
        <td style="border:none"><button _id="<?= $animal->id ?>" class="updateA">Editer</button></td>
        <td style="border:none"><button _id="<?= $animal->id ?>" class="delete">Supprimer</button></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>