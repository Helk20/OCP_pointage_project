$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionCircuitHuile.php',
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
        var bac = $("#bac");
        var bacN = $("#bacN");
        var etatGta1 = $("#etatGta1");
        var etatGta2 = $("#etatGta2");
        var etatGta3 = $("#etatGta3");
        var nbrFiltre = $("#nbrFiltre");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionCircuitHuile.php',
                data: { op: 'add', nbrFiltre: nbrFiltre.val(), etatGta3: etatGta3.val(), etatGta2: etatGta2.val(), etatGta1: etatGta1.val(), bacN: bacN.val(), bac: bac.val(), chefEquipe: chefEquipe.val(), operateur: operateur.val(), heure: heure.val(), poste: poste.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    poste.val('');
                    heure.val('');
                    operateur.val('');
                    chefEquipe.val('');
                    bac.val('');
                    bacN.val('');
                    etatGta1.val('');
                    etatGta2.val('');
                    etatGta3.val('');
                    nbrFiltre.val('');
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
            url: 'controleur/gestionCircuitHuile.php',
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
        var bac = $(this).closest('tr').find('td').eq(5).text();
        var bacN = $(this).closest('tr').find('td').eq(6).text();
        var etatGta1 = $(this).closest('tr').find('td').eq(7).text();
        var etatGta2 = $(this).closest('tr').find('td').eq(8).text();
        var etatGta3 = $(this).closest('tr').find('td').eq(9).text();
        var nbrFiltre = $(this).closest('tr').find('td').eq(10).text();

        btn.text('Modifier');
        $("#date").val(date);
        $("#poste").val(poste);
        $("#heure").val(heure);
        $("#operateur").val(operateur);
        $("#chefEquipe").val(chefEquipe);
        $("#bac").val(bac);
        $("#bacN").val(bacN);
        $("#etatGta1").val(etatGta1);
        $("#etatGta2").val(etatGta2);
        $("#etatGta3").val(etatGta3);
        $("#nbrFiltre").val(nbrFiltre);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionCircuitHuile.php',
                    data: { op: 'update', id: $("#id").val(), nbrFiltre: $("#nbrFiltre").val(), etatGta3: $("#etatGta3").val(), etatGta2: $("#etatGta2").val(), etatGta1: $("#etatGta1").val(), bacN: $("#bacN").val(), bac: $("#bac").val(), chefEquipe: $("#chefEquipe").val(), operateur: $("#operateur").val(), heure: $("#heure").val(), poste: $("#poste").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#poste").val('');
                        $("#heure").val('');
                        $("#operateur").val('');
                        $("#chefEquipe").val('');
                        $("#bac").val('');
                        $("#bacN").val('');
                        $("#etatGta1").val('');
                        $("#etatGta2").val('');
                        $("#etatGta3").val('');
                        $("#nbrFiltre").val('');
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
            ligne += '<td>' + data[i].bac + '</td>';
            ligne += '<td>' + data[i].bacN + '</td>';
            ligne += '<td>' + data[i].etatGta1 + '</td>';
            ligne += '<td>' + data[i].etatGta2 + '</td>';
            ligne += '<td>' + data[i].etatGta3 + '</td>';
            ligne += '<td>' + data[i].nbrFiltre + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});