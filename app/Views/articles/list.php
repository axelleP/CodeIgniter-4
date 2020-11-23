<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<a href="<?= site_url('homeController/addArticle') ?>" class="btn btn-primary">Ajouter un article</a>

<div class="row row-cols-1 row-cols-md-3 my-5">
    <?php
    foreach ($articles as $article) {
        ?>
        <div class="col mb-4">
            <div class="card h-100">
                <?=
                img(['src' => 'img/image1.png',
                    'alt' => 'alt test',
                    'class' => 'card-img-top img-thumbnail img-fluid']);
                ?>
                <div class="card-body">
                    <h5 class="card-title"><?= $article->a_nom; ?></h5>
                    <p class="card-text"><?= $article->a_description; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?= $this->endSection() ?>