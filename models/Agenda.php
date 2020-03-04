<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Agenda".
 *
 * @property int $idAgenda
 * @property string $descricao
 * @property string $data
 * @property string $horaInicio
 * @property string $horaFim
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
            [['descricao', 'data', 'horaInicio', 'horaFim', 'idUser'], 'required'],
            [['descricao'], 'string'],
            [['data', 'horaInicio', 'horaFim', 'dataCriacao'], 'safe'],
            [['idUser'], 'integer'],
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
            'data' => 'Data',
            'horaInicio' => 'Hora Inicio',
            'horaFim' => 'Hora Fim',
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
