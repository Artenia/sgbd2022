
<!-- Petite partie de vue (div) qui s'occupe d'afficher la liste des propriétaires -->

<input type="hidden" id="entity" value="proprietaire">
<table>
    <tr id="0">
        <th>Nom</th>
        <th>Prénom</th>
        <th>Date de naissance</th>
        <th>Adresse</th>
        <th>Localité</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Autre contact</th>
    </tr>
    <?php if (isset($proprietaires) && !empty($proprietaires)): ?>
    <?php foreach($proprietaires as $proprietaire): ?>
    <tr id="<?= $proprietaire->id ?>">
        <input type="hidden" id="entity" value="proprietaire">
        <td data-property="nom" data-value="<?= $proprietaire->nom; ?>"><?= $proprietaire->nom; ?></td>
        <td data-property="prenom" data-value="<?= $proprietaire->prenom; ?>"><?= $proprietaire->prenom; ?></td>
        <td data-property="dn" data-value="<?= $proprietaire->dn; ?>"><?= $proprietaire->dn; ?></td>
        <td data-property="adresse" data-value="<?= $proprietaire->adresse; ?>"><?= $proprietaire->adresse; ?></td>
        <td data-property="localite" data-value="<?= $proprietaire->localite->id; ?>"><?= $proprietaire->localite; ?></td>
        <td data-property="tel" data-value="<?= $proprietaire->tel; ?>"><?= $proprietaire->tel; ?></td>
        <td data-property="email" data-value="<?= $proprietaire->email; ?>"><?= $proprietaire->email; ?></td>
        <td data-property="contact" data-value="<?= $proprietaire->contact; ?>"><?= $proprietaire->contact; ?></td>
        <td style="border:none"><button _id="<?= $proprietaire->id ?>" class="updateP">Editer</button></td>
        <td style="border:none"><button _id="<?= $proprietaire->id ?>" class="delete">Supprimer</button></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>