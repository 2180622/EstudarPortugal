<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doc Academicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-academico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Doc Academico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDocAcademico',
            'nome',
            'tipo',
            'imagem',
            'pais',
            //'nota',
            //'pontuacao',
            //'dataPublicacao',
            //'verificacao',
            //'idFase',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
