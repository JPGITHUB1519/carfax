<?php require('layouts/header.view.php') ?>
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Mis Gastos Por Vehiculo</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <canvas id="myChart" width="400" height="200"></canvas>
            <script>
                Chart.defaults.global.defaultFontColor = "#fff";
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    responsive: true,
                    scaleFontColor: "#000",

                    data: {
                        // meses
                        labels: [
                            <?php foreach($gastos as $gasto): ?>
                                <?php 
                                    echo "'$gasto[1]'" . "," 
                                ?>
                            <?php endforeach; ?>
                        ],
                        datasets: [{
                            label: 'Gasto por Vehiculo en $RD',
                            // valores

                            data: [
                                <?php foreach($gastos as $gasto): ?>
                                    <?php echo $gasto[15] . "," ?>
                                <?php endforeach; ?>
                                // 12, 19, 3, 5, 2, 3
                            ],
                            backgroundColor: [
                                <?php foreach($gastos as $gasto): ?>
                                    <?php echo "'rgba(255, 99, 132, 0.2)'"  . ','?>,
                                <?php endforeach; ?>

                            ],
                            borderColor: [
                                <?php foreach($gastos as $gasto): ?>
                                    <?php echo "'rgba(255,99,132,1)'" . ',' ?>
                                <?php endforeach; ?>
  
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            </script>
        </div>
    </div>
<?php require('layouts/footer.view.php') ?>