<!DOCTYPE html>
<html lang="fr">
    <head>
        <?= $this->include('general/head') ?>
        <?= $this->renderSection('head') ?>
    </head>
    <body>
        <div class="container-sm p-0 bg-dark text-white">
            <?= $this->renderSection('content') ?>
            <footer>
                <?= $this->renderSection('footer') ?>
            </footer>
        </div>
    </body>
</html>