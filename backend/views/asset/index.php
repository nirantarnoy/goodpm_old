<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use backend\assets\ICheckAsset;
use lavrentiev\widgets\toastr\Notification;
use dosamigos\multiselect\MultiSelect;
use yii\helpers\ArrayHelper;

ICheckAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AssetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'เครื่องจักร');
$this->params['breadcrumbs'][] = $this->title;

$catall = \backend\models\Assetgroup::find()->where(['!=','name',''])->orderby(['name'=>SORT_ASC])->all();

$this->registerJsFile(
    '@web/js/stockbalancejs.js?V=001',
    ['depends' => [\yii\web\JqueryAsset::className()]],
    static::POS_END
);
?>
<div class="asset-index">
    <?php $session = Yii::$app->session;
    if ($session->getFlash('msg')): ?>
        <!-- <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php //echo $session->getFlash('msg'); ?>
      </div> -->
        <?php echo Notification::widget([
            'type' => 'success',
            'title' => 'แจ้งผลการทำงาน',
            'message' => $session->getFlash('msg'),
            //  'message' => 'Hello',
            'options' => [
                "closeButton" => false,
                "debug" => false,
                "newestOnTop" => false,
                "progressBar" => false,
                "positionClass" => "toast-top-center",
                "preventDuplicates" => false,
                "onclick" => null,
                "showDuration" => "300",
                "hideDuration" => "1000",
                "timeOut" => "6000",
                "extendedTimeOut" => "1000",
                "showEasing" => "swing",
                "hideEasing" => "linear",
                "showMethod" => "fadeIn",
                "hideMethod" => "fadeOut"
            ]
        ]); ?>
    <?php endif; ?>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="x_panel">
        <div class="x_title">
            <div class="btn-group">
                <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> สร้างเครื่องจักร'), ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="btn-group">
                <div class="btn btn-default"><i class="fa fa-upload"></i> นำเข้า</div>
                <div class="btn btn-default"><i class="fa fa-download"></i> นำออก</div>
                <div class="btn btn-default"><i class="fa fa-thumbs-up"></i> ใบสั่งงานทั้งหมด</div>
                <div class="btn btn-default btn-bulk-remove"><i class="fa fa-trash"></i><span class="remove_item"></span> ลบ</div>
                <div class="btn btn-default"><i class="fa fa-ban"></i> ยกเลิกการใช้งาน</div>
                <div class="btn btn-default"><i class="fa fa-print"></i> พิมพ์</div>
                <div class="btn btn-default"><i class="fa fa-barcode"></i> พิมพ์บาร์โค้ด</div>

            </div>
            <h4 class="pull-right"><?=$this->title?> <i class="fa fa-cubes"></i><small></small></h4>
            <!-- <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul> -->
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-lg-9">
                    <form id="search-form" action="<?=Url::to(['product/index'],true)?>" method="post">
                        <div class="form-inline">

                            <input type="text" class="form-control" name="search_all" value="" placeholder="ค้นหารหัส,ชื่อ">
                            <?php
                            echo MultiSelect::widget([
                                'id'=>"product_group",
                                'name'=>'product_group[]',
                                //'model'=>null,
                                "options" => ['multiple'=>"multiple",
                                    'onchange'=>''], // for the actual multiselect
                                'data' => count($catall)==0?['ไม่มีข้อมูล']:ArrayHelper::map($catall,'id','name'), // data as array
                                'value' => null, // if preselected
                                "clientOptions" =>
                                    [
                                        "includeSelectAllOption" => true,
                                        'numberDisplayed' => 5,
                                        'nonSelectedText'=>'หมวดเครื่องจักร',
                                        'enableFiltering' => true,
                                        'enableCaseInsensitiveFiltering'=>true,
                                    ],
                            ]); ?>
                            <?php
                            echo MultiSelect::widget([
                                'id'=>"asset_status",
                                'name'=>'asset_status[]',
                                //'model'=>null,
                                "options" => ['multiple'=>"multiple",
                                    'onchange'=>''], // for the actual multiselect
                                'data' => count($catall)==0?['ไม่มีข้อมูล']:ArrayHelper::map(\backend\helpers\AssetStatus::asArrayObject(),'id','name'), // data as array
                                'value' => null, // if preselected
                                "clientOptions" =>
                                    [
                                        "includeSelectAllOption" => true,
                                        'numberDisplayed' => 5,
                                        'nonSelectedText'=>'สถานะ',
                                        'enableFiltering' => true,
                                        'enableCaseInsensitiveFiltering'=>true,
                                    ],
                            ]); ?>

                            <div class="btn-group">
                                <div class="btn btn-info btn-search"> ค้นหา</div>
                                <div class="btn btn-default btn-reset"> รีเซ็ต</div>
                            </div>


                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div class="pull-right">
                        <form id="form-perpage" class="form-inline" action="<?=Url::to(['unit/index'],true)?>" method="post">
                            <div class="form-group">
                                <label>แสดง </label>
                                <select class="form-control" name="perpage" id="perpage">
                                    <option value="20" <?=$perpage=='20'?'selected':''?>>20</option>
                                    <option value="50" <?=$perpage=='50'?'selected':''?> >50</option>
                                    <option value="100" <?=$perpage=='100'?'selected':''?>>100</option>
                                </select>
                                <label> รายการ</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
            <div class="table-responsive">
                <div class="table-grid">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'emptyCell'=>'-',
                        'layout'=>'{items}{summary}{pager}',
                        'summary' => "แสดง {begin} - {end} ของทั้งหมด {totalCount} รายการ",
                        'showOnEmpty'=>false,
                        'tableOptions' => ['class' => 'table table-hover'],
                        'emptyText' => '<div style="color: red;align: center;"> <b>ไม่พบรายการไดๆ</b></div>',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn', 'contentOptions' => ['style' => 'vertical-align: middle'],],
                            ['class' => 'yii\grid\CheckboxColumn','headerOptions' => ['style' => 'text-align: center'],'contentOptions' => ['style' => 'vertical-align: middle;text-align: center;']],


                            // 'id',
                            [
                                  'attribute' => 'asset_code',
                                 'contentOptions' => ['style' => 'vertical-align: middle'],
                            ],
                            [
                                'attribute' => 'name',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                            ],
                            [
                                'attribute' => 'asset_category_id',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                                'value' => function($data){
                                    return \backend\models\Assetgroup::findCatcode($data->asset_category_id);
                                }
                            ],
                            //'plant_id',

                            [
                                'attribute' => 'department_id',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                                'value' => function($data){
                                    return \backend\models\Department::findDepartmentcode($data->department_id);
                                }
                            ],
                            [
                                'attribute' => 'section_id',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                                'value' => function($data){
                                    return \backend\models\Section::findSectionname($data->section_id);
                                }
                            ],
                            [
                                'attribute' => 'location_id',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                                'value' => function($data){
                                    return \backend\models\Location::findLocationname($data->location_id);
                                }
                            ],
                            [
                                'attribute' => 'last_pm',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                            ],
                            [
                                'attribute' => 'next_pm',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                            ],

                            //'worktrade_id',
                            //'priority_id',
                            //'supplier_id',
                            //'manufacturer',
                            //'model',
                            //'serial_no',
                            //'service_no',
                            //'install_date',
                            //'install_by',
                            //'responsible',
                            //'counting_group',
                            //'critical_type',
                            //'last_pm',
                            //'next_pm',
                            //'cost',
                            //'value_amount',
                            //'incoming_date',
                            //'expiration_date',
                            //'default_location',
                            //'notes:ntext',
                            [
                                'attribute'=>'status',
                                'contentOptions' => ['style' => 'vertical-align: middle'],
                                'format' => 'html',
                                'value'=>function($data){
                                    return $data->status === 1 ? '<div class="label label-success">Active</div>':'<div class="label label-default">Inactive</div>';
                                }
                            ],

                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
    <?php Pjax::end(); ?>
</div>
