$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionRapportSDM.php',
        data: { op: '' },
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
            remplir(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
        }
    });

    $('#btn').click(function() {
        var date = $("#date");
        var poste = $("#poste");
        var operateur = $("#operateur");
        var equipement = $("#equipement");
        var activite = $("#activite");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionRapportSDM.php',
                data: { op: 'add', activite: activite.val(), equipement: equipement.val(), operateur: operateur.val(), poste: poste.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    poste.val('');
                    operateur.val('');
                    equipement.val('');
                    activite.val('');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                }
            });
        }

    });

    $(document).on('click', '.supprimer', function() {
        var id = $(this).closest('tr').find('th').text();
        $.ajax({
            url: 'controleur/gestionRapportSDM.php',
            data: { op: 'delete', id: id },
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
                remplir(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });
    });

    $(document).on('click', '.modifier', function() {
        var btn = $('#btn');
        var id = $(this).closest('tr').find('th').text();
        var date = $(this).closest('tr').find('td').eq(0).text();
        var poste = $(this).closest('tr').find('td').eq(1).text();
        var operateur = $(this).closest('tr').find('td').eq(3).text();
        var equipement = $(this).closest('tr').find('td').eq(2).text();
        var activite = $(this).closest('tr').find('td').eq(4).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#poste").val(poste);
        $("#operateur").val(operateur);
        $("#equipement").val(equipement);
        $("#activite").val(activite);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionRapportSDM.php',
                    data: { op: 'update', id: $("#id").val(), activite: $("#activite").val(), equipement: $("#equipement").val(), operateur: $("#operateur").val(), poste: $("#poste").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#poste").val('');
                        $("#operateur").val('');
                        $("#equipement").val('');
                        $("#activite").val('');
                        btn.text('Ajouter');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus);
                    }
                });
            }
        });
    });

    function remplir(data) {
        var contenu = $('#table-content');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><th scope="row">' + data[i].id + '</th>';
            ligne += '<td>' + data[i].date + '</td>';
            ligne += '<td>' + data[i].poste + '</td>';
            ligne += '<td>' + data[i].operateur + '</td>';
            ligne += '<td>' + data[i].equipement + '</td>';
            ligne += '<td>' + data[i].activite + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});