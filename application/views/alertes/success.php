

<main class="pt-5 mt-5" role="main">

    <?php
    if ((isset($_SESSION['success'])) OR (isset($_SESSION['error']))) { ?>
        <div class="container mt-2">
            <h6 class="text-dark">
                <?php include_once "application/views/alertes/alert-index.php"; ?>
            </h6>
        </div>
    <?php } ?>
          <div class="text-center text-info">

              <h1 class="display-1 text-success font-title font-weight-bold">404</h1>
              <h3 class="display-4 font-title text-primary font-weight-bold">Page non trouvée</h3>

              <h4>
                  <?php ?>
              </h4>
              <h4>
                  Vous pouvez revenir à <a class="text-danger font-weight-bold" href="javascript:history.back()">la page précédente</a> ou aller à
                  <a class="text-danger font-weight-bold" href="<?= base_url();?>">la page d'accueil</a>.
              </h4>

          </div>

  </main>
