<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;


/**
 * This is the model class for table "yiiusers".
 *
 * @property integer $ID
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $alternateemail
 * @property string $authkey
 */
class Yiiusers extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yiiusers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'alternateemail', 'authkey'], 'required'],
            [['username', 'password', 'email', 'alternateemail', 'authkey'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'alternateemail' => 'Alternateemail',
            'authkey' => 'Authkey',
        ];
    }
	
	 public static function findIdentity($id)
    {
        return static::findOne($id);
    }

	public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new \yii\base\NotSupportedException();
    }
	public function getAuthKey()
    {
        return $this->authkey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
	
	public function getID(){
		return $this->ID;
	}
	
	public static function findByUsername($username){
		return self::findOne(['username'=>$username]);
	}
	
	public function validatePassword($password){
		return $this->password === $password;
	}
}
