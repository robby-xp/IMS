<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Ubah Password</h3>
    </div>
    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
        <div class="box-body">
            <?= $form->field($model, 'oldPassword')->passwordInput()->label('Password Lama') ?>
            <?= $form->field($model, 'newPassword')->passwordInput()->label('Password Baru') ?>
        </div>
        <div class="box-footer text-center">
            <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-default']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div>
