$(document).ready(function(){

    //Declaration de mes variables globales pour gérer l'affichage de mes forms
    let x = document.getElementById(`add`);
    let y = document.getElementById(`update`);
    let flag=false;

    //Permet de cacher les formulaires sur les views proprietaires & animaux
    $('body').on('click', '#titre', function() {
        if (x.style.display === "none" && y.style.display === "none") {
            if (flag === false) {
                x.style.display = "block";
            }else{
                y.style.display = "block"
            }
        } else {
            if (x.style.display === "none" && y.style.display === "block") {
                y.style.display = "none";
            }else{
                x.style.display = "none";
            }
        }
    });

    //Permet de cacher le formulaire d'ajout de sejour (→ pas de formulaire d'edition)
    $('body').on('click', '#titreS', function() {
        if (x.style.display === "none") {
            x.style.display = "block";
        }else{
            x.style.display = "none";
        }
    });

    $('body').on('click', 'button.delete', function() {
        //on crée notre objet qu'on va passer en requete POST
        data={
            entity:document.getElementById("entity").value,
            id:$(this).attr('_id')
        }
        //on effectue la requete POST en lui passant l'objet
        $.post('/'+data.entity+'/destroy/'+data.id,data).done(function(result) {
            //on update le div.update (list_xhr)
            $('div.update').html(result);
        }).fail(function(err) {
            console.warn('err', err);
        });
    });

    $('.addProprioForm').submit(function(event) {
        //on empêche le bouton submit de rafraîchir la page
        event.preventDefault()
        //on crée notre objet qu'on va passer en requete POST
        data = {
            nom:document.getElementById("nom").value,
            prenom:document.getElementById("prenom").value,
            dn:document.getElementById("dn").value,
            adresse:document.getElementById("adresse").value,
            fk_localite:document.getElementById("fk_localite").value,
            tel:document.getElementById("tel").value,
            email:document.getElementById("email").value,
            contact:document.getElementById("contact").value
        }
        //on effectue la requete POST en lui passant l'objet
        $.post('/proprietaires/store/',data).done(function(result) {
            //on update le div.update (list_xhr)
            $('div.update').html(result);
            //on vide le formulaire d'ajout après l'envoi des données
            $('.addProprioForm').trigger("reset");
        }).fail(function(err) {
            console.warn('fail err', err);
        });
    });

    $('.addAnimalForm').submit(function(event) {
        //on empêche le bouton submit de rafraîchir la page
        event.preventDefault()
        //on crée notre objet qu'on va passer en requete POST
        data = {
            nom:document.getElementById("nom").value,
            fk_sexe:document.getElementById("fk_sexe").value,
            fk_race:document.getElementById("fk_race").value,
            dn:document.getElementById("dn").value,
            chaleur:document.getElementById("chaleur").value,
            veto:document.getElementById("veto").value,
            puce:document.getElementById("puce").value,
            fk_proprio:document.getElementById("fk_proprio").value,
        }
        //on effectue la requete POST en lui passant l'objet
        $.post('/animaux/store/',data).done(function(result) {
            //on update le div.update (list_xhr)
            $('.update').html(result);
            //on vide le formulaire d'ajout après l'envoi des données
            $('.addAnimalForm').trigger("reset");
        }).fail(function(err) {
            console.warn('fail err', err);
        });
    });

    $('.addSejourForm').submit(function(event) {
        //on empêche le bouton submit de rafraîchir la page
        event.preventDefault()
        //on crée notre objet qu'on va passer en requete POST
        data = {
            fk_animal:document.getElementById("fk_animal").value,
            debut:document.getElementById("debut").value,
            fin:document.getElementById("fin").value
        }
        //on effectue la requete POST en lui passant l'objet
        $.post('/sejour/store/',data).done(function(result) {
            //on update le div.update (list_xhr)
            $('div.update').html(result);
            //on vide le formulaire d'ajout après l'envoi des données
            $('.addSejourForm').trigger("reset");
        }).fail(function(err) {
            console.warn('fail err', err);
        });
    });

    $('body').on('click', 'button.updateP', function() {
        //on cache le formulaire d'ajout et on affiche celui d'edition
        if (y.style.display === "none") {
            y.style.display = "block";
            x.style.display = "none";
            //on garde en mémoire quel formulaire est affiché
            flag=true;
        }
        // On récupère les données de la ligne et on les injecte dans le formulaire d'édition
        let id = $(this).attr('_id');
        document.getElementById("uid").value = id;
        document.getElementById("unom").value = $("#"+id+" td[data-property=nom]").attr("data-value");
        document.getElementById("uprenom").value = $("#"+id+" td[data-property=prenom]").attr("data-value");
        document.getElementById("udn").value = $("#"+id+" td[data-property=dn]").attr("data-value");
        document.getElementById("uadresse").value = $("#"+id+" td[data-property=adresse]").attr("data-value");
        document.getElementById("ufk_localite").value = $("#"+id+" td[data-property=localite]").attr("data-value");
        document.getElementById("utel").value = $("#"+id+" td[data-property=tel]").attr("data-value");
        document.getElementById("uemail").value = $("#"+id+" td[data-property=email]").attr("data-value");
        document.getElementById("ucontact").value = $("#"+id+" td[data-property=contact]").attr("data-value");
    });

    $('.updProprioForm').submit(function(event) {
        event.preventDefault()
        //on crée notre objet qu'on va passer en requete POST
        data = {
            id:document.getElementById("uid").value,
            nom:document.getElementById("unom").value,
            prenom:document.getElementById("uprenom").value,
            dn:document.getElementById("udn").value,
            adresse:document.getElementById("uadresse").value,
            fk_localite:document.getElementById("ufk_localite").value,
            tel:document.getElementById("utel").value,
            email:document.getElementById("uemail").value,
            contact:document.getElementById("ucontact").value,
        }
        //on effectue la requete POST en lui passant l'id de l'objet et l'objet
        $.post('/proprietaire/update/'+data.id,data).done(function(result) {
            //on cache le formulaire d'edition et on reaffiche celui d'ajout
            y.style.display = "none";
            x.style.display = "block";
            //on garde en mémoire le formulaire affiché
            flag=false;
            //on update le div.update (list_xhr)
            $('div.update').html(result);
            //on vide le formulaire d'ajout au cas où des données y seraient présentes
            $('.addProprioForm').trigger("reset");
        }).fail(function(err) {
            console.warn('fail err', err);
        });
    });

    $('body').on('click', 'button.updateA', function() {
        //on cache le formulaire d'ajout et on affiche celui d'edition
        if (y.style.display === "none") {
            y.style.display = "block";
            x.style.display = "none";
            //on garde en mémoire quel formulaire est affiché
            flag=true;
        }
        // On récupère les données de la ligne et on les injecte dans le formulaire d'édition
        let id = $(this).attr('_id');
        document.getElementById("uid").value = id;
        document.getElementById("unom").value = $("#"+id+" td[data-property=nom]").attr("data-value");
        document.getElementById("ufk_sexe").value = $("#"+id+" td[data-property=sexe]").attr("data-value");
        document.getElementById("ufk_race").value = $("#"+id+" td[data-property=race]").attr("data-value");
        document.getElementById("udn").value = $("#"+id+" td[data-property=dn]").attr("data-value");
        document.getElementById("uchaleur").value = $("#"+id+" td[data-property=chaleur]").attr("data-value");
        document.getElementById("uveto").value = $("#"+id+" td[data-property=veto]").attr("data-value");
        document.getElementById("upuce").value = $("#"+id+" td[data-property=puce]").attr("data-value");
        document.getElementById("ufk_proprio").value = $("#"+id+" td[data-property=proprietaire]").attr("data-value");
    });

    $('.updAnimalForm').submit(function(event) {
        event.preventDefault()
        //on crée notre objet qu'on va passer en requete POST
        data = {
            id:document.getElementById("uid").value,
            nom:document.getElementById("unom").value,
            fk_sexe:document.getElementById("ufk_sexe").value,
            fk_race:document.getElementById("ufk_race").value,
            dn:document.getElementById("udn").value,
            chaleur:document.getElementById("uchaleur").value,
            veto:document.getElementById("uveto").value,
            puce:document.getElementById("upuce").value,
            fk_proprio:document.getElementById("ufk_proprio").value,
        }
        //on effectue la requete POST en lui passant l'id de l'objet et l'objet
        $.post('/animaux/update/'+data.id,data).done(function(result) {
            //on cache le formulaire d'edition et on reaffiche celui d'ajout
            y.style.display = "none";
            x.style.display = "block";
            //on garde en mémoire le formulaire affiché
            flag=false;
            //on update le div.update (list_xhr)
            $('div.update').html(result);
            //on vide le formulaire d'ajout au cas où des données y seraient présentes
            $('.addAnimalForm').trigger("reset");
        }).fail(function(err) {
            console.warn('fail err', err);
        });
    });

});