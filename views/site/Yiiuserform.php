<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Yiiusers */
/* @var $form ActiveForm */
?>
</br>
<div class="col-lg-4">
</div>
<div class="col-lg-4">
<div class="Yiiuserform">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'alternateemail') ?>
        <?= $form->field($model, 'authkey') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary' , 'style'=>'margin-left:135px;']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- Yiiuserform -->
</div>