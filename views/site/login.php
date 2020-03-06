<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar Sessão';
?>

<div class="login-form">
  <div id="form">
    <p>Insira os seus dados de autenticação para aceder à aplicação, por favor.</p>

    <br>

      <?php $form = ActiveForm::begin([
        'id' => 'login-form',
      ]); ?>

      <?= $form->field($model, 'username')->textInput([
        'autofocus' => false,
        'placeholder' => 'USERNAME',
        'class' => 'userInput',
      ])->label(false); ?>

      <?= $form->field($model, 'password', [
        'inputOptions' => [
          'class' => 'passInput',
          'placeholder' => 'PASSWORD',
      ]])->passwordInput()->label(false); ?>

     <div class="form-group">
        <?= Html::submitButton('Login', [
          'class' => 'btn btn-primary loginBtn',
          'name' => 'login-button'
        ]); ?>
      </div>

      <?php ActiveForm::end(); ?>
    </div>
</div>
