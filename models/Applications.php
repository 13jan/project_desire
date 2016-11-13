<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "applications".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_desire
 * @property integer $number_reserve
 * @property integer $number_completed
 *
 * @property Desire $idDesire
 * @property User $idUser
 */
class Applications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'applications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_desire', 'number_reserve', 'number_completed'], 'required'],
            [['id_user', 'id_desire', 'number_reserve', 'number_completed'], 'integer'],
            [['id_desire'], 'exist', 'skipOnError' => true, 'targetClass' => Desire::className(), 'targetAttribute' => ['id_desire' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_desire' => 'Id Desire',
            'number_reserve' => 'Number Reserve',
            'number_completed' => 'Number Completed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDesire()
    {
        return $this->hasOne(Desire::className(), ['id' => 'id_desire']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
