<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department_name')->textInput(['minlength' => true]) ?>

    <?= $form->field($model, 'location_id')->textInput(['minlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Save',['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
