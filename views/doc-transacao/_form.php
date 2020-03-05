<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocTransacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-transacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorRecebido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataOperacao')->textInput() ?>

    <?= $form->field($model, 'dataRecebido')->textInput() ?>

    <?= $form->field($model, 'verificacao')->textInput() ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idConta')->textInput() ?>

    <?= $form->field($model, 'idFase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
