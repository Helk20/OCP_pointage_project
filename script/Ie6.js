$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionIe6.php',
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
        var etCond = $("#etCond");
        var stCond = $("#stCond");
        var etMer = $("#etMer");
        var stMer = $("#stMer");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionIe6.php',
                data: { op: 'add', stMer: stMer.val(), etMer: etMer.val(), stCond: stCond.val(), etCond: etCond.val(), hr: hr.val(), chef: chef.val(), operateur: operateur.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    operateur.val('');
                    chef.val('');
                    hr.val('');
                    etCond.val('');
                    stCond.val('');
                    etMer.val('');
                    stMer.val('');
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
            url: 'controleur/gestionIe6.php',
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
        var etCond = $(this).closest('tr').find('td').eq(4).text();
        var stCond = $(this).closest('tr').find('td').eq(5).text();
        var etMer = $(this).closest('tr').find('td').eq(6).text();
        var stMer = $(this).closest('tr').find('td').eq(7).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#operateur").val(operateur);
        $("#chef").val(chef);
        $("#hr").val(hr);
        $("#etCond").val(etCond);
        $("#stCond").val(stCond);
        $("#etMer").val(etMer);
        $("#stMer").val(stMer);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionIe6.php',
                    data: { op: 'update', id: $("#id").val(), stMer: $("#stMer").val(), etMer: $("#etMer").val(), stCond: $("#stCond").val(), etCond: $("#etCond").val(), hr: $("#hr").val(), chef: $("#chef").val(), operateur: $("#operateur").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#operateur").val('');
                        $("#chef").val('');
                        $("#hr").val('');
                        $("#etCond").val('');
                        $("#stCond").val('');
                        $("#etMer").val('');
                        $("#stMer").val('');
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
            ligne += '<td>' + data[i].etCond + '</td>';
            ligne += '<td>' + data[i].stCond + '</td>';
            ligne += '<td>' + data[i].etMer + '</td>';
            ligne += '<td>' + data[i].stMer + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});