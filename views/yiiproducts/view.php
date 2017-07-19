<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Yiiproducts */

$this->title = $model->Prodid;
$this->params['breadcrumbs'][] = ['label' => 'Yiiproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yiiproducts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Prodid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Prodid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Prodid',
            'Category',
            'Brand',
            'Prodimage:ntext',
            'Prodname',
            'Prodprice',
            'Proddesc',
			[
			 'attribute'=>'Prodimage',
			 'value'=>'http://localhost:8080/yii/basic/web/uploads/'. $model->Prodimage,
			 'format'=>['image',['width'=>'100', 'height'=>'100']],
			]
        ],
    ]) ?>

</div>
