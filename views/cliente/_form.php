<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apelido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone1')->textInput() ?>

    <?= $form->field($model, 'telefone2')->textInput() ?>

    <?= $form->field($model, 'dataNasc')->textInput() ?>

    <?= $form->field($model, 'numCCid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numPassaport')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataValidPP')->textInput() ?>

    <?= $form->field($model, 'paisEmissaoPP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paisNaturalidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poradaResidencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passaportPaisEmi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomePai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefonePai')->textInput() ?>

    <?= $form->field($model, 'emailPai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeMae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefoneMae')->textInput() ?>

    <?= $form->field($model, 'emailMae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fotografia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIF')->textInput() ?>

    <?= $form->field($model, 'IBAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivEstudoAtual')->textInput() ?>

    <?= $form->field($model, 'nomeInstituicaoOrigem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidadeInstituicaoOrigem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obsPessoais')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'obsFinanceiras')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'obsAcademicas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dataRegist')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
