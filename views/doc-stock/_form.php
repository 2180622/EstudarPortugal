<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocStock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-stock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Pessoal' => 'Pessoal', 'Academico' => 'Academico', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tipoPessoal')->dropDownList([ 'Passaport' => 'Passaport', 'Cartão Cidadão' => 'Cartão Cidadão', 'Carta Condução' => 'Carta Condução', 'Doc. Oficial' => 'Doc. Oficial', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tipoAcademico')->dropDownList([ 'Exame Universitário' => 'Exame Universitário', 'Exame Nacional' => 'Exame Nacional', 'Diploma' => 'Diploma', 'Certificado' => 'Certificado', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'idFaseStock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
