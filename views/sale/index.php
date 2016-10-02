<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Penjualan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-index">
    <p><?= Html::a('Input Penjualan', ['create'], ['class' => 'btn btn-success']) ?></p>
    <div class="box">
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'code',
                    'customer',
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
