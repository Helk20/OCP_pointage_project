$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionIp16.php',
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
        var chef = $("#chef");
        var hr = $("#hr");
        var amp = $("#amp");
        var pAspi = $("#pAspi");
        var pRefou = $("#pRefou");
        var pFil = $("#pFil");
        var nivH = $("#nivH");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionIp16.php',
                data: { op: 'add', nivH: nivH.val(), pFil: pFil.val(), pRefou: pRefou.val(), pAspi: pAspi.val(), amp: amp.val(), hr: hr.val(), chef: chef.val(), operateur: operateur.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    operateur.val('');
                    chef.val('');
                    hr.val('');
                    amp.val('');
                    pAspi.val('');
                    pRefou.val('');
                    pFil.val('');
                    nivH.val('');
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
            url: 'controleur/gestionIp16.php',
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
        var chef = $(this).closest('tr').find('td').eq(2).text();
        var hr = $(this).closest('tr').find('td').eq(3).text();
        var amp = $(this).closest('tr').find('td').eq(4).text();
        var pAspi = $(this).closest('tr').find('td').eq(5).text();
        var pRefou = $(this).closest('tr').find('td').eq(6).text();
        var pFil = $(this).closest('tr').find('td').eq(7).text();
        var nivH = $(this).closest('tr').find('td').eq(8).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#operateur").val(operateur);
        $("#chef").val(chef);
        $("#hr").val(hr);
        $("#amp").val(amp);
        $("#pAspi").val(pAspi);
        $("#pRefou").val(pRefou);
        $("#pFil").val(pFil);
        $("#nivH").val(nivH);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionIp16.php',
                    data: { op: 'update', id: $("#id").val(), nivH: $("#nivH").val(), pFil: $("#pFil").val(), pRefou: $("#pRefou").val(), pAspi: $("#pAspi").val(), amp: $("#amp").val(), hr: $("#hr").val(), chef: $("#chef").val(), operateur: $("#operateur").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#operateur").val('');
                        $("#chef").val('');
                        $("#hr").val('');
                        $("#amp").val('');
                        $("#pAspi").val('');
                        $("#pRefou").val('');
                        $("#pFil").val('');
                        $("#nivH").val('');
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
            ligne += '<td>' + data[i].chef + '</td>';
            ligne += '<td>' + data[i].hr + '</td>';
            ligne += '<td>' + data[i].amp + '</td>';
            ligne += '<td>' + data[i].pAspi + '</td>';
            ligne += '<td>' + data[i].pRefou + '</td>';
            ligne += '<td>' + data[i].pFil + '</td>';
            ligne += '<td>' + data[i].nivH + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});