<?php

include 'Calender.php';
$calendrier = new Calendrier();
$calendrier->definirAnnee(2023);
$calendrier->definirMois(01);
$calendrier->definirjour(1);
$calendrier->creer();
?>

<!DOCTYPE html>

<head>
    <title>Calendrier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>
</head>

<body>
    <h3>Calendrier du mois 1</h3>

    <div class="container" id="monthyear">
        <br>
        <div class="card">
            <h3 class="card-header" id="mandyr"></h3>
            <table class="table table-bordered table-responsive-sm" id="calendar">
                <thead>
                    <tr>
                        <?php foreach ($calendrier->afficherJourSemaine() as $NomJour): ?>
                        <th>
                            <?php echo $NomJour; ?>
                        </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody id="calendarBody">
                    <?php foreach ($calendrier->afficherSemaines() as $semaine): ?>
                    <tr>
                        <?php foreach($semaine as $njour): ?>
                        <td>
                            <?php echo $njour ; ?>

                        </td>
                        <?php endforeach ; ?>
                    </tr>
                    <?php endforeach ; ?>
                    </tr>
                </tbody>
        </div>
        </table>
        <div>
            <button class="btnbtn-outline-success col-sm-3" id="pre" value=submit name="pr">Jour précédant</button>
            <button class="btnbtn-outline-success col-sm-3" id="nex">Jour suivant</button>
        </div>
        <br>
        <style>
            #pre {
                float: left;
                background-color: #2986cc;
                color: #FFFFFF;
            }

            #nex {
                float: right;
                background-color: #2986cc;
                color: #FFFFFF;
            }
        </style>
        <script>
            window.onload = function () {

                var all = document.getElementsByTagName("td");
                for (var i = 0; i < all.length; i++) {
                    all[i].onclick = inputClickHandler;
                }
            };

            function inputClickHandler(e) {
                e = e || window.event;
                var tdElm = e.target || e.srcElement;
                if (tdElm.style.backgroundColor == 'rgb(255, 0, 0)') {
                    tdElm.style.backgroundColor = '#fff';
                } else {
                    tdElm.style.backgroundColor = '#f00';
                }
            }

        </script>

</body>

</html>