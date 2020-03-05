<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fase-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataVencimento')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'valorFase')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorComissaoAgente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorComSubAgente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idProduto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
