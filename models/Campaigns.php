<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;

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


    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_created'],
                    //ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                    /*
                    'value' => function () {
                        return date('Y-m-d H:i:s');
                    }*/
                ],
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'id_creator',
                'updatedByAttribute' => 'id_creator',
            ],

        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'name_contact', 'contact'], 'required'],
            [['description'], 'string'],
            [['id_creator', 'date_created', 'date_end'], 'integer'],
            [['name', 'name_contact', 'contact', 'photo'], 'string', 'max' => 255],
            [['id_creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_creator' => 'id']],
			[['photo'], 'file','extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название компании',
            'description' => 'Описание',
            'id_creator' => 'Id Creator',
            'name_contact' => 'Контактное лицо',
            'contact' => 'Контактные данные',
            'date_created' => 'Дата создания',
            'date_end' => 'Дата завершения',
            'photo' => 'Фото',
        ];
    }
	
	//Обработка загрузки фото
	public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCreator()
    {
        return $this->hasOne(User::className(), ['id' => 'id_creator']);
    }
}
