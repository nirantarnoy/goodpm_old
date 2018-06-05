<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asset_group".
 *
 * @property int $id
 * @property string $asset_group_code
 * @property string $name
 * @property string $description
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class AssetGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_group_code','name'],'required'],
            [['description'], 'string'],
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['asset_group_code', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'asset_group_code' => Yii::t('app', 'รหัสกลุ่ม'),
            'name' => Yii::t('app', 'ชื่อกลุ่ม'),
            'description' => Yii::t('app', 'รายละเอียด'),
            'status' => Yii::t('app', 'สถาณะ'),
            'created_at' => Yii::t('app', 'สร้างเมื่อ'),
            'updated_at' => Yii::t('app', 'แก้ไขเมื่อ'),
            'created_by' => Yii::t('app', 'สร้างโดย'),
            'updated_by' => Yii::t('app', 'แก้ไขโดย'),
        ];
    }
}
