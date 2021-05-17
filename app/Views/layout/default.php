<!DOCTYPE html>
<html lang="fr">
    <head>
        <?= $this->include('general/head') ?>
        <?= $this->renderSection('head') ?>
    </head>
    <body>
        <div class="container-sm p-0">
            <div class="mx-xl-5 border shadow">
                <div class="bg-dark text-white text-center p-1">
                    <h1><a href="<?= base_url('ArticleController/showList') ?>" class="text-reset text-decoration-none">CodeIgniter 4 Training</a></h1>
                </div>

                <div class="min-vh-100 pt-4 pb-2 px-xs-3 px-sm-2 px-md-2 px-lg-5">
                    <?= $this->renderSection('content') ?>
                </div>

                <footer class="py-4 bg-dark text-white-50 text-center">
                    <small>Copyright &copy; CodeIgniter 4 Training</small>
                </footer>
            </div>
        </div>
    </body>
</html>