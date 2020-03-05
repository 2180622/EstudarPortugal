<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DocStock".
 *
 * @property int $idDocStock
 * @property string $tipo
 * @property string|null $tipoPessoal
 * @property string|null $tipoAcademico
 * @property int $idFaseStock
 *
 * @property FaseStock $idFaseStock0
 */
class DocStock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'DocStock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'idFaseStock'], 'required'],
            [['tipo', 'tipoPessoal', 'tipoAcademico'], 'string'],
            [['idFaseStock'], 'integer'],
            [['idFaseStock'], 'exist', 'skipOnError' => true, 'targetClass' => FaseStock::className(), 'targetAttribute' => ['idFaseStock' => 'idFaseStock']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDocStock' => 'Id Doc Stock',
            'tipo' => 'Tipo',
            'tipoPessoal' => 'Tipo Pessoal',
            'tipoAcademico' => 'Tipo Academico',
            'idFaseStock' => 'Id Fase Stock',
        ];
    }

    /**
     * Gets query for [[IdFaseStock0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFaseStock0()
    {
        return $this->hasOne(FaseStock::className(), ['idFaseStock' => 'idFaseStock']);
    }
}
