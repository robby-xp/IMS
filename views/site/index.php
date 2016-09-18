<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Inventory Management System';
$this->params['breadcrumbs'][] = 'Main Menu';
?>
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <a href="<?= Url::toRoute('/item/create') ?>">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>Barang</h3>
          <p>Input Barang</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-gift"></i>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-xs-6">
    <a href="<?= Url::toRoute('/purchase/create') ?>">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>Pembelian</h3>
          <p>Input Pembelian</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-import"></i>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-3 col-xs-6">
    <a href="<?= Url::toRoute('/sale/create') ?>">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>Penjualan</h3>
          <p>Input Penjualan</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-export"></i>
        </div>
      </div>
    </a>
  </div>
</div>
