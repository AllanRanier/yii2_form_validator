<?php

use \yii\helpers\Html;
/* @var $this yii\web\View */
?>
<h1>Criando Form com HTML Helper</h1>

<?= Html::beginForm() ?>

<?= Html::label('Nome'); ?>
<?= Html::input('text', 'name', 'Allan Ranier', ['class' => 'form-control']); ?>

<?= Html::label('Cidade'); ?>
<?= Html::dropDownList('cidades', '' , [
    1 => 'São Paulo',
    2 => 'Belo Horizonte',
    3 => 'Critiba',
    4 => 'Caruaru'],
    ['prompt' => 'Selecione', 'class'=> 'form-control']
    ); ?>
<?= Html::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary mt-2']); ?>


<?= Html::endForm() ?>

