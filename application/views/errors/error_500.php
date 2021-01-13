

    <?php
    if ((isset($_SESSION['success'])) OR (isset($_SESSION['error']))) { ?>
        <div class="container mt-2">
            <h6 class="text-dark">
                <?php include_once "application/views/alertes/alert-index.php"; ?>
            </h6>
        </div>
    <?php } ?>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="content-error">
                <h1 class="display-1 text-danger font-title font-weight-bold">ERROR <span class="counter"> 500</span></h1>
                <h3 class="display-4 font-title text-danger font-weight-bold">Erreur Serveur.
                    Une erreur s'est produite au niveau du serveur. Nous vous prions de nous excuser pour ce desagrement.
                    Veuillez reessayer plus tard. Si le probleme persiste, <a href="">signaler-le</a>
                </h3>
                <p>Sorry, the server encountered something unexpected that didn't allow it to complete the request. We apologize.</p>

                <h4>
                    Vous pouvez revenir à <a class="text-danger font-weight-bold" href="javascript:history.back()">la page précédente</a>
                    ou aller à
                    <a class="text-danger font-weight-bold" href="<?= base_url();?>">la page d'accueil</a>.
                </h4>
            </div>
        </div>
    </div>