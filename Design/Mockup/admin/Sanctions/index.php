<!DOCTYPE html>
<html lang="en">

<?php
include_once '../../layouts/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?php
        include_once '../../layouts/nav.php';
        include_once '../../layouts/aside.php';
        ?>
        <main class="py-4">
            <div class="content-wrapper">
            <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Gérer les sanctions</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row mb-3 ">
                            <div class="col-6">
                                <form action="">
                                    <button class="btn btn-primary" type="button">Vérifier les sanctions</button>
                                </form>
                            </div>
                            <div class="row col-6 justify-content-end">
                                <!-- Filter Column -->
                                <div class="col-md-6">
                                    <form class="form-inline">
                                        <div class="input-group input-group-sm w-100">
                                            <!-- Filter Dropdown -->
                                            <select name="filter" id="filter" class="form-control custom-select">
                                                <option value="" style="color: #ced4da;">Filtre de pénalité</option>
                                                <option value="suspension">Suspension</option>
                                                <option value="warning">Avertissement</option>
                                                <option value="expulsion">Expulsion</option>
                                            </select>
                                            <!-- Filter Button -->
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark" type="submit">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Search Column -->
                                <div class="col-md-6">
                                    <form class="form-inline">
                                        <div class="input-group input-group-sm w-100">
                                            <!-- Search Input -->
                                            <input class="form-control" type="search" placeholder="Search by learner" aria-label="Search">
                                            <!-- Search Button -->
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark" type="submit">
                                                    <i class="fas fa-search"></i> Recherche
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nom de l’apprenant</th>
                                    <th>pénalité</th>
                                    <th>Date</th>
                                    <th>statut</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Ayoub tribak</td>
                                    <td><span class="badge badge-danger p-2">Suspension</span></td>
                                    <td>05/01/2025 <i class="fas fa-long-arrow-alt-right"></i> 09/01/2025</td>
                                    <td><span class="badge bg-primary p-2">Expiré</span></td>
                                    <td class="text-center">
                                        <a href="./show.php"><i class="far fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Ayoub tribak</td>
                                    <td><span class="badge badge-warning p-2">Avertissement</span></td>
                                    <td>05/01/2025 <i class="fas fa-long-arrow-alt-right"></i> 05/01/2025</td>
                                    <td><span class="badge bg-primary p-2">Expiré</span></td>
                                    <td class="text-center">
                                        <a href="./show.php"><i class="far fa-eye"></i></a>
                                    </td>                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Ayoub tribak</td>
                                    <td><span class="badge badge-dark p-2">Expulsion</span></td>
                                    <td>05/01/2025</td>
                                    <td><span class="badge bg-success p-2">Actif</span></td>
                                    <td class="text-center">
                                        <a href="./show.php"><i class="far fa-eye"></i></a>
                                    </td>                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
        </main>

        <?php
        include_once '../../layouts/footer.php';
        ?>
    </div>
    <?php
    include_once '../../layouts/script-link.php';
    ?>
</body>

</html>