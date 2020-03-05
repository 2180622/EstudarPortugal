<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCliente',
            'nome',
            'apelido',
            'email:email',
            'telefone1',
            //'telefone2',
            //'dataNasc',
            //'numCCid',
            //'numPassaport',
            //'dataValidPP',
            //'paisEmissaoPP',
            //'paisNaturalidade',
            //'morada',
            //'cidade',
            //'poradaResidencia',
            //'passaportPaisEmi',
            //'nomePai',
            //'telefonePai',
            //'emailPai:email',
            //'nomeMae',
            //'telefoneMae',
            //'emailMae:email',
            //'fotografia',
            //'NIF',
            //'IBAN',
            //'nivEstudoAtual',
            //'nomeInstituicaoOrigem',
            //'cidadeInstituicaoOrigem',
            //'obsPessoais:ntext',
            //'obsFinanceiras:ntext',
            //'obsAcademicas:ntext',
            //'dataRegist',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
