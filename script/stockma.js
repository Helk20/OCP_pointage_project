$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionStockMA.php',
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
        var quniteCortrol = $("#quniteCortrol");
        var quniteBioxin = $("#quniteBioxin");
        var quniteNa3PO4 = $("#quniteNa3PO4");
        var quniteNH3 = $("#quniteNH3");
        var stockCortrol = $("#stockCortrol");
        var stockEliminox = $("#stockEliminox");
        var stockBioxin = $("#stockBioxin");
        var stockNH3 = $("#stockNH3");
        var stockNBR = $("#stockNBR");
        var stockNa3PO4 = $("#stockNa3PO4");
        var combustileGO = $("#combustileGO");
        var combustileFO = $("#combustileFO");
        var injectionChaud1 = $("#injectionChaud1");
        var injectionChaud2 = $("#injectionChaud2");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionStockMA.php',
                data: {
                    op: 'add',
                    date: date.val(),
                    poste: poste.val(),
                    operateur: operateur.val(),
                    quniteCortrol: quniteCortrol.val(),
                    quniteBioxin: quniteBioxin.val(),
                    quniteNa3PO4: quniteNa3PO4.val(),
                    quniteNH3: quniteNH3.val(),
                    stockCortrol: stockCortrol.val(),
                    stockEliminox: stockEliminox.val(),
                    stockBioxin: stockBioxin.val(),
                    stockNH3: stockNH3.val(),
                    stockNBR: stockNBR.val(),
                    stockNa3PO4: stockNa3PO4.val(),
                    combustileGO: combustileGO.val(),
                    combustileFO: combustileFO.val(),
                    injectionChaud1: injectionChaud1.val(),
                    injectionChaud2: injectionChaud2.val()
                },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    poste.val('');
                    operateur.val('');
                    quniteCortrol.val('');
                    quniteBioxin.val('');
                    quniteNa3PO4.val('');
                    quniteNH3.val('');
                    stockCortrol.val('');
                    stockEliminox.val('');
                    stockBioxin.val('');
                    stockNH3.val('');
                    stockNBR.val('');
                    stockNa3PO4.val('');
                    combustileGO.val('');
                    combustileFO.val('');
                    injectionChaud1.val('');
                    injectionChaud2.val('');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                },
            });
        }

    });

    $(document).on('click', '.supprimer', function() {
        var id = $(this).closest('tr').find('th').text();
        $.ajax({
            url: 'controleur/gestionStockMA.php',
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
        var operateur = $(this).closest('tr').find('td').eq(2).text();
        var quniteCortrol = $(this).closest('tr').find('td').eq(3).text();
        var quniteBioxin = $(this).closest('tr').find('td').eq(4).text();
        var quniteNa3PO4 = $(this).closest('tr').find('td').eq(5).text();
        var quniteNH3 = $(this).closest('tr').find('td').eq(6).text();
        var stockCortrol = $(this).closest('tr').find('td').eq(7).text();
        var stockEliminox = $(this).closest('tr').find('td').eq(8).text();
        var stockBioxin = $(this).closest('tr').find('td').eq(9).text();
        var stockNH3 = $(this).closest('tr').find('td').eq(10).text();
        var stockNBR = $(this).closest('tr').find('td').eq(11).text();
        var stockNa3PO4 = $(this).closest('tr').find('td').eq(12).text();
        var combustileGO = $(this).closest('tr').find('td').eq(13).text();
        var combustileFO = $(this).closest('tr').find('td').eq(14).text();
        var injectionChaud1 = $(this).closest('tr').find('td').eq(15).text();
        var injectionChaud2 = $(this).closest('tr').find('td').eq(16).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#poste").val(poste);
        $("#operateur").val(operateur);
        $("#quniteCortrol").val(quniteCortrol);
        $("#quniteBioxin").val(quniteBioxin);
        $("#quniteNa3PO4").val(quniteNa3PO4);
        $("#quniteNH3").val(quniteNH3);
        $("#stockCortrol").val(stockCortrol);
        $("#stockEliminox").val(stockEliminox);
        $("#stockBioxin").val(stockBioxin);
        $("#stockNH3").val(stockNH3);
        $("#stockNBR").val(stockNBR);
        $("#stockNa3PO4").val(stockNa3PO4);
        $("#combustileGO").val(combustileGO);
        $("#combustileFO").val(combustileFO);
        $("#injectionChaud1").val(injectionChaud1);
        $("#injectionChaud2").val(injectionChaud2);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionStockMA.php',
                    data: {
                        op: 'update',
                        id: $("#id").val(),
                        injectionChaud2: $("#injectionChaud2").val(),
                        injectionChaud1: $("#injectionChaud1").val(),
                        combustileFO: $("#combustileFO").val(),
                        combustileGO: $("#combustileGO").val(),
                        stockNa3PO4: $("#stockNa3PO4").val(),
                        stockNBR: $("#stockNBR").val(),
                        stockNH3: $("#stockNH3").val(),
                        stockBioxin: $("#stockBioxin").val(),
                        stockEliminox: $("#stockEliminox").val(),
                        stockCortrol: $("#stockCortrol").val(),
                        quniteNH3: $("#quniteNH3").val(),
                        quniteNa3PO4: $("#quniteNa3PO4").val(),
                        quniteBioxin: $("#quniteBioxin").val(),
                        quniteCortrol: $("#quniteCortrol").val(),
                        operateur: $("#operateur").val(),
                        poste: $("#poste").val(),
                        date: $("#date").val()
                    },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#poste").val('');
                        $("#operateur").val('');
                        $("#quniteCortrol").val('');
                        $("#quniteBioxin").val('');
                        $("#quniteNa3PO4").val('');
                        $("#quniteNH3").val('');
                        $("#stockCortrol").val('');
                        $("#stockEliminox").val('');
                        $("#stockBioxin").val('');
                        $("#stockNH3").val('');
                        $("#stockNBR").val('');
                        $("#stockNa3PO4").val('');
                        $("#combustileGO").val('');
                        $("#combustileFO").val('');
                        $("#injectionChaud1").val('');
                        $("#injectionChaud2").val('');
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
            ligne += '<td>' + data[i].quniteCortrol + '</td>';
            ligne += '<td>' + data[i].quniteBioxin + '</td>';
            ligne += '<td>' + data[i].quniteNa3PO4 + '</td>';
            ligne += '<td>' + data[i].quniteNH3 + '</td>';
            ligne += '<td>' + data[i].stockCortrol + '</td>';
            ligne += '<td>' + data[i].stockEliminox + '</td>';
            ligne += '<td>' + data[i].stockBioxin + '</td>';
            ligne += '<td>' + data[i].stockNH3 + '</td>';
            ligne += '<td>' + data[i].stockNBR + '</td>';
            ligne += '<td>' + data[i].stockNa3PO4 + '</td>';
            ligne += '<td>' + data[i].combustileGO + '</td>';
            ligne += '<td>' + data[i].combustileFO + '</td>';
            ligne += '<td>' + data[i].injectionChaud1 + '</td>';
            ligne += '<td>' + data[i].injectionChaud2 + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});