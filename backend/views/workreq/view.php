<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Workreq */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ใบคำร้อง'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workreq-view">

<div class="row">
    <div class="col-lg-12">
        <div class="btn-group">
            <div class="btn btn-primary"><i class="fa fa-check-circle"></i> อนุมัติใบคำร้อง</div>
            <div class="btn btn-default"><i class="fa fa-ban"></i> ยกเลิกใบคำร้อง</div>
            <div class="btn btn-default"><i class="fa fa-print"></i> พิมพ์</div>
        </div>
        <div class="pull-right">
            <div class="btn-group">
                <a class="btn btn-default" href="<?=Url::to(['workreq/index'],true)?>"><i class="fa fa-arrow-right"></i> กลับ</a>
                <a class="btn btn-default"  href="<?=Url::to(['workreq/update','id'=>$model->id],true)?>"><i class="fa fa-pencil"></i> แก้ไข</a>
                <div class="btn btn-danger"><i class="fa fa-trash-o"></i> ลบ</div>
            </div>
        </div>
    </div>
</div>
    <br>

    <div class="x_panel">
        <div class="x_title">
            <h3><i class="fa fa-files-o"></i> รายละเอียดใบสั่งงาน <small><?= $model->name?></small></h3>

        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-lg-12">
                    <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                            <li>
                                <a href="#step-1">
                                    <span class="step_no"><i class="fa fa-file-o"></i></span>
                                    <span class="step_descr">
                                              Step 1<br />
                                              <small>สร้างใบคำร้อง</small>
                                          </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-2">
                                    <span class="step_no"><i class="fa fa-check-circle"></i></span>
                                    <span class="step_descr">
                                              Step 2<br />
                                              <small>อนุมัตคำร้อง</small>
                                          </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-3">
                                    <span class="step_no"><i class="fa fa-spinner"></i></span>
                                    <span class="step_descr">
                                              Step 3<br />
                                              <small>ดำเนินการ</small>
                                          </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-4">
                                    <span class="step_no"><i class="fa fa-thumbs-up"></i> </span>
                                    <span class="step_descr">
                                              Step 4<br />
                                              <small>ดำเนินการเรียบร้อย</small>
                                          </span>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>

<!--            <hr>-->
            <div class="form-horizontal form-label-left">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เลขที่ใบร้อง <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                           <?=$model->work_req_no?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่ <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                            <?=date('d-m-y',$model->created_at)?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ต้องอนุมัติ <span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                            <?php if($model->request_approve):?>
                               <div class="label label-success"> Yes</div>
                            <?php else:?>
                                <div class="label label-default"> No</div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ใบสั่งงาน <span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                           <a href="<?=Url::to(['workorder/view','id'=>$model->work_order_id],true)?>"><?=\backend\models\Workorder::findOrderName($model->work_order_id)?></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">หัวข้อร้องขอ <span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                            <?=\backend\helpers\WorkTitle::getTypeById($model->work_title)?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ประเภทใบร้องขอ <span class="required"></span>
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                            <?=\backend\helpers\WorkType::getTypeById($model->work_type)?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ระดับความสำคัญ
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                            <?=\backend\helpers\Workpriority::getTypeById($model->work_priority)?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">สถานะ <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                            <?php if($model->status == 0):?>
                                <div class="label label-success"> Created</div>
                            <?php elseif($model->status == 1):?>
                                <div class="label label-default"> Approved</div>
                            <?php elseif($model->status == 2):?>
                                <div class="label label-default"> Processing</div>
                            <?php elseif($model->status == 3):?>
                                <div class="label label-default"> Completed</div>
                            <?php else:?>
                                <div class="label label-default"> Cancel</div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">อนุมัติโดย <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                            <?=$model->apporve_by?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่อนุมัติ <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                            <?=$model->apporve_date?>
                        </div>
                    </div>

                </div>
            </div><hr>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่พบปัญหา
                            </label>
                            <div class="col-md-8 col-sm-6 col-xs-12" style="top: 8px">
                                <?=date('d-m-y',$model->problem_date)?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ที่ตั้ง
                            </label>
                            <div class="col-md-8 col-sm-12 col-xs-12" style="top: 8px">
                                <?=\backend\models\Location::findLocationName($model->location_id)?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ฝ่าย
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                <?=\backend\models\Department::findDepartmentcode($model->department_id)?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เครื่องจักร
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                <?=\backend\models\Asset::findAssetName($model->asset_id)?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">แผนก
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                <?=\backend\models\Section::findSectionName($model->section_id)?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">รายะเอียดใบร้องขอ <span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-8 col-xs-12" style="top: 8px">
                                <div style="background: #EDEDED;padding: 15px;border-radius: 5px;">
                                    <h2 class="title">
                                        <div style="font-size: 18px;font-weight: bold">"<?=$model->request_detail?>"</div>
                                    </h2>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เอกสารแนบ <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                    <?=$model->attach_file?>
                                </div>
                            </div>

                        </div>
                    </div>
                <hr>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">สร้างโดย
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                <?=\backend\models\User::findUsername($model->created_by)?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">แก้ไขโดย
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                <?=\backend\models\User::findUsername($model->created_by)?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">สร้างเมื่อ
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                <?=date('d-m-y H:i:s',$model->created_at)?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">แก้ไขเมื่อ
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="top: 8px">
                                <?=date('d-m-y H:i:s',$model->updated_at)?>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->registerJs('
$(function() {

  $("#wizard").smartWizard({
    selected:0, 
    enableAllSteps: false,
    contentURL:null,
    transitionEffect: "fade",
    contentURLData:null,
    contentCache:true,
    enableFinishButton: false,
    hideButtonsOnDisabled: false,
    labelNext:"",
    labelPrevious:"",
    labelFinish:"",   
    noForwardJumping:false,
    buttonOrder: []
  });
  
  $("#wizard").smartWizard("gotoStep",0);
  
});
',static::POS_END);
?>