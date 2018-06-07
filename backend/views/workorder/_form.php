<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use toxor88\switchery\Switchery;
use kartik\date\DatePicker;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workorder-form">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-files-o"></i> <?=$this->title?></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
                    <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal form-label-left']]); ?>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เลขที่ใบสั่งงาน <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <?php $model->work_order_no = "WO18000001";?>
                                        <?= $form->field($model, 'work_order_no')->textInput(['maxlength' => true,'readonly'=>'readonly'])->label(false) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">วันที่ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <?php $model->work_order_date = $model->isNewRecord?date('d-m-y'):date('d-m-y',$model->work_order_date); ?>
                                        <?= $form->field($model, 'work_order_date')->widget(DatePicker::className(),[
                                            'pluginOptions'=>[
                                                'format' => 'dd-mm-yyyy'
                                            ]
                                        ])->label(false) ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ประเภทงาน <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <?= $form->field($model, 'work_type')->widget(Select2::className(),[
                                            'data'=>ArrayHelper::map(\backend\helpers\WorkType::asArrayObject(),'id','name'),
                                            'options'=>['placeholder'=>'เลือกประเภท'],
                                        ])->label(false) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">หน่วยงาน <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <?= $form->field($model, 'work_trade')->widget(Select2::className(),[
                                            'data'=>ArrayHelper::map(\backend\models\Worktrade::find()->all(),'id','name'),
                                            'options'=>['placeholder'=>'เลือกหน่วยงาน'],
                                        ])->label(false) ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ระดับความสำคัญ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <?= $form->field($model, 'work_priority')->widget(Select2::className(),[
                                            'data'=>ArrayHelper::map(\backend\helpers\Workpriority::asArrayObject(),'id','name'),
                                            'options'=>['placeholder'=>'ระดับความสำคัญ'],
                                        ])->label(false) ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เลขที่ใบร้องขอ <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input type="text" name="workreq" class="form-control" value="<?=$model->work_req_id?>" readonly>
                                    </div>
                                </div>

                            </div>
                        </div>
            <hr>
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

                    <div class="form-group">
                        <label class="control-label col-md-1 col-sm-1 col-xs-12" for="first-name">รายละเอียด
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <?= $form->field($model, 'request_detail')->textarea(['rows' => 6,'style'=>'font-size: 18px;'])->label(false) ?>
                        </div>
                    </div>
                </div>
            </div>

                    <?= $form->field($model, 'action_by')->textInput() ?>

                    <?= $form->field($model, 'action_date')->textInput() ?>

                    <?= $form->field($model, 'action_note')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'vendor_id')->textInput() ?>


                    <?= $form->field($model, 'estimate_start_date')->textInput() ?>

                    <?= $form->field($model, 'estimate_end_date')->textInput() ?>

                    <?= $form->field($model, 'actual_start_date')->textInput() ?>

                    <?= $form->field($model, 'actual_end_date')->textInput() ?>

                    <?= $form->field($model, 'actual_asset_start_date')->textInput() ?>




                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

    </div>
</div>
</div>
<div class="x_panel">
    <div class="x_title">
        <h2><i class="fa fa-check"></i>ปิดใบสั่งงาน <small>Sessions</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <ul class="list-unstyled timeline">
            <li>
                <div class="block">
                    <div class="tags">
                        <a href="" class="tag">
                            <span>Entertainment</span>
                        </a>
                    </div>
                    <div class="block_content">
                        <h2 class="title">
                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                        </h2>
                        <div class="byline">
                            <span>13 hours ago</span> by <a>Jane Smith</a>
                        </div>
                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="block">
                    <div class="tags">
                        <a href="" class="tag">
                            <span>Entertainment</span>
                        </a>
                    </div>
                    <div class="block_content">
                        <h2 class="title">
                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                        </h2>
                        <div class="byline">
                            <span>13 hours ago</span> by <a>Jane Smith</a>
                        </div>
                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                <div class="block">
                    <div class="tags">
                        <a href="" class="tag">
                            <span>Entertainment</span>
                        </a>
                    </div>
                    <div class="block_content">
                        <h2 class="title">
                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                        </h2>
                        <div class="byline">
                            <span>13 hours ago</span> by <a>Jane Smith</a>
                        </div>
                        <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                        </p>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>
