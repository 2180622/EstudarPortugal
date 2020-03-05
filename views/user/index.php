<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idUser',
            'username',
            'tipo',
            'password_hash',
            'password_reset_token',
            //'verification_token',
            //'auth_key',
            //'status',
            //'created_at',
            //'updated_at',
            //'idAdministrador',
            //'idAgente',
            //'idCliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
