<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WeatherDataGrouped */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="weather-data-grouped-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site_code')->textInput() ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation_date')->textInput() ?>

    <?= $form->field($model, 'wind_speed_avg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wind_speed_min')->textInput() ?>

    <?= $form->field($model, 'wind_speed_max')->textInput() ?>

    <?= $form->field($model, 'visibility_avg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visibility_min')->textInput() ?>

    <?= $form->field($model, 'visibility_max')->textInput() ?>

    <?= $form->field($model, 'screen_temperature_avg')->textInput() ?>

    <?= $form->field($model, 'screen_temperature_min')->textInput() ?>

    <?= $form->field($model, 'screen_temperature_max')->textInput() ?>

    <?= $form->field($model, 'pressure_avg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pressure_min')->textInput() ?>

    <?= $form->field($model, 'pressure_max')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
