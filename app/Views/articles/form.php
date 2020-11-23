<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<h2 class="mb-4"><u class="h3">Ajouter un article :</u></h2>

<?php
echo form_open('homeController/addArticle');

echo form_label('Nom', 'a_nom');
echo form_input('a_nom', (!empty($article->a_nom)) ? $article->a_nom : '', 'class="form-control"');
if (isset($errors['a_nom'])) {
    echo '<div class="error-message mb-1" style="color:red;">' . $errors['a_nom'] . '</div>';
}

echo form_label('Description', 'a_description');
echo form_textarea('a_description', $article->a_description, 'class="form-control"');
if (isset($errors['a_description'])) {
    echo '<div class="error-message mb-1" style="color:red;">' . $errors['a_description'] . '</div>';
}

echo form_label('Prix', 'a_prix');
echo form_input('a_prix', $article->a_prix, 'step="0.01" class="form-control"', 'number');
if (isset($errors['a_prix'])) {
    echo '<div class="error-message mb-1" style="color:red;">' . $errors['a_prix'] . '</div>';
}

echo form_label('Quantité', 'a_quantite');
echo form_input('a_quantite', $article->a_quantite, 'class="form-control"', 'number');
if (isset($errors['a_quantite'])) {
    echo '<div class="error-message mb-1" style="color:red;">' . $errors['a_quantite'] . '</div>';
}

echo '<br/>';
echo form_submit('btnAddArticle', 'Ajouter', 'class="btn btn-primary"');
echo form_submit('btnAnnuler', 'Annuler', 'class="btn btn-secondary"');
?>

<?= $this->endSection() ?>