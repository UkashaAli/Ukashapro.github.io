<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Yiiproducts */

$this->title = 'Create Yiiproducts';
$this->params['breadcrumbs'][] = ['label' => 'Yiiproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yiiproducts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
