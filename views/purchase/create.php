<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Purchase */

$this->title = 'Input Pembelian Baru';
$this->params['breadcrumbs'][] = ['label' => 'Pembelian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modelDetails' => $modelDetails,
    ]) ?>

</div>
