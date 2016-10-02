<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PurchaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Pembelian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-index">
    <p><?= Html::a('Input Pembelian', ['create'], ['class' => 'btn btn-success']) ?></p>
    <div class="box">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'code',
                    'supplier',
                    'date',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'visibleButtons' => ['view' => false]
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
