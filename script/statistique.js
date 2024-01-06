$(document).ready(function() {
    function getCountFrom(url, i) {
        $.ajax({
            url: url,
            data: { op: '' },
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
                $('h2[class="number"]').eq(i).text(data.length);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('h2[class="number"]').eq(i).text('...');
            }
        });
    }
    getCountFrom('controleur/gestionEmploye.php', 0);
    getCountFrom('controleur/gestionPointage.php', 1);
    getCountFrom('controleur/gestionProbExploitation.php', 2);
    getCountFrom('controleur/gestionRapportSDM.php', 3);
    getCountFrom('controleur/gestionRapportSDP.php', 4);
});