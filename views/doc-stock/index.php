<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doc Stocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-stock-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Doc Stock', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDocStock',
            'tipo',
            'tipoPessoal',
            'tipoAcademico',
            'idFaseStock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
