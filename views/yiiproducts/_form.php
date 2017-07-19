<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yiiproducts */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-lg-4">
</div>
<div class="col-lg-4">
<div class="yiiproducts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Prodimage')->fileInput(['rows' => 6]) ?>

    <?= $form->field($model, 'Prodname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Prodprice')->textInput() ?>

    <?= $form->field($model, 'Proddesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>

