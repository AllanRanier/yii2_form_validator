<?php

use \yii\helpers\Html;
/* @var $this yii\web\View */
?>
<h1>Criando Form Produto</h1>

<?= Html::beginForm() ?>

<?= Html::activeLabel($model, 'Nome'); ?>
<?= Html::activeInput('text', $model, 'nome', ['class' => 'form-control']) ?>

<?= Html::activeLabel($model, 'Preço'); ?>
<?= Html::activeInput('text', $model, 'preco', ['class' => 'form-control']) ?>

<?= Html::activeLabel($model, 'Descrição'); ?>
<?= Html::activeTextarea($model, 'descricao', ['class' => 'form-control', 'rows' => 10]) ?>

<?= Html::activeCheckbox($model, 'status'); ?>

<?= Html::button('Enviar', ['type' => 'submit', 'class' => 'btn btn-primary mt-2']); ?>
<?= Html::endForm() ?>

