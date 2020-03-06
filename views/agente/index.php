<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Agente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAgente',
            'nome',
            'apelido',
            'email:email',
            'dataNasc',
            //'fotografia',
            //'morada',
            //'pais',
            //'NIF',
            //'telefoneW',
            //'telefone2',
            //'tipo',
            //'dataRegist',
            //'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
