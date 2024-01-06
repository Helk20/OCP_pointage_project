$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionGta.php',
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
        var tEMer = $("#tEMer");
        var tSMerG = $("#tSMerG");
        var tSMerD = $("#tSMerD");
        var ouvMer1 = $("#ouvMer1");
        var ouvMer2 = $("#ouvMer2");
        var filtreSce = $("#filtreSce");
        var pHuile = $("#pHuile");
        var granitH = $("#granitH");
        var granitB = $("#granitB");
        var tFond = $("#tFond");
        var nivHuile = $("#nivHuile");
        var prVide20AC01 = $("#prVide20AC01");
        var prVide20KC01 = $("#prVide20KC01");
        var ampVide20AC01 = $("#ampVide20AC01");
        var ampVide20KC01 = $("#ampVide20KC01");
        var prAspi20AP01 = $("#prAspi20AP01");
        var prAspi20KP01 = $("#prAspi20KP01");
        var prRefoulement20AP01 = $("#prRefoulement20AP01");
        var prRefoulement20KP01 = $("#prRefoulement20KP01");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionGta.php',
                data: { op: 'add', prRefoulement20KP01: prRefoulement20KP01.val(), prRefoulement20AP01: prRefoulement20AP01.val(), prAspi20KP01: prAspi20KP01.val(), prAspi20AP01: prAspi20AP01.val(), ampVide20KC01: ampVide20KC01.val(), ampVide20AC01: ampVide20AC01.val(), prVide20KC01: prVide20KC01.val(), prVide20AC01: prVide20AC01.val(), nivHuile: nivHuile.val(), tFond: tFond.val(), granitB: granitB.val(), granitH: granitH.val(), pHuile: pHuile.val(), filtreSce: filtreSce.val(), ouvMer2: ouvMer2.val(), ouvMer1: ouvMer1.val(), tSMerD: tSMerD.val(), tSMerG: tSMerG.val(), tEMer: tEMer.val(), chefEquipe: chefEquipe.val(), operateur: operateur.val(), heure: heure.val(), poste: poste.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    poste.val('');
                    heure.val('');
                    operateur.val('');
                    chefEquipe.val('');
                    tEMer.val('');
                    tSMerG.val('');
                    tSMerD.val('');
                    ouvMer1.val('');
                    ouvMer2.val('');
                    filtreSce.val('');
                    pHuile.val('');
                    granitH.val('');
                    granitB.val('');
                    tFond.val('');
                    nivHuile.val('');
                    prVide20AC01.val('');
                    prVide20KC01.val('');
                    ampVide20AC01.val('');
                    ampVide20KC01.val('');
                    prAspi20AP01.val('');
                    prAspi20KP01.val('');
                    prRefoulement20AP01.val('');
                    prRefoulement20KP01.val('');

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
            url: 'controleur/gestionGta.php',
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
        var tEMer = $(this).closest('tr').find('td').eq(5).text();
        var tSMerG = $(this).closest('tr').find('td').eq(6).text();
        var tSMerD = $(this).closest('tr').find('td').eq(7).text();
        var ouvMer1 = $(this).closest('tr').find('td').eq(8).text();
        var ouvMer2 = $(this).closest('tr').find('td').eq(9).text();
        var filtreSce = $(this).closest('tr').find('td').eq(10).text();
        var pHuile = $(this).closest('tr').find('td').eq(11).text();
        var granitH = $(this).closest('tr').find('td').eq(12).text();
        var granitB = $(this).closest('tr').find('td').eq(13).text();
        var tFond = $(this).closest('tr').find('td').eq(14).text();
        var nivHuile = $(this).closest('tr').find('td').eq(15).text();
        var prVide20AC01 = $(this).closest('tr').find('td').eq(16).text();
        var prVide20KC01 = $(this).closest('tr').find('td').eq(17).text();
        var ampVide20AC01 = $(this).closest('tr').find('td').eq(18).text();
        var ampVide20KC01 = $(this).closest('tr').find('td').eq(19).text();
        var prAspi20AP01 = $(this).closest('tr').find('td').eq(20).text();
        var prAspi20KP01 = $(this).closest('tr').find('td').eq(21).text();
        var prRefoulement20AP01 = $(this).closest('tr').find('td').eq(22).text();
        var prRefoulement20KP01 = $(this).closest('tr').find('td').eq(23).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#poste").val(poste);
        $("#heure").val(heure);
        $("#operateur").val(operateur);
        $("#chefEquipe").val(chefEquipe);
        $("#tEMer").val(tEMer);
        $("#tSMerG").val(tSMerG);
        $("#tSMerD").val(tSMerD);
        $("#ouvMer1").val(ouvMer1);
        $("#ouvMer2").val(ouvMer2);
        $("#filtreSce").val(filtreSce);
        $("#pHuile").val(pHuile);
        $("#granitH").val(granitH);
        $("#granitB").val(granitB);
        $("#tFond").val(tFond);
        $("#nivHuile").val(nivHuile);
        $("#prVide20AC01").val(prVide20AC01);
        $("#prVide20KC01").val(prVide20KC01);
        $("#ampVide20AC01").val(ampVide20AC01);
        $("#ampVide20KC01").val(ampVide20KC01);
        $("#prAspi20AP01").val(prAspi20AP01);
        $("#prAspi20KP01").val(prAspi20KP01);
        $("#prRefoulement20AP01").val(prRefoulement20AP01);
        $("#prRefoulement20KP01").val(prRefoulement20KP01);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionGta.php',
                    data: { op: 'update', id: $("#id").val(), prRefoulement20KP01: $("#prRefoulement20KP01").val(), prRefoulement20AP01: $("#prRefoulement20AP01").val(), prAspi20KP01: $("#prAspi20KP01").val(), prAspi20AP01: $("#prAspi20AP01").val(), ampVide20KC01: $("#ampVide20KC01").val(), ampVide20AC01: $("#ampVide20AC01").val(), prVide20KC01: $("#prVide20KC01").val(), prVide20AC01: $("#prVide20AC01").val(), nivHuile: $("#nivHuile").val(), tFond: $("#tFond").val(), granitB: $("#granitB").val(), granitH: $("#granitH").val(), pHuile: $("#pHuile").val(), filtreSce: $("#filtreSce").val(), ouvMer2: $("#ouvMer2").val(), ouvMer1: $("#ouvMer1").val(), tSMerD: $("#tSMerD").val(), tSMerG: $("#tSMerG").val(), tEMer: $("#tEMer").val(), chefEquipe: $("#chefEquipe").val(), operateur: $("#operateur").val(), heure: $("#heure").val(), poste: $("#poste").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#poste").val('');
                        $("#heure").val('');
                        $("#operateur").val('');
                        $("#chefEquipe").val('');
                        $("#tEMer").val('');
                        $("#tSMerG").val('');
                        $("#tSMerD").val('');
                        $("#ouvMer1").val('');
                        $("#ouvMer2").val('');
                        $("#filtreSce").val('');
                        $("#pHuile").val('');
                        $("#granitH").val('');
                        $("#granitB").val('');
                        $("#tFond").val('');
                        $("#nivHuile").val('');
                        $("#prVide20AC01").val('');
                        $("#prVide20KC01").val('');
                        $("#ampVide20AC01").val('');
                        $("#ampVide20KC01").val('');
                        $("#prAspi20AP01").val('');
                        $("#prAspi20KP01").val('');
                        $("#prRefoulement20AP01").val('');
                        $("#prRefoulement20KP01").val('');
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
            ligne += '<td>' + data[i].tEMer + '</td>';
            ligne += '<td>' + data[i].tSMerG + '</td>';
            ligne += '<td>' + data[i].tSMerD + '</td>';
            ligne += '<td>' + data[i].ouvMer1 + '</td>';
            ligne += '<td>' + data[i].ouvMer2 + '</td>';
            ligne += '<td>' + data[i].filtreSce + '</td>';
            ligne += '<td>' + data[i].pHuile + '</td>';
            ligne += '<td>' + data[i].granitH + '</td>';
            ligne += '<td>' + data[i].granitB + '</td>';
            ligne += '<td>' + data[i].tFond + '</td>';
            ligne += '<td>' + data[i].nivHuile + '</td>';
            ligne += '<td>' + data[i].prVide20AC01 + '</td>';
            ligne += '<td>' + data[i].prVide20KC01 + '</td>';
            ligne += '<td>' + data[i].ampVide20AC01 + '</td>';
            ligne += '<td>' + data[i].ampVide20KC01 + '</td>';
            ligne += '<td>' + data[i].prAspi20AP01 + '</td>';
            ligne += '<td>' + data[i].prAspi20KP01 + '</td>';
            ligne += '<td>' + data[i].prRefoulement20AP01 + '</td>';
            ligne += '<td>' + data[i].prRefoulement20KP01 + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});