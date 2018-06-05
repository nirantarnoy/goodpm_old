<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asset".
 *
 * @property int $id
 * @property string $asset_code
 * @property string $name
 * @property string $description
 * @property int $asset_category_id
 * @property string $plant_id
 * @property int $location_id
 * @property int $department_id
 * @property int $section_id
 * @property int $worktrade_id
 * @property int $priority_id
 * @property int $supplier_id
 * @property string $manufacturer
 * @property string $model
 * @property string $serial_no
 * @property string $service_no
 * @property int $install_date
 * @property int $install_by
 * @property int $responsible
 * @property int $counting_group
 * @property int $critical_type
 * @property int $last_pm
 * @property int $next_pm
 * @property double $cost
 * @property double $value_amount
 * @property int $incoming_date
 * @property int $expiration_date
 * @property int $default_location
 * @property string $notes
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Asset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_code','asset_category_id'],'required'],
            [['asset_category_id', 'location_id', 'department_id', 'section_id', 'worktrade_id', 'priority_id', 'supplier_id', 'install_date', 'install_by', 'responsible', 'counting_group', 'critical_type', 'last_pm', 'next_pm', 'incoming_date', 'expiration_date', 'default_location', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['cost', 'value_amount'], 'number'],
            [['notes'], 'string'],
            [['asset_code', 'name', 'description', 'plant_id', 'manufacturer', 'model', 'serial_no', 'service_no'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'asset_code' => Yii::t('app', 'รหัสเครื่องจักร'),
            'name' => Yii::t('app', 'ชื่อ'),
            'description' => Yii::t('app', 'รายละเอียด'),
            'asset_category_id' => Yii::t('app', 'หมวดสินค้า'),
            'plant_id' => Yii::t('app', 'Plant ID'),
            'location_id' => Yii::t('app', 'ที่ตั้ง'),
            'department_id' => Yii::t('app', 'ฝ่าย'),
            'section_id' => Yii::t('app', 'แผนก'),
            'worktrade_id' => Yii::t('app', 'หน่วยงานรับผิดชอบ'),
            'priority_id' => Yii::t('app', 'ระดับความสำคัญ'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'manufacturer' => Yii::t('app', 'ผู้ผลิต'),
            'model' => Yii::t('app', 'Model'),
            'serial_no' => Yii::t('app', 'Serial No'),
            'service_no' => Yii::t('app', 'Service No'),
            'install_date' => Yii::t('app', 'Install Date'),
            'install_by' => Yii::t('app', 'Install By'),
            'responsible' => Yii::t('app', 'Responsible'),
            'counting_group' => Yii::t('app', 'Counting Group'),
            'critical_type' => Yii::t('app', 'Critical Type'),
            'last_pm' => Yii::t('app', 'Pm ล่าสุด'),
            'next_pm' => Yii::t('app', 'Pm ครั้งต่อไป'),
            'cost' => Yii::t('app', 'Cost'),
            'value_amount' => Yii::t('app', 'Value Amount'),
            'incoming_date' => Yii::t('app', 'Incoming Date'),
            'expiration_date' => Yii::t('app', 'Expiration Date'),
            'default_location' => Yii::t('app', 'Default Location'),
            'notes' => Yii::t('app', 'บันทึก'),
            'status' => Yii::t('app', 'สถานะ'),
            'created_at' => Yii::t('app', 'สร้างเมื่อ'),
            'updated_at' => Yii::t('app', 'แก้ไขเมื่อ'),
            'created_by' => Yii::t('app', 'สร้างโดย'),
            'updated_by' => Yii::t('app', 'แก้ไขโดย'),
        ];
    }
}
