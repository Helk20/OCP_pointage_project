$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionFonction.php',
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
        var code = $("#code");
        var nom = $("#nom");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionFonction.php',
                data: { op: 'add', nom: nom.val(), code: code.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    code.val('');
                    nom.val('');
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
            url: 'controleur/gestionFonction.php',
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
        var code = $(this).closest('tr').find('td').eq(0).text();
        var nom = $(this).closest('tr').find('td').eq(1).text();
        btn.text('Modifier');
        $("#code").val(code);
        $("#nom").val(nom);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionFonction.php',
                    data: { op: 'update', id: $("#id").val(), nom: $("#nom").val(), code: $("#code").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#code").val('');
                        $("#nom").val('');
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
            ligne += '<td>' + data[i].code + '</td>';
            ligne += '<td>' + data[i].nom + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});