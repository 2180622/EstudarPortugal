<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property int $idUser
 * @property string $username
 * @property string $tipo
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string|null $verification_token
 * @property string $auth_key
 * @property int $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $idAdministrador
 * @property int|null $idAgente
 * @property int|null $idCliente
 *
 * @property Agenda[] $agendas
 * @property Administrador $idAdministrador0
 * @property Agente $idAgente0
 * @property Cliente $idCliente0
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $password;
    public $accessToken;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'tipo', 'password_hash', 'auth_key', 'status'], 'required'],
            [['tipo'], 'string'],
            [['status', 'created_at', 'updated_at', 'idAdministrador', 'idAgente', 'idCliente'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['idAdministrador'], 'exist', 'skipOnError' => true, 'targetClass' => Administrador::className(), 'targetAttribute' => ['idAdministrador' => 'idAdmin']],
            [['idAgente'], 'exist', 'skipOnError' => true, 'targetClass' => Agente::className(), 'targetAttribute' => ['idAgente' => 'idAgente']],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'idCliente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUser' => 'Id User',
            'username' => 'Username',
            'tipo' => 'Tipo',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'verification_token' => 'Verification Token',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'idAdministrador' => 'Id Administrador',
            'idAgente' => 'Id Agente',
            'idCliente' => 'Id Cliente',
        ];
    }

    /**
     * Gets query for [[Agendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgendas()
    {
        return $this->hasMany(Agenda::className(), ['IdUser' => 'idUser']);
    }

    /**
     * Gets query for [[IdAdministrador0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdAdministrador0()
    {
        return $this->hasOne(Administrador::className(), ['idAdmin' => 'idAdministrador']);
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

    /*************************** CODIGO EXTRA ******************************/


    private static $users = [
        '100' => [
            'idUser' => '100',
            'tipo' => 'admin',
            'username' => 'admin',
            'password' => 'admin',
            'auth_key' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'idUser' => '101',
            'tipo' => 'agente',
            'username' => 'demo',
            'password' => 'demo',
            'auth_key' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->idUser;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($auth_key)
    {
        return $this->auth_key === $auth_key;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
