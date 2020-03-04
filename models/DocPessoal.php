<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DocPessoal".
 *
 * @property int $idDocPessoal
 * @property string $nome
 * @property string $apelido
 * @property string $tipo
 * @property string $imagem
 * @property int $numDoc
 * @property string $dataValidade
 * @property string $pais
 * @property string $morada
 * @property int $verificacao
 * @property string $dataPublicacao
 * @property int $idFase
 *
 * @property Fase $idFase0
 */
class DocPessoal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'DocPessoal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'apelido', 'tipo', 'imagem', 'numDoc', 'dataValidade', 'pais', 'morada', 'idFase'], 'required'],
            [['tipo'], 'string'],
            [['numDoc', 'verificacao', 'idFase'], 'integer'],
            [['dataValidade', 'dataPublicacao'], 'safe'],
            [['nome', 'apelido', 'imagem', 'pais', 'morada'], 'string', 'max' => 255],
            [['idFase'], 'exist', 'skipOnError' => true, 'targetClass' => Fase::className(), 'targetAttribute' => ['idFase' => 'idFase']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDocPessoal' => 'Id Doc Pessoal',
            'nome' => 'Nome',
            'apelido' => 'Apelido',
            'tipo' => 'Tipo',
            'imagem' => 'Imagem',
            'numDoc' => 'Num Doc',
            'dataValidade' => 'Data Validade',
            'pais' => 'Pais',
            'morada' => 'Morada',
            'verificacao' => 'Verificacao',
            'dataPublicacao' => 'Data Publicacao',
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
