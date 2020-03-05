<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Responsabilidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responsabilidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorCliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorAgente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorSubAgente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorUniversidade1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valorUniversidade2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataPublicacao')->textInput() ?>

    <?= $form->field($model, 'idFase')->textInput() ?>

    <?= $form->field($model, 'idConta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
