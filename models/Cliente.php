<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cliente".
 *
 * @property int $idCliente
 * @property string $nome
 * @property string $apelido
 * @property string $email
 * @property int $telefone1
 * @property int|null $telefone2
 * @property string $dataNasc
 * @property string $numCCid
 * @property string $numPassaport
 * @property string $dataValidPP
 * @property string $paisEmissaoPP
 * @property string $paisNaturalidade
 * @property string $morada
 * @property string $cidade
 * @property string $poradaResidencia
 * @property string $passaportPaisEmi
 * @property string|null $nomePai
 * @property int|null $telefonePai
 * @property string|null $emailPai
 * @property string|null $nomeMae
 * @property int|null $telefoneMae
 * @property string|null $emailMae
 * @property string $fotografia
 * @property int $NIF
 * @property string $IBAN
 * @property int $nivEstudoAtual
 * @property string $nomeInstituicaoOrigem
 * @property string $cidadeInstituicaoOrigem
 * @property string|null $obsPessoais
 * @property string|null $obsFinanceiras
 * @property string|null $obsAcademicas
 * @property string $dataRegist
 *
 * @property Produto[] $produtos
 * @property User[] $users
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'apelido', 'email', 'telefone1', 'dataNasc', 'numCCid', 'numPassaport', 'dataValidPP', 'paisEmissaoPP', 'paisNaturalidade', 'morada', 'cidade', 'poradaResidencia', 'passaportPaisEmi', 'fotografia', 'NIF', 'IBAN', 'nivEstudoAtual', 'nomeInstituicaoOrigem', 'cidadeInstituicaoOrigem'], 'required'],
            [['telefone1', 'telefone2', 'telefonePai', 'telefoneMae', 'NIF', 'nivEstudoAtual'], 'integer'],
            [['dataNasc', 'dataValidPP', 'dataRegist'], 'safe'],
            [['obsPessoais', 'obsFinanceiras', 'obsAcademicas'], 'string'],
            [['nome', 'apelido', 'email', 'numCCid', 'numPassaport', 'paisEmissaoPP', 'paisNaturalidade', 'morada', 'cidade', 'poradaResidencia', 'passaportPaisEmi', 'nomePai', 'emailPai', 'nomeMae', 'emailMae', 'fotografia', 'IBAN', 'nomeInstituicaoOrigem', 'cidadeInstituicaoOrigem'], 'string', 'max' => 255],
            [['NIF'], 'unique'],
            [['numCCid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCliente' => 'Id Cliente',
            'nome' => 'Nome',
            'apelido' => 'Apelido',
            'email' => 'Email',
            'telefone1' => 'Telefone1',
            'telefone2' => 'Telefone2',
            'dataNasc' => 'Data Nasc',
            'numCCid' => 'Num C Cid',
            'numPassaport' => 'Num Passaport',
            'dataValidPP' => 'Data Valid Pp',
            'paisEmissaoPP' => 'Pais Emissao Pp',
            'paisNaturalidade' => 'Pais Naturalidade',
            'morada' => 'Morada',
            'cidade' => 'Cidade',
            'poradaResidencia' => 'Porada Residencia',
            'passaportPaisEmi' => 'Passaport Pais Emi',
            'nomePai' => 'Nome Pai',
            'telefonePai' => 'Telefone Pai',
            'emailPai' => 'Email Pai',
            'nomeMae' => 'Nome Mae',
            'telefoneMae' => 'Telefone Mae',
            'emailMae' => 'Email Mae',
            'fotografia' => 'Fotografia',
            'NIF' => 'Nif',
            'IBAN' => 'Iban',
            'nivEstudoAtual' => 'Niv Estudo Atual',
            'nomeInstituicaoOrigem' => 'Nome Instituicao Origem',
            'cidadeInstituicaoOrigem' => 'Cidade Instituicao Origem',
            'obsPessoais' => 'Obs Pessoais',
            'obsFinanceiras' => 'Obs Financeiras',
            'obsAcademicas' => 'Obs Academicas',
            'dataRegist' => 'Data Regist',
        ];
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['idCliente' => 'idCliente']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['idCliente' => 'idCliente']);
    }
}
