<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $product_code
 * @property string $name
 * @property string $description
 * @property string $barcode
 * @property string $photo
 * @property int $category_id
 * @property int $product_type_id
 * @property int $unit_id
 * @property double $min_stock
 * @property double $max_stock
 * @property int $is_hold
 * @property int $has_variant
 * @property int $bom_type
 * @property double $cost
 * @property double $price
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_code'],'required'],
            [['category_id', 'product_type_id', 'unit_id', 'is_hold', 'has_variant', 'bom_type', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['min_stock', 'max_stock', 'cost', 'price'], 'number'],
            [['product_code', 'name', 'description', 'barcode', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_code' => Yii::t('app', 'รหัสสินค้า'),
            'name' => Yii::t('app', 'ชื่อ'),
            'description' => Yii::t('app', 'รายละเอียด'),
            'barcode' => Yii::t('app', 'บาร์โค้ด'),
            'photo' => Yii::t('app', 'รูปภาพ'),
            'category_id' => Yii::t('app', 'กลุ่มสินค้า'),
            'product_type_id' => Yii::t('app', 'ประเภทสินค้า'),
            'unit_id' => Yii::t('app', 'หน่วยนับ'),
            'min_stock' => Yii::t('app', 'จัดเก็บขั้นต่ำ'),
            'max_stock' => Yii::t('app', 'จัดเก็บสูงสุด'),
            'is_hold' => Yii::t('app', 'ระงับการใช้งาน'),
            'has_variant' => Yii::t('app', 'มีสินค้าแปรผัน'),
            'bom_type' => Yii::t('app', 'ประเภทโครงสร้าง'),
            'cost' => Yii::t('app', 'ต้นทุน'),
            'price' => Yii::t('app', 'ราคา'),
            'status' => Yii::t('app', 'สถานะ'),
            'all_qty' => Yii::t('app', 'จำนวนทั้งหมด'),
            'reserved_qty' => Yii::t('app', 'จำนวนจอง'),
            'available_qty' => Yii::t('app', 'จำนวนใช้ได้'),
            'created_at' => Yii::t('app', 'สร้างเมื่อ'),
            'updated_at' => Yii::t('app', 'แก้ไขเมื่อ'),
            'created_by' => Yii::t('app', 'สร้างโดย'),
            'updated_by' => Yii::t('app', 'แก้ไขโดย'),
        ];
    }
}
