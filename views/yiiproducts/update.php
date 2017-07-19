<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Yiiproducts */

$this->title = 'Update Yiiproducts: ' . $model->Prodid;
$this->params['breadcrumbs'][] = ['label' => 'Yiiproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Prodid, 'url' => ['view', 'id' => $model->Prodid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yiiproducts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
