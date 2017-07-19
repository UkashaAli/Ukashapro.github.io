<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yiiproductssearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yiiproducts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Prodid') ?>

    <?= $form->field($model, 'Category') ?>

    <?= $form->field($model, 'Brand') ?>

    <?= $form->field($model, 'Prodimage') ?>

    <?= $form->field($model, 'Prodname') ?>

    <?php // echo $form->field($model, 'Prodprice') ?>

    <?php // echo $form->field($model, 'Proddesc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
