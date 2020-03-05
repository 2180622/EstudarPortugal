<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Agente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apelido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIF')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefoneW')->textInput() ?>

    <?= $form->field($model, 'telefone2')->textInput() ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Agente' => 'Agente', 'Subagente' => 'Subagente', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dataRegist')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
