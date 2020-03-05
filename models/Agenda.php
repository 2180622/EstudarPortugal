<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Agenda".
 *
 * @property int $idAgenda
 * @property string $descricao
 * @property int $Visibilidade
 * @property string $dataInicio
 * @property string $dataFim
 * @property string $dataCriacao
 * @property int $idUser
 *
 * @property User $idUser0
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Agenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'dataInicio', 'dataFim', 'idUser'], 'required'],
            [['descricao'], 'string'],
            [['Visibilidade', 'idUser'], 'integer'],
            [['dataInicio', 'dataFim', 'dataCriacao'], 'safe'],
            [['IdUser'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['IdUser' => 'idUser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAgenda' => 'Id Agenda',
            'descricao' => 'Descricao',
            'Visibilidade' => 'Visibilidade',
            'dataInicio' => 'Data Inicio',
            'dataFim' => 'Data Fim',
            'dataCriacao' => 'Data Criacao',
            'idUser' => 'Id User',
        ];
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(User::className(), ['idUser' => 'IdUser']);
    }
}
