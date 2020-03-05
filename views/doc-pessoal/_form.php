<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocPessoal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doc-pessoal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apelido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Passaport' => 'Passaport', 'Cartão Cidadão' => 'Cartão Cidadão', 'Carta Condução' => 'Carta Condução', 'Doc. Oficial' => 'Doc. Oficial', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numDoc')->textInput() ?>

    <?= $form->field($model, 'dataValidade')->textInput() ?>

    <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verificacao')->textInput() ?>

    <?= $form->field($model, 'dataPublicacao')->textInput() ?>

    <?= $form->field($model, 'idFase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
