<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "desire".
 *
 * @property integer $id
 * @property integer $id_campaigns
 * @property string $name
 * @property integer $number
 * @property string $comment
 * @property integer $number_solved
 *
 * @property Campaigns $idCampaigns
 */
class Desire extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'desire';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_campaigns', 'name', 'number', 'number_solved'], 'required'],
            [['id_campaigns', 'number', 'number_solved'], 'integer'],
            [['comment'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['id_campaigns'], 'exist', 'skipOnError' => true, 'targetClass' => Campaigns::className(), 'targetAttribute' => ['id_campaigns' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_campaigns' => 'Id Campaigns',
            'name' => 'Название',
            'number' => 'Количество',
            'comment' => 'Описание',
            'number_solved' => 'Число выполненых',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCampaigns()
    {
        return $this->hasOne(Campaigns::className(), ['id' => 'id_campaigns']);
    }
}
