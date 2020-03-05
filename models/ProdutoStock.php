<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ProdutoStock".
 *
 * @property int $idProdutoStock
 * @property string $descricao
 * @property string $tipo
 * @property string $anoAcademico
 * @property int $deleted_at
 *
 * @property FaseStock[] $faseStocks
 */
class ProdutoStock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ProdutoStock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'tipo', 'anoAcademico'], 'required'],
            [['tipo'], 'string'],
            [['deleted_at'], 'integer'],
            [['descricao', 'anoAcademico'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idProdutoStock' => 'Id Produto Stock',
            'descricao' => 'Descricao',
            'tipo' => 'Tipo',
            'anoAcademico' => 'Ano Academico',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[FaseStocks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaseStocks()
    {
        return $this->hasMany(FaseStock::className(), ['idProdutoStock' => 'idProdutoStock']);
    }
}
