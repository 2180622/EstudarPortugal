<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RelFornResp".
 *
 * @property int $idRelacao
 * @property float $valor
 * @property int $idResponsabilidade
 * @property int $idFornecedor
 *
 * @property Responsabilidade $idResponsabilidade0
 * @property Fornecedor $idFornecedor0
 */
class RelFornResp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'RelFornResp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor', 'idResponsabilidade', 'idFornecedor'], 'required'],
            [['valor'], 'number'],
            [['idResponsabilidade', 'idFornecedor'], 'integer'],
            [['idResponsabilidade'], 'exist', 'skipOnError' => true, 'targetClass' => Responsabilidade::className(), 'targetAttribute' => ['idResponsabilidade' => 'idResponsabilidade']],
            [['idFornecedor'], 'exist', 'skipOnError' => true, 'targetClass' => Fornecedor::className(), 'targetAttribute' => ['idFornecedor' => 'IdFornecedor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idRelacao' => 'Id Relacao',
            'valor' => 'Valor',
            'idResponsabilidade' => 'Id Responsabilidade',
            'idFornecedor' => 'Id Fornecedor',
        ];
    }

    /**
     * Gets query for [[IdResponsabilidade0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdResponsabilidade0()
    {
        return $this->hasOne(Responsabilidade::className(), ['idResponsabilidade' => 'idResponsabilidade']);
    }

    /**
     * Gets query for [[IdFornecedor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFornecedor0()
    {
        return $this->hasOne(Fornecedor::className(), ['IdFornecedor' => 'idFornecedor']);
    }
}
