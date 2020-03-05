<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "FaseStock".
 *
 * @property int $idFaseStock
 * @property string $descricao
 * @property int $idProdutoStock
 *
 * @property DocStock[] $docStocks
 * @property ProdutoStock $idProdutoStock0
 */
class FaseStock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'FaseStock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'idProdutoStock'], 'required'],
            [['idProdutoStock'], 'integer'],
            [['descricao'], 'string', 'max' => 255],
            [['idProdutoStock'], 'exist', 'skipOnError' => true, 'targetClass' => ProdutoStock::className(), 'targetAttribute' => ['idProdutoStock' => 'idProdutoStock']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idFaseStock' => 'Id Fase Stock',
            'descricao' => 'Descricao',
            'idProdutoStock' => 'Id Produto Stock',
        ];
    }

    /**
     * Gets query for [[DocStocks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocStocks()
    {
        return $this->hasMany(DocStock::className(), ['idFaseStock' => 'idFaseStock']);
    }

    /**
     * Gets query for [[IdProdutoStock0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdProdutoStock0()
    {
        return $this->hasOne(ProdutoStock::className(), ['idProdutoStock' => 'idProdutoStock']);
    }
}
