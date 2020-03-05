<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Universidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="universidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIF')->textInput() ?>

    <?= $form->field($model, 'IBAN')->textInput() ?>

    <?= $form->field($model, 'obsContactos')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'obsCursos')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'obsCandidaturas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
