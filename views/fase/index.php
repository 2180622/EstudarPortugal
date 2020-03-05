<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fase-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fase', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idFase',
            'descricao',
            'dataVencimento',
            'updated_at',
            'valorFase',
            //'valorComissaoAgente',
            //'valorComSubAgente',
            //'idProduto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
