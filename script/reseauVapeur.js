$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionReseauVapeur.php',
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
        var heure = $("#heure");
        var operateur = $("#operateur");
        var chefEquipe = $("#chefEquipe");
        var prHpNord = $("#prHpNord");
        var tHpNord = $("#tHpNord	");
        var prHpSud = $("#prHpSud");
        var tHpSud = $("#tHpSud");
        var prMpNord = $("#prMpNord");
        var tMpNord = $("#tMpNord");
        var prMpSud = $("#prMpSud");
        var tMpSud = $("#tMpSud");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionReseauVapeur.php',
                data: { op: 'add', tMpSud: tMpSud.val(), prMpSud: prMpSud.val(), tMpNord: tMpNord.val(), prMpNord: prMpNord.val(), tHpSud: tHpSud.val(), prHpSud: prHpSud.val(), tHpNord: tHpNord.val(), prHpNord: prHpNord.val(), chefEquipe: chefEquipe.val(), operateur: operateur.val(), heure: heure.val(), poste: poste.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    poste.val('');
                    heure.val('');
                    operateur.val('');
                    chefEquipe.val('');
                    prHpNord.val();
                    tHpNord.val('');
                    prHpSud.val('');
                    tHpSud.val('');
                    prMpNord.val('');
                    tMpNord.val('');
                    prMpSud.val('');
                    tMpSud.val('');
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
            url: 'controleur/gestionReseauVapeur.php',
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
        var heure = $(this).closest('tr').find('td').eq(2).text();
        var operateur = $(this).closest('tr').find('td').eq(3).text();
        var chefEquipe = $(this).closest('tr').find('td').eq(4).text();
        var prHpNord = $(this).closest('tr').find('td').eq(5).text();
        var tHpNord = $(this).closest('tr').find('td').eq(6).text();
        var prHpSud = $(this).closest('tr').find('td').eq(7).text();
        var tHpSud = $(this).closest('tr').find('td').eq(8).text();
        var prMpNord = $(this).closest('tr').find('td').eq(9).text();
        var tMpNord = $(this).closest('tr').find('td').eq(10).text();
        var prMpSud = $(this).closest('tr').find('td').eq(11).text();
        var tMpSud = $(this).closest('tr').find('td').eq(12).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#poste").val(poste);
        $("#heure").val(heure);
        $("#operateur").val(operateur);
        $("#chefEquipe").val(chefEquipe);
        $("#prHpNord").val(prHpNord);
        $("#tHpNord").val(tHpNord);
        $("#prHpSud").val(prHpSud);
        $("#tHpSud").val(tHpSud);
        $("#prMpNord").val(prMpNord);
        $("#tMpNord").val(tMpNord);
        $("#prMpSud").val(prMpSud);
        $("#tMpSud").val(tMpSud);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionReseauVapeur.php',
                    data: { op: 'update', id: $("#id").val(), tMpSud: $("#tMpSud").val(), prMpSud: $("#prMpSud").val(), tMpNord: $("#tMpNord").val(), prMpNord: $("#prMpNord").val(), tHpSud: $("#tHpSud").val(), prHpSud: $("#prHpSud").val(), tHpNord: $("#tHpNord").val(), prHpNord: $("#prHpNord").val(), chefEquipe: $("#chefEquipe").val(), operateur: $("#operateur").val(), heure: $("#heure").val(), poste: $("#poste").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#poste").val('');
                        $("#heure").val('');
                        $("#operateur").val('');
                        $("#chefEquipe").val('');
                        $("#prHpNord").val('');
                        $("#tHpNord").val('');
                        $("#prHpSud").val('');
                        $("#tHpSud").val('');
                        $("#prMpNord").val('');
                        $("#tMpNord").val('');
                        $("#prMpSud").val('');
                        $("#tMpSud").val('');
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
            ligne += '<td>' + data[i].heure + '</td>';
            ligne += '<td>' + data[i].operateur + '</td>';
            ligne += '<td>' + data[i].chefEquipe + '</td>';
            ligne += '<td>' + data[i].prHpNord + '</td>';
            ligne += '<td>' + data[i].tHpNord + '</td>';
            ligne += '<td>' + data[i].prHpSud + '</td>';
            ligne += '<td>' + data[i].tHpSud + '</td>';
            ligne += '<td>' + data[i].prMpNord + '</td>';
            ligne += '<td>' + data[i].tMpNord + '</td>';
            ligne += '<td>' + data[i].prMpSud + '</td>';
            ligne += '<td>' + data[i].tMpSud + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});