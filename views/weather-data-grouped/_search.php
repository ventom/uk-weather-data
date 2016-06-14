<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WeatherDataGroupedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="weather-data-grouped-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'site_code') ?>

    <?= $form->field($model, 'site_name') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'observation_date') ?>

    <?php // echo $form->field($model, 'wind_speed_avg') ?>

    <?php // echo $form->field($model, 'wind_speed_min') ?>

    <?php // echo $form->field($model, 'wind_speed_max') ?>

    <?php // echo $form->field($model, 'visibility_avg') ?>

    <?php // echo $form->field($model, 'visibility_min') ?>

    <?php // echo $form->field($model, 'visibility_max') ?>

    <?php // echo $form->field($model, 'screen_temperature_avg') ?>

    <?php // echo $form->field($model, 'screen_temperature_min') ?>

    <?php // echo $form->field($model, 'screen_temperature_max') ?>

    <?php // echo $form->field($model, 'pressure_avg') ?>

    <?php // echo $form->field($model, 'pressure_min') ?>

    <?php // echo $form->field($model, 'pressure_max') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
