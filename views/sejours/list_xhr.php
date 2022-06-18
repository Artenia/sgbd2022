
<!-- Petite partie de vue (div) qui s'occupe d'afficher la liste des propriétaires -->

<input type="hidden" id="entity" value="sejour">
<table>
    <tr>
        <td>N° de séjour</td>
        <td>Nom de l'animal</td>
        <td>Date de début</td>
        <td>Date de fin</td>
        <!--<td>Propriétaire</td>-->
    </tr>
    <?php if (isset($sejours) && !empty($sejours)): ?>
        <?php foreach($sejours as $sejour): ?>
            <tr>
                <td data-property="id" data-value="<?= $sejour->id; ?>"><?= $sejour->id; ?></td>
                <td data-property="nom" data-value="<?= $sejour->animal->nom; ?>"><?= $sejour->animal->nom; ?></td>
                <td data-property="debut" data-value="<?= $sejour->debut; ?>"><?= $sejour->debut; ?></td>
                <td data-property="fin" data-value="<?= $sejour->fin; ?>"><?= $sejour->fin; ?></td>
                <!---<td style="border:none"><button _id="<?= $proprietaire->id ?>" class="update">Editer</button></td>--->
                <td style="border:none"><button _id="<?= $sejour->id ?>" class="delete">Supprimer</button></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>