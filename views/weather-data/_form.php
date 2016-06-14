<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WeatherData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="weather-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site_code')->textInput() ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observation_date')->textInput() ?>

    <?= $form->field($model, 'wind_direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wind_speed')->textInput() ?>

    <?= $form->field($model, 'wind_gust')->textInput() ?>

    <?= $form->field($model, 'visibility')->textInput() ?>

    <?= $form->field($model, 'screen_temperature')->textInput() ?>

    <?= $form->field($model, 'pressure')->textInput() ?>

    <?= $form->field($model, 'pressure_tendency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'signifficant_weather')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
