$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionAnalyseCh.php',
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
        var ch = $("#ch");
        var laboPh = $("#laboPh");
        var laboCd = $("#laboCd");
        var laboTac = $("#laboTac");
        var laboFe = $("#laboFe");
        var laboTh = $("#laboTh");
        var laboO2 = $("#laboO2");
        var laboP2O5 = $("#laboP2O5");
        var laboN2H4 = $("#laboN2H4");
        var laboCi = $("#laboCi");
        var centPhP1 = $("#centPhP1");
        var centPhP2 = $("#centPhP2");
        var centPhP3 = $("#centPhP3");
        var centCd1 = $("#centCd1");
        var centCd2 = $("#centCd2");
        var centCd3 = $("#centCd3");
        var centInjectP1 = $("#centInjectP1");
        var centInjectP2 = $("#centInjectP2");
        var centInjectP3 = $("#centInjectP3");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionAnalyseCh.php',
                data: { op: 'add', date: date.val(), ch: ch.val(), laboPh: laboPh.val(), laboCd: laboCd.val(), laboTac: laboTac.val(), laboFe: laboFe.val(), laboTh: laboTh.val(), laboO2: laboO2.val(), laboP2O5: laboP2O5.val(), laboN2H4: laboN2H4.val(), laboCi: laboCi.val(), centPhP1: centPhP1.val(), centPhP2: centPhP2.val(), centPhP3: centPhP3.val(), centCd1: centCd1.val(), centCd2: centCd2.val(), centCd3: centCd3.val(), centInjectP1: centInjectP1.val(), centInjectP2: centInjectP2.val(), centInjectP3: centInjectP3.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    ch.val('');
                    laboPh.val('');
                    laboCd.val('');
                    laboTac.val('');
                    laboFe.val('');
                    laboTh.val('');
                    laboO2.val('');
                    laboP2O5.val('');
                    laboN2H4.val('');
                    laboCi.val('');
                    centPhP1.val('');
                    centPhP2.val('');
                    centPhP3.val('');
                    centCd1.val('');
                    centCd2.val('');
                    centCd3.val('');
                    centInjectP1.val('');
                    centInjectP2.val('');
                    centInjectP3.val('');
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
            url: 'controleur/gestionAnalyseCh.php',
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
        var ch = $(this).closest('tr').find('td').eq(1).text();
        var laboPh = $(this).closest('tr').find('td').eq(2).text();
        var laboCd = $(this).closest('tr').find('td').eq(3).text();
        var laboTac = $(this).closest('tr').find('td').eq(4).text();
        var laboFe = $(this).closest('tr').find('td').eq(5).text();
        var laboTh = $(this).closest('tr').find('td').eq(6).text();
        var laboO2 = $(this).closest('tr').find('td').eq(7).text();
        var laboP2O5 = $(this).closest('tr').find('td').eq(8).text();
        var laboN2H4 = $(this).closest('tr').find('td').eq(9).text();
        var laboCi = $(this).closest('tr').find('td').eq(10).text();
        var centPhP1 = $(this).closest('tr').find('td').eq(11).text();
        var centPhP2 = $(this).closest('tr').find('td').eq(12).text();
        var centPhP3 = $(this).closest('tr').find('td').eq(13).text();
        var centCd1 = $(this).closest('tr').find('td').eq(14).text();
        var centCd2 = $(this).closest('tr').find('td').eq(15).text();
        var centCd3 = $(this).closest('tr').find('td').eq(16).text();
        var centInjectP1 = $(this).closest('tr').find('td').eq(17).text();
        var centInjectP2 = $(this).closest('tr').find('td').eq(18).text();
        var centInjectP3 = $(this).closest('tr').find('td').eq(19).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#ch").val(ch);
        $("#laboPh").val(laboPh);
        $("#laboCd").val(laboCd);
        $("#laboTac").val(laboTac);
        $("#laboFe").val(laboFe);
        $("#laboTh").val(laboTh);
        $("#laboO2").val(laboO2);
        $("#laboP2O5").val(laboP2O5);
        $("#laboN2H4").val(laboN2H4);
        $("#laboCi").val(laboCi);
        $("#centPhP1").val(centPhP1);
        $("#centPhP2").val(centPhP2);
        $("#centPhP3").val(centPhP3);
        $("#centCd1").val(centCd1);
        $("#centCd2").val(centCd2);
        $("#centCd3").val(centCd3);
        $("#centInjectP1").val(centInjectP1);
        $("#centInjectP2").val(centInjectP2);
        $("#centInjectP3").val(centInjectP3);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionAnalyseCh.php',
                    data: { op: 'update', id: $("#id").val(), centInjectP3: $("#centInjectP3").val(), centInjectP2: $("#centInjectP2").val(), centInjectP1: $("#centInjectP1").val(), centCd3: $("#centCd3").val(), centCd2: $("#centCd2").val(), centCd1: $("#centCd1").val(), centPhP3: $("#centPhP3").val(), centPhP2: $("#centPhP2").val(), centPhP1: $("#centPhP1").val(), laboCi: $("#laboCi").val(), laboN2H4: $("#laboN2H4").val(), laboP2O5: $("#laboP2O5").val(), laboO2: $("#laboO2").val(), laboTh: $("#laboTh").val(), laboFe: $("#laboFe").val(), laboTac: $("#laboTac").val(), laboCd: $("#laboCd").val(), laboPh: $("#laboPh").val(), ch: $("#ch").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#ch").val('');
                        $("#laboPh").val('');
                        $("#laboCd").val('');
                        $("#laboTac").val('');
                        $("#laboFe").val('');
                        $("#laboTh").val('');
                        $("#laboO2").val('');
                        $("#laboP2O5").val('');
                        $("#laboN2H4").val('');
                        $("#laboCi").val('');
                        $("#centPhP1").val('');
                        $("#centPhP2").val('');
                        $("#centPhP3").val('');
                        $("#centCd1").val('');
                        $("#centCd2").val('');
                        $("#centCd3").val('');
                        $("#centInjectP1").val('');
                        $("#centInjectP2").val('');
                        $("#centInjectP3").val('');
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
            ligne += '<td>' + data[i].ch + '</td>';
            ligne += '<td>' + data[i].laboPh + '</td>';
            ligne += '<td>' + data[i].laboCd + '</td>';
            ligne += '<td>' + data[i].laboTac + '</td>';
            ligne += '<td>' + data[i].laboFe + '</td>';
            ligne += '<td>' + data[i].laboTh + '</td>';
            ligne += '<td>' + data[i].laboO2 + '</td>';
            ligne += '<td>' + data[i].laboP2O5 + '</td>';
            ligne += '<td>' + data[i].laboN2H4 + '</td>';
            ligne += '<td>' + data[i].laboCi + '</td>';
            ligne += '<td>' + data[i].centPhP1 + '</td>';
            ligne += '<td>' + data[i].centPhP2 + '</td>';
            ligne += '<td>' + data[i].centPhP3 + '</td>';
            ligne += '<td>' + data[i].centCd1 + '</td>';
            ligne += '<td>' + data[i].centCd2 + '</td>';
            ligne += '<td>' + data[i].centCd3 + '</td>';
            ligne += '<td>' + data[i].centInjectP1 + '</td>';
            ligne += '<td>' + data[i].centInjectP2 + '</td>';
            ligne += '<td>' + data[i].centInjectP3 + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});