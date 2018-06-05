<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Workorder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workorder-form">
    <div class="x_panel">
        <div class="x_title">
            <h3><i class="fa fa-institution"></i> <?=$this->title?> <small></small></h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'work_order_no')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'work_order_date')->textInput() ?>

                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'action_by')->textInput() ?>

                    <?= $form->field($model, 'action_date')->textInput() ?>

                    <?= $form->field($model, 'action_note')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'vendor_id')->textInput() ?>

                    <?= $form->field($model, 'work_trade')->textInput() ?>

                    <?= $form->field($model, 'work_type')->textInput() ?>

                    <?= $form->field($model, 'work_priority')->textInput() ?>

                    <?= $form->field($model, 'work_title')->textInput() ?>

                    <?= $form->field($model, 'request_detail')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'plant_id')->textInput() ?>

                    <?= $form->field($model, 'department_id')->textInput() ?>

                    <?= $form->field($model, 'section_id')->textInput() ?>

                    <?= $form->field($model, 'location_id')->textInput() ?>

                    <?= $form->field($model, 'estimate_start_date')->textInput() ?>

                    <?= $form->field($model, 'estimate_end_date')->textInput() ?>

                    <?= $form->field($model, 'actual_start_date')->textInput() ?>

                    <?= $form->field($model, 'actual_end_date')->textInput() ?>

                    <?= $form->field($model, 'actual_asset_start_date')->textInput() ?>

                    <?= $form->field($model, 'asset_id')->textInput() ?>

                    <?= $form->field($model, 'status')->textInput() ?>

                    <?= $form->field($model, 'created_at')->textInput() ?>

                    <?= $form->field($model, 'updated_at')->textInput() ?>

                    <?= $form->field($model, 'created_by')->textInput() ?>

                    <?= $form->field($model, 'updated_by')->textInput() ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
