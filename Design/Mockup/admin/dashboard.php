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
                        <h3 class="card-title">Statistics</h3>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sanction Categories</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="sanctionsBarChart"></canvas>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Absenteeism Over Time</h3>
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
                    labels: ['Warning', 'Suspension', 'Expulsion'],
                    datasets: [{
                        label: 'Sanctions Applied',
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
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'], // Replace with dynamic data
                    datasets: [{
                        label: 'Absenteeism Rate (%)',
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