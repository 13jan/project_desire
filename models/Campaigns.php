<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaigns".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $id_creator
 * @property string $name_contact
 * @property string $contact
 * @property integer $date_created
 * @property integer $date_end
 * @property string $photo
 *
 * @property User $idCreator
 */
class Campaigns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaigns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'name_contact', 'contact', 'date_created'], 'required'],
            [['description'], 'string'],
            [['id_creator', 'date_created', 'date_end'], 'integer'],
            [['name', 'name_contact', 'contact', 'photo'], 'string', 'max' => 255],
            [['id_creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_creator' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'id_creator' => 'Id Creator',
            'name_contact' => 'Name Contact',
            'contact' => 'Contact',
            'date_created' => 'Date Created',
            'date_end' => 'Date End',
            'photo' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCreator()
    {
        return $this->hasOne(User::className(), ['id' => 'id_creator']);
    }
}
