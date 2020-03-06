<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fase Stocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fase-stock-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Fase Stock', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idFaseStock',
            'descricao',
            'idProdutoStock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
