<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DocAcademico".
 *
 * @property int $idDocAcademico
 * @property string $nome
 * @property string $tipo
 * @property string $imagem
 * @property string $pais
 * @property float $nota
 * @property string $pontuacao
 * @property string $dataPublicacao
 * @property int $verificacao
 * @property int $idFase
 *
 * @property Fase $idFase0
 */
class DocAcademico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'DocAcademico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'tipo', 'imagem', 'pais', 'nota', 'pontuacao', 'idFase'], 'required'],
            [['tipo'], 'string'],
            [['nota'], 'number'],
            [['dataPublicacao'], 'safe'],
            [['verificacao', 'idFase'], 'integer'],
            [['nome', 'imagem', 'pais', 'pontuacao'], 'string', 'max' => 255],
            [['idFase'], 'exist', 'skipOnError' => true, 'targetClass' => Fase::className(), 'targetAttribute' => ['idFase' => 'idFase']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDocAcademico' => 'Id Doc Academico',
            'nome' => 'Nome',
            'tipo' => 'Tipo',
            'imagem' => 'Imagem',
            'pais' => 'Pais',
            'nota' => 'Nota',
            'pontuacao' => 'Pontuacao',
            'dataPublicacao' => 'Data Publicacao',
            'verificacao' => 'Verificacao',
            'idFase' => 'Id Fase',
        ];
    }

    /**
     * Gets query for [[IdFase0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFase0()
    {
        return $this->hasOne(Fase::className(), ['idFase' => 'idFase']);
    }
}
