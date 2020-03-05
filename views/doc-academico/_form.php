<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcademico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-academico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Exame Universitário' => 'Exame Universitário', 'Exame Nacional' => 'Exame Nacional', 'Diploma' => 'Diploma', 'Certificado' => 'Certificado', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pontuacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataPublicacao')->textInput() ?>

    <?= $form->field($model, 'verificacao')->textInput() ?>

    <?= $form->field($model, 'idFase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
