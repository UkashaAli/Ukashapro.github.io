<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yiiusers */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-lg-4">
</div>

<div class="col-lg-4" style="background-color:LightSteelBlue; padding-top:30px; border-radius:30px; border-style:solid; border-color:lightblue;">
<div class="yiiusers-form" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternateemail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'authkey')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary' ,'style'=>'margin-left:135px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
