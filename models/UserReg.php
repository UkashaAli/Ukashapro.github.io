<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property integer $ID
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $alternateemail
 */
 
class UserReg extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'alternateemail'], 'required'],
            [['username', 'password', 'email', 'alternateemail'], 'string', 'max' => 100],
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
            'alternateemail' => 'Alternate Email',
        ];
    }
	
	 public static function findIdentity($id)
    {
        return static::findOne($id);
    }

	public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }
	public function getAuthKey()
    {
        return $this->authKey;
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
