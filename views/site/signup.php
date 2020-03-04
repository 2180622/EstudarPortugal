<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Criar um admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
    ]);?>

    <?= $form->field($user, 'username')->textInput(['autofocus' => true]) ?>
    <?= $form->field($admin, 'nome')->textInput() ?>
    <?= $form->field($admin, 'apelido')->textInput() ?>
    <?= $form->field($admin, 'email')->textInput() ?>
    <?= $form->field($admin, 'telefone1')->textInput() ?>
    <?= $form->field($admin, 'telefone2')->textInput() ?>
    <?= $form->field($user, 'password')->passwordInput() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>