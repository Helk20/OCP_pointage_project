$(document).ready(function() {
    $.ajax({
        url: 'controleur/gestionGtaDemarrage.php',
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
        var agent = $("#agent");
        var admVanne = $("#admVanne");
        var admT = $("#admT");
        var admPr = $("#admPr");
        var STVanne = $("#STVanne");
        var STT = $("#STT");
        var STPr = $("#STPr");
        var vitesse = $("#vitesse");
        var TCorpsSup = $("#TCorpsSup");
        var TCorpsInf = $("#TCorpsInf");
        var TfondBp = $("#TfondBp");
        var DilDiff = $("#DilDiff");
        var OuvSppeHpBp = $("#OuvSppeHpBp");
        var videBar = $("#videBar");
        var eauMer = $("#eauMer");
        if ($('#btn').text() == 'Ajouter') {
            $.ajax({
                url: 'controleur/gestionGtaDemarrage.php',
                data: { op: 'add', eauMer: eauMer.val(), videBar: videBar.val(), OuvSppeHpBp: OuvSppeHpBp.val(), DilDiff: DilDiff.val(), TfondBp: TfondBp.val(), TCorpsInf: TCorpsInf.val(), TCorpsSup: TCorpsSup.val(), vitesse: vitesse.val(), STPr: STPr.val(), STT: STT.val(), STVanne: STVanne.val(), admPr: admPr.val(), admT: admT.val(), admVanne: admVanne.val(), agent: agent.val(), heure: heure.val(), poste: poste.val(), date: date.val() },
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                    date.val('');
                    poste.val('');
                    heure.val('');
                    agent.val('');
                    admVanne.val('');
                    admT.val('');
                    admPr.val('');
                    STVanne.val('');
                    STT.val('');
                    STPr.val('');
                    vitesse.val('');
                    TCorpsSup.val('');
                    TCorpsInf.val('');
                    TfondBp.val('');
                    DilDiff.val('');
                    OuvSppeHpBp.val('');
                    videBar.val('');
                    eauMer.val('');
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
            url: 'controleur/gestionGtaDemarrage.php',
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
        var heure = $(this).closest('tr').find('td').eq(0).text();
        var agent = $(this).closest('tr').find('td').eq(2).text();
        var admVanne = $(this).closest('tr').find('td').eq(3).text();
        var admT = $(this).closest('tr').find('td').eq(4).text();
        var admPr = $(this).closest('tr').find('td').eq(5).text();
        var STVanne = $(this).closest('tr').find('td').eq(6).text();
        var STT = $(this).closest('tr').find('td').eq(7).text();
        var STPr = $(this).closest('tr').find('td').eq(8).text();
        var vitesse = $(this).closest('tr').find('td').eq(9).text();
        var TCorpsSup = $(this).closest('tr').find('td').eq(10).text();
        var TCorpsInf = $(this).closest('tr').find('td').eq(11).text();
        var TfondBp = $(this).closest('tr').find('td').eq(12).text();
        var DilDiff = $(this).closest('tr').find('td').eq(13).text();
        var OuvSppeHpBp = $(this).closest('tr').find('td').eq(14).text();
        var videBar = $(this).closest('tr').find('td').eq(15).text();
        var eauMer = $(this).closest('tr').find('td').eq(16).text();
        btn.text('Modifier');
        $("#date").val(date);
        $("#poste").val(poste);
        $("#heure").val(heure);
        $("#agent").val(agent);
        $("#admVanne").val(admVanne);
        $("#admT").val(admT);
        $("#admPr").val(admPr);
        $("#STVanne").val(STVanne);
        $("#STT").val(STT);
        $("#STPr").val(STPr);
        $("#vitesse").val(vitesse);
        $("#TCorpsSup").val(TCorpsSup);
        $("#TCorpsInf").val(TCorpsInf);
        $("#TfondBp").val(TfondBp);
        $("#DilDiff").val(DilDiff);
        $("#OuvSppeHpBp").val(OuvSppeHpBp);
        $("#videBar").val(videBar);
        $("#eauMer").val(eauMer);
        $("#id").val(id);
        btn.click(function() {
            if ($('#btn').text() == 'Modifier') {
                $.ajax({
                    url: 'controleur/gestionGtaDemarrage.php',
                    data: { op: 'update', id: $("#id").val(), eauMer: $("#eauMer").val(), videBar: $("#videBar").val(), OuvSppeHpBp: $("#OuvSppeHpBp").val(), DilDiff: $("#DilDiff").val(), TfondBp: $("#TfondBp").val(), TCorpsInf: $("#TCorpsInf").val(), TCorpsSup: $("#TCorpsSup").val(), vitesse: $("#vitesse").val(), STPr: $("#STPr").val(), STT: $("#STT").val(), STVanne: $("#STVanne").val(), admPr: $("#admPr").val(), admT: $("#admT").val(), admVanne: $("#admVanne").val(), agent: $("#agent").val(), heure: $("#heure").val(), poste: $("#poste").val(), date: $("#date").val() },
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        remplir(data);
                        $("#date").val('');
                        $("#poste").val('');
                        $("#heure").val('');
                        $("#agent").val('');
                        $("#admVanne").val('');
                        $("#admT").val('');
                        $("#admPr").val('');
                        $("#STVanne").val('');
                        $("#STT").val('');
                        $("#STPr").val('');
                        $("#vitesse").val('');
                        $("#TCorpsSup").val('');
                        $("#TCorpsInf").val('');
                        $("#TfondBp").val('');
                        $("#DilDiff").val('');
                        $("#OuvSppeHpBp").val('');
                        $("#videBar").val('');
                        $("#eauMer").val('');
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
            ligne += '<td>' + data[i].agent + '</td>';
            ligne += '<td>' + data[i].admVanne + '</td>';
            ligne += '<td>' + data[i].admT + '</td>';
            ligne += '<td>' + data[i].admPr + '</td>';
            ligne += '<td>' + data[i].STVanne + '</td>';
            ligne += '<td>' + data[i].STT + '</td>';
            ligne += '<td>' + data[i].STPr + '</td>';
            ligne += '<td>' + data[i].vitesse + '</td>';
            ligne += '<td>' + data[i].TCorpsSup + '</td>';
            ligne += '<td>' + data[i].TCorpsInf + '</td>';
            ligne += '<td>' + data[i].TfondBp + '</td>';
            ligne += '<td>' + data[i].DilDiff + '</td>';
            ligne += '<td>' + data[i].OuvSppeHpBp + '</td>';
            ligne += '<td>' + data[i].videBar + '</td>';
            ligne += '<td>' + data[i].eauMer + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }

});