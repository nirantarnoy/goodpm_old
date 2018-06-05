<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "work_req".
 *
 * @property int $id
 * @property string $work_req_no
 * @property int $work_req_date
 * @property string $name
 * @property string $description
 * @property int $apporve_by
 * @property int $apporve_date
 * @property string $apporve_note
 * @property int $work_type
 * @property int $work_priority
 * @property int $work_title
 * @property int $request_approve
 * @property int $problem_date
 * @property string $request_detail
 * @property int $plant_id
 * @property int $department_id
 * @property int $section_id
 * @property int $location_id
 * @property int $asset_id
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class WorkReq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_req';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           // [['work_req_no'],'required'],
            [['work_req_no'],'unique'],
            [[ 'apporve_by', 'apporve_date','work_order_id', 'work_type', 'work_priority', 'work_title', 'request_approve', 'plant_id', 'department_id', 'section_id', 'location_id', 'asset_id', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['description', 'request_detail'], 'string'],
            [['work_req_date','problem_date'],'safe'],
            [['work_req_no', 'name', 'apporve_note'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'work_req_no' => Yii::t('app', 'เลขที่ใบร้อง'),
            'work_req_date' => Yii::t('app', 'วันที่ร้องขอ'),
            'name' => Yii::t('app', 'ชื่อ'),
            'description' => Yii::t('app', 'รายละเอียด'),
            'apporve_by' => Yii::t('app', 'อนุมัติโดย'),
            'apporve_date' => Yii::t('app', 'วันที่อนุมัติ'),
            'apporve_note' => Yii::t('app', 'บันทึกอนุมัติ'),
            'work_type' => Yii::t('app', 'ประเภทงาน'),
            'work_priority' => Yii::t('app', 'ระดับความสำคัญ'),
            'work_title' => Yii::t('app', 'หัวข้องาน'),
            'request_approve' => Yii::t('app', 'ต้องการอนุมัติ'),
            'problem_date' => Yii::t('app', 'วันที่พบปัญหา'),
            'request_detail' => Yii::t('app', 'รายละเอียดการร้องขอ'),
            'plant_id' => Yii::t('app', 'บริษัท/องกรณ์'),
            'department_id' => Yii::t('app', 'ฝ่าย'),
            'section_id' => Yii::t('app', 'แผนก'),
            'location_id' => Yii::t('app', 'ที่ตั้ง'),
            'asset_id' => Yii::t('app', 'เครื่องจักร'),
            'attach_file' => Yii::t('app', 'เอกสารแนบ'),
            'status' => Yii::t('app', 'สถานะ'),
            'work_order_id' => Yii::t('app', 'ใบสั่งงาน'),
            'created_at' => Yii::t('app', 'สร้างเมื่อ'),
            'updated_at' => Yii::t('app', 'แก้ไขเมื่อ'),
            'created_by' => Yii::t('app', 'สร้างโดย'),
            'updated_by' => Yii::t('app', 'แก้ไขโดย'),
        ];
    }
}
