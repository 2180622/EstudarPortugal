<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Fase".
 *
 * @property int $idFase
 * @property string $descricao
 * @property string $dataVencimento
 * @property string|null $updated_at
 * @property float $valorFase
 * @property int $verificacaoPago
 * @property float $valorComissaoAgente
 * @property float|null $valorComSubAgente
 * @property int $idProduto
 *
 * @property DocAcademico[] $docAcademicos
 * @property DocPessoal[] $docPessoals
 * @property DocTransacao[] $docTransacaos
 * @property Produto $idProduto0
 * @property PagoResponsabilidade[] $pagoResponsabilidades
 * @property Responsabilidade[] $responsabilidades
 */
class Fase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Fase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'dataVencimento', 'valorFase', 'valorComissaoAgente', 'idProduto'], 'required'],
            [['dataVencimento', 'updated_at'], 'safe'],
            [['valorFase', 'valorComissaoAgente', 'valorComSubAgente'], 'number'],
            [['verificacaoPago', 'idProduto'], 'integer'],
            [['descricao'], 'string', 'max' => 255],
            [['idProduto'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['idProduto' => 'idProduto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idFase' => 'Id Fase',
            'descricao' => 'Descricao',
            'dataVencimento' => 'Data Vencimento',
            'updated_at' => 'Updated At',
            'valorFase' => 'Valor Fase',
            'verificacaoPago' => 'Verificacao Pago',
            'valorComissaoAgente' => 'Valor Comissao Agente',
            'valorComSubAgente' => 'Valor Com Sub Agente',
            'idProduto' => 'Id Produto',
        ];
    }

    /**
     * Gets query for [[DocAcademicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocAcademicos()
    {
        return $this->hasMany(DocAcademico::className(), ['idFase' => 'idFase']);
    }

    /**
     * Gets query for [[DocPessoals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocPessoals()
    {
        return $this->hasMany(DocPessoal::className(), ['idFase' => 'idFase']);
    }

    /**
     * Gets query for [[DocTransacaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocTransacaos()
    {
        return $this->hasMany(DocTransacao::className(), ['idFase' => 'idFase']);
    }

    /**
     * Gets query for [[IdProduto0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduto0()
    {
        return $this->hasOne(Produto::className(), ['idProduto' => 'idProduto']);
    }

    /**
     * Gets query for [[PagoResponsabilidades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPagoResponsabilidades()
    {
        return $this->hasMany(PagoResponsabilidade::className(), ['idFase' => 'idFase']);
    }

    /**
     * Gets query for [[Responsabilidades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponsabilidades()
    {
        return $this->hasMany(Responsabilidade::className(), ['idFase' => 'idFase']);
    }
}
