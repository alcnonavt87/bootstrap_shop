<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?php echo $form->field($model, 'imageFile')->widget(\kartik\file\FileInput::classname(),[
    'options' => [
        'accept' => 'image/*',
    ],
    'pluginOptions' => [
        'uploadUrl' =>  \yii\helpers\Url::to(['file-upload-general']),
        'uploadExtraData' => [
            'advert_id' => 1,
        ],
        'allowedFileExtensions' =>  ['jpg', 'png','gif'],

        'showUpload' => true,

    ]
]);
echo \yii\helpers\Url::to(['upload']);
?>

    <button>Submit</button>

<?php ActiveForm::end() ?>


