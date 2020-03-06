<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo')->dropDownList([ 'Licenciatura' => 'Licenciatura', 'Mestrado' => 'Mestrado', 'Doutoramento' => 'Doutoramento', 'Curso de Verão' => 'Curso de Verão', 'Estágio Profissional' => 'Estágio Profissional', 'Transferência de Curso' => 'Transferência de Curso', 'Curso Indiomas' => 'Curso Indiomas', 'Erasmus' => 'Erasmus', 'Pré-Universitário' => 'Pré-Universitário', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'anoAcademico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorTotal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorTotalAgente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorTotalSubAgente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataCriacao')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <?= $form->field($model, 'idAgente')->textInput() ?>

    <?= $form->field($model, 'idSubAgente')->textInput() ?>

    <?= $form->field($model, 'idCliente')->textInput() ?>

    <?= $form->field($model, 'idUniversidade1')->textInput() ?>

    <?= $form->field($model, 'idUniversidade2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
