<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Produto".
 *
 * @property int $idProduto
 * @property string $descricao
 * @property string $tipo
 * @property string $anoAcademico
 * @property float $valorTotal
 * @property float $valorTotalAgente
 * @property float|null $valorTotalSubAgente
 * @property string $dataCriacao
 * @property int $deleted_at
 * @property int $idAgente
 * @property int|null $idSubAgente
 * @property int $idCliente
 * @property int $idUniversidade1
 * @property int|null $idUniversidade2
 *
 * @property Fase[] $fases
 * @property Agente $idAgente0
 * @property Cliente $idCliente0
 * @property Universidade $idUniversidade10
 * @property Agente $idSubAgente0
 * @property Universidade $idUniversidade20
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'tipo', 'anoAcademico', 'valorTotal', 'valorTotalAgente', 'idAgente', 'idCliente', 'idUniversidade1'], 'required'],
            [['tipo'], 'string'],
            [['valorTotal', 'valorTotalAgente', 'valorTotalSubAgente'], 'number'],
            [['dataCriacao'], 'safe'],
            [['deleted_at', 'idAgente', 'idSubAgente', 'idCliente', 'idUniversidade1', 'idUniversidade2'], 'integer'],
            [['descricao', 'anoAcademico'], 'string', 'max' => 255],
            [['idAgente'], 'exist', 'skipOnError' => true, 'targetClass' => Agente::className(), 'targetAttribute' => ['idAgente' => 'idAgente']],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'idCliente']],
            [['idUniversidade1'], 'exist', 'skipOnError' => true, 'targetClass' => Universidade::className(), 'targetAttribute' => ['idUniversidade1' => 'idUniversidade']],
            [['idSubAgente'], 'exist', 'skipOnError' => true, 'targetClass' => Agente::className(), 'targetAttribute' => ['idSubAgente' => 'idAgente']],
            [['idUniversidade2'], 'exist', 'skipOnError' => true, 'targetClass' => Universidade::className(), 'targetAttribute' => ['idUniversidade2' => 'idUniversidade']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProduto' => 'Id Produto',
            'descricao' => 'Descricao',
            'tipo' => 'Tipo',
            'anoAcademico' => 'Ano Academico',
            'valorTotal' => 'Valor Total',
            'valorTotalAgente' => 'Valor Total Agente',
            'valorTotalSubAgente' => 'Valor Total Sub Agente',
            'dataCriacao' => 'Data Criacao',
            'deleted_at' => 'Deleted At',
            'idAgente' => 'Id Agente',
            'idSubAgente' => 'Id Sub Agente',
            'idCliente' => 'Id Cliente',
            'idUniversidade1' => 'Id Universidade1',
            'idUniversidade2' => 'Id Universidade2',
        ];
    }

    /**
     * Gets query for [[Fases]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFases()
    {
        return $this->hasMany(Fase::className(), ['idProduto' => 'idProduto']);
    }

    /**
     * Gets query for [[IdAgente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdAgente0()
    {
        return $this->hasOne(Agente::className(), ['idAgente' => 'idAgente']);
    }

    /**
     * Gets query for [[IdCliente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCliente0()
    {
        return $this->hasOne(Cliente::className(), ['idCliente' => 'idCliente']);
    }

    /**
     * Gets query for [[IdUniversidade10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUniversidade10()
    {
        return $this->hasOne(Universidade::className(), ['idUniversidade' => 'idUniversidade1']);
    }

    /**
     * Gets query for [[IdSubAgente0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubAgente0()
    {
        return $this->hasOne(Agente::className(), ['idAgente' => 'idSubAgente']);
    }

    /**
     * Gets query for [[IdUniversidade20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUniversidade20()
    {
        return $this->hasOne(Universidade::className(), ['idUniversidade' => 'idUniversidade2']);
    }
}
