$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionAnalyseChimique.php',
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
        var operateur = $("#operateur");
        var chefEquipe = $("#chefEquipe");
        var heure = $("#heure");
        var l3 = $("#l3");
        var l4 = $("#l4");
        var l5 = $("#l5");
        var l6 = $("#l6");
        var l7 = $("#l7");
        var l8 = $("#l8");
        var l9 = $("#l9");
        var l10 = $("#l10");
        var l11 = $("#l11");
        var l12 = $("#l12");
        var l13 = $("#l13");
        var l14 = $("#l14");
        var l15 = $("#l15");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionAnalyseChimique.php',
                data: { op: 'add', l15: l15.val(), l14: l14.val(), l13: l13.val(), l12: l12.val(), l11: l11.val(), l10: l10.val(), l9: l9.val(), l8: l8.val(), l7: l7.val(), l6: l6.val(), l5: l5.val(), l4: l4.val(), l3: l3.val(), heure: heure.val(), chefEquipe: chefEquipe.val(), operateur: operateur.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    operateur.val('');
                    chefEquipe.val('');
                    heure.val('');
                    l3.val('');
                    l4.val('');
                    l5.val('');
                    l6.val('');
                    l7.val('');
                    l8.val('');
                    l9.val('');
                    l10.val('');
                    l11.val('');
                    l12.val('');
                    l13.val('');
                    l14.val('');
                    l15.val('');
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
            url: 'controleur/gestionAnalyseChimique.php',
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
        var operateur = $(this).closest('tr').find('td').eq(1).text();
        var chefEquipe = $(this).closest('tr').find('td').eq(2).text();
        var heure = $(this).closest('tr').find('td').eq(3).text();
        var l3 = $(this).closest('tr').find('td').eq(4).text();
        var l4 = $(this).closest('tr').find('td').eq(5).text();
        var l5 = $(this).closest('tr').find('td').eq(6).text();
        var l6 = $(this).closest('tr').find('td').eq(7).text();
        var l7 = $(this).closest('tr').find('td').eq(8).text();
        var l8 = $(this).closest('tr').find('td').eq(9).text();
        var l9 = $(this).closest('tr').find('td').eq(10).text();
        var l10 = $(this).closest('tr').find('td').eq(11).text();
        var l11 = $(this).closest('tr').find('td').eq(12).text();
        var l12 = $(this).closest('tr').find('td').eq(13).text();
        var l13 = $(this).closest('tr').find('td').eq(14).text();
        var l14 = $(this).closest('tr').find('td').eq(15).text();
        var l15 = $(this).closest('tr').find('td').eq(16).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#operateur").val(operateur);
        $("#chefEquipe").val(chefEquipe);
        $("#heure").val(heure);
        $("#l3").val(l3);
        $("#l4").val(l4);
        $("#l5").val(l5);
        $("#l6").val(l6);
        $("#l7").val(l7);
        $("#l8").val(l8);
        $("#l9").val(l9);
        $("#l10").val(l10);
        $("#l11").val(l11);
        $("#l12").val(l12);
        $("#l13").val(l13);
        $("#l14").val(l14);
        $("#l15").val(l15);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionAnalyseChimique.php',
                    data: { op: 'update', id: $("#id").val(), l15: $("#l15").val(), l14: $("#l14").val(), l13: $("#l13").val(), l12: $("#l12").val(), l11: $("#l11").val(), l10: $("#l10").val(), l9: $("#l9").val(), l8: $("#l8").val(), l7: $("#l7").val(), l6: $("#l6").val(), l5: $("#l5").val(), l4: $("#l4").val(), l3: $("#l3").val(), heure: $("#heure").val(), chefEquipe: $("#chefEquipe").val(), operateur: $("#operateur").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#operateur").val('');
                        $("#chefEquipe").val('');
                        $("#heure").val('');
                        $("#l3").val('');
                        $("#l4").val('');
                        $("#l5").val('');
                        $("#l6").val('');
                        $("#l7").val('');
                        $("#l8").val('');
                        $("#l9").val('');
                        $("#l10").val('');
                        $("#l11").val('');
                        $("#l12").val('');
                        $("#l13").val('');
                        $("#l14").val('');
                        $("#l15").val('');
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
            ligne += '<td>' + data[i].operateur + '</td>';
            ligne += '<td>' + data[i].chefEquipe + '</td>';
            ligne += '<td>' + data[i].heure + '</td>';
            ligne += '<td>' + data[i].l3 + '</td>';
            ligne += '<td>' + data[i].l4 + '</td>';
            ligne += '<td>' + data[i].l5 + '</td>';
            ligne += '<td>' + data[i].l6 + '</td>';
            ligne += '<td>' + data[i].l7 + '</td>';
            ligne += '<td>' + data[i].l8 + '</td>';
            ligne += '<td>' + data[i].l9 + '</td>';
            ligne += '<td>' + data[i].l10 + '</td>';
            ligne += '<td>' + data[i].l11 + '</td>';
            ligne += '<td>' + data[i].l12 + '</td>';
            ligne += '<td>' + data[i].l13 + '</td>';
            ligne += '<td>' + data[i].l14 + '</td>';
            ligne += '<td>' + data[i].l15 + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});