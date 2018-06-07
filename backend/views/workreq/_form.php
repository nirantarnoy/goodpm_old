<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use toxor88\switchery\Switchery;
use kartik\date\DatePicker;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Workreq */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workreq-form">
    <div class="x_panel">
        <div class="x_title">
            <h3><i class="fa fa-file-o"></i> <?=$this->title?> <small></small></h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />

            <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal form-label-left']]); ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เลขที่ใบร้อง <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?php $model->work_req_no = "WR18000001";?>
                            <?= $form->field($model, 'work_req_no')->textInput(['maxlength' => true,'readonly'=>'readonly'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่ <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?php $model->work_req_date = $model->isNewRecord?date('d-m-y'):date('d-m-y',$model->work_req_date); ?>
                            <?= $form->field($model, 'work_req_date')->widget(DatePicker::className(),[
                                'pluginOptions'=>[
                                    'format' => 'dd-mm-yyyy'
                                ]
                            ])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ต้องอนุมัติ <span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?php echo $form->field($model, 'request_approve')->widget(Switchery::className(),['options'=>['label'=>'','class'=>'form-control']])->label(false) ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">หัวข้อร้องขอ <span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'work_title')->widget(Select2::className(),[
                                'data'=>ArrayHelper::map(\backend\helpers\WorkTitle::asArrayObject(),'id','name'),
                                'options'=>['placeholder'=>'เลือกหัวข้อ'],
                            ])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ประเภทใบร้องขอ <span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'work_type')->widget(Select2::className(),[
                                'data'=>ArrayHelper::map(\backend\helpers\WorkType::asArrayObject(),'id','name'),
                                'options'=>['placeholder'=>'เลือกประเภท'],
                            ])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ระดับความสำคัญ
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'work_priority')->widget(Select2::className(),[
                                'data'=>ArrayHelper::map(\backend\helpers\Workpriority::asArrayObject(),'id','name'),
                                'options'=>['placeholder'=>'เลือกระดับ'],
                            ])->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">สถานะ <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px;">
                            <?php if($model->isNewRecord):?>
                                 <div class="label label-success form-control"> Create</div>
                            <?php else:?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">อนุมัติโดย <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px;">
                            <?php if($model->isNewRecord):?>
                                <div class="label label-default form-control"> Niran</div>
                            <?php else:?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่อนุมัติ <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px;">
                            <?php if($model->isNewRecord):?>
                                <div class="label label-default form-control"> 10/06/2018 11.00</div>
                            <?php else:?>
                            <?php endif;?>
                        </div>
                    </div>

                </div>
            </div><hr>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่พบปัญหา
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <?php $model->problem_date = $model->isNewRecord?date('d-m-y H:i'):date('d-m-y H:i',$model->problem_date); ?>
                            <?= $form->field($model, 'problem_date')->widget(DateTimePicker::className(),[
                                'pluginOptions'=>[
                                    'format' => 'dd-mm-yyyy H:i'
                                ]
                            ])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ที่ตั้ง
                        </label>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <?= $form->field($model, 'location_id')->widget(Select2::className(),[
                                'data'=>ArrayHelper::map(\backend\models\Location::find()->all(),'id','name'),
                                'options'=>['placeholder'=>'เลือกที่ตั้ง'],
                            ])->label(false) ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ฝ่าย
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'department_id')->widget(Select2::className(),[
                                'data'=>ArrayHelper::map(\backend\models\Department::find()->all(),'id','name'),
                                'options'=>['placeholder'=>'เลือกฝ่าย'],
                            ])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เครื่องจักร
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'asset_id')->widget(Select2::className(),[
                                'data'=>ArrayHelper::map(\backend\models\Asset::find()->all(),'id','name'),
                                'options'=>['placeholder'=>'เลือกเครื่องจักร'],
                            ])->label(false) ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">แผนก
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'section_id')->widget(Select2::className(),[
                                'data'=>ArrayHelper::map(\backend\models\Section::find()->all(),'id','name'),
                                'options'=>['placeholder'=>'เลือกแผนก'],
                            ])->label(false) ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?= $form->field($model, 'request_detail')->textarea(['rows' => 6,'style'=>'font-size: 18px;']) ?>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เอกสารแนบ <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                            <?= $form->field($model, 'attach_file')->fileInput()->label(false) ?>
                        </div>
                    </div>

                </div>
            </div>
            <hr>
                <div class="col-md-12 col-md-offset-5">
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'บันทึก'), ['class' => 'btn btn-success']) ?>
                    <div class="btn btn-default">ยกเลิก</div>
                </div>
                </div>
                <?php ActiveForm::end(); ?>
        </div>
            </div>
</div>
</div>
