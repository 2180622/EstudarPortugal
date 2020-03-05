<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar Sessão';
?>

<div class="login-form">
  <div id="form">
    <p>Insira os seus dados de autenticação para aceder à aplicação, por favor.</p>
      <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
      ]); ?>

      <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

      <?= $form->field($model, 'password')->passwordInput() ?>

      <!-- <?= $form->field($model, 'rememberMe')->checkbox() ?> -->

      <div class="form-group">
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
      </div>

      <?php ActiveForm::end(); ?>
    </div>
</div>
