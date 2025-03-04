<!DOCTYPE html>
<html lang="en">

<?php
include_once '../layouts/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        include_once '../layouts/nav.php';
        include_once '../layouts/aside.php';
        ?>
        <main class="py-4">
            <div class="content-wrapper">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
                    </div>

                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>15</h3>

                                    <p>Sanctions</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53</h3>

                                    <p>Absences injustifiées</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer"> <i class="fas faarrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
        
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>84</h3>

                                    <p>Apprenants</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer"> <i class="fas fa-arow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <!-- <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div> -->
                        <!-- ./col -->
                    </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sanctions par type</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="sanctionsBarChart"></canvas>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Absentéisme au fil du temps</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="absenteeismLineChart"></canvas>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <?php
        include_once '../layouts/footer.php';
        ?>
    </div>

    <?php
    include_once '../layouts/script-link.php';
    ?>

    <script>
        $(document).ready(function() {
            // Sanctions Bar Chart
            var sanctionsBarChart = new Chart($('#sanctionsBarChart'), {
                type: 'bar',
                data: {
                    labels: ['Avertissement', 'Suspension', 'Expulsion'],
                    datasets: [{
                        label: 'Sanctions appliquées',
                        data: [10, 5, 2], // Replace with dynamic data
                        backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });

            // Absenteeism Line Chart
            var absenteeismLineChart = new Chart($('#absenteeismLineChart'), {
                type: 'line',
                data: {
                    labels: ['Semaine 1', 'Semaine 2', 'Semaine 3', 'Semaine 4'], // Replace with dynamic data
                    datasets: [{
                        label: 'Taux d’absentéisme (%)',
                        data: [15, 20, 18, 25], // Replace with dynamic data
                        borderColor: '#00c0ef',
                        backgroundColor: 'rgba(0,192,239,0.3)',
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });
        });
    </script>
</body>

</html>