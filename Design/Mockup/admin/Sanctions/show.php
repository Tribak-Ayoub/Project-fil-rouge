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
                        <h3 class="card-title">Détails de la sanction</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Nom de l’apprenant:</label>
                            <div class="col-sm-9">Ayoub tribak</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Apprenant ID:</label>
                            <div class="col-sm-9">145</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Group:</label>
                            <div class="col-sm-9">DM 101</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Sanction Titre:</label>
                            <div class="col-sm-9">Late Arrival</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Description:</label>
                            <div class="col-sm-9">Pour arriver en retard de plus de 15 minutes.</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Maximum Absences:</label>
                            <div class="col-sm-9">3</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Seuil de notification:</label>
                            <div class="col-sm-9">2</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Pénalité:</label>
                            <div class="col-sm-9">Avertissement</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Durée de la sanction:</label>
                            <div class="col-sm-9">1 Jour</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Date d'effet:</label>
                            <div class="col-sm-9">2025-01-01</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Expiration Date:</label>
                            <div class="col-sm-9">2025-01-02</div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Statut:</label>
                            <div class="col-sm-9">
                                <span class="badge bg-success p-2">Actif</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 fw-bold">Commentaires/Notes:</label>
                            <div class="col-sm-9">La première infraction sera un avertissement.</div>
                        </div>
                        <div>
                            <form action="">
                                <a href="./index.php" class="btn btn-secondary">Retour</a>
                            </form>
                        </div>
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