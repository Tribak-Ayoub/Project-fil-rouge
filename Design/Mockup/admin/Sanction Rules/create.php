<!DOCTYPE html>
<html lang="en">
<?php
// Define the absolute base path
// define('BASE_PATH', dirname(__DIR__, 2));

// Include the head.php file using the absolute path
// include_once BASE_PATH . '/layouts/head.php';

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
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Définir les règles de sanction</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="define_rule.php" method="POST" class="container ">
                            <div class="form-group">
                                <label for="sanctionTitle">Titre de la sanction</label>
                                <input type="text" class="form-control" id="sanctionTitle" name="sanctionTitle" placeholder="Saisir le titre de la sanction" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrer la description de la règle de sanction"></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="maxAbsences">Nombre maximal d’absences</label>
                                    <input type="number" class="form-control" id="maxAbsences" name="maxAbsences" placeholder="Entrer les absences maximales" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="notificationThreshold">Seuil de notification</label>
                                    <input type="number" class="form-control" id="notificationThreshold" name="notificationThreshold" placeholder="Entrer le seuil de notification" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="penalty">Pénalité</label>
                                <select class="form-control" id="penalty" name="penalty" required>
                                    <option value="" selected disabled>Sélectionnez une pénalité</option>
                                    <option value="Warning">Avertissement</option>
                                    <option value="Suspension">Suspension</option>
                                    <option value="Expulsion">Expulsion</option>
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="sanctionDuration">Durée de la sanction</label>
                                    <input type="number" class="form-control" id="sanctionDuration" name="sanctionDuration" placeholder="Saisir la durée (optionnel)">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="durationUnit">Unité de durée</label>
                                    <select class="form-control" id="durationUnit" name="durationUnit">
                                        <option value="" selected disabled>Sélectionnez l’unité de durée</option>
                                        <option value="Days">Jours</option>
                                        <option value="Weeks">Semaines</option>
                                        <option value="Months">Mois</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label for="effectiveDate">Date d'effet</label>
                                <input type="date" class="form-control" id="effectiveDate" name="effectiveDate" required>
                            </div> -->

                            <div class="form-group">
                                <label for="comments">Commentaires/Notes</label>
                                <textarea class="form-control" id="comments" name="comments" rows="2" placeholder="Entrer des notes supplémentaires (optionnel)"></textarea>
                            </div>

                            <div class="form-row">
                                <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
                                <button type="reset" class="btn btn-secondary mr-2">Réinitialiser</button>
                                <a href="./index.php" class="btn btn-danger">Annuler</a>
                            </div>
                        </form>

                    </div>
                    <!-- /.card-body -->
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