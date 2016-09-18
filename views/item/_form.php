<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="box box-primary">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    <div class="box-body">
        <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'unit')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'quantity')->textInput() ?>

        <?php //$form->field($model, 'stock')->textInput() ?>

        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

        <?php //$form->field($model, 'created_at')->textInput() ?>

        <?php //$form->field($model, 'created_by')->textInput() ?>

        <?php //$form->field($model, 'updated_at')->textInput() ?>

        <?php //$form->field($model, 'updated_by')->textInput() ?>
    </div>

    <div class="box-footer text-center">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
