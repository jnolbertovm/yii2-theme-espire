<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use nolbertovilchez\yii2\theme\espire\assets\EspireLoginAsset;
use app\assets\AppAsset;

EspireLoginAsset::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="app ">
            <div class="authentication">
                <div class="sign-in-2">
                     <?= $content ?>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var Request = {
                Host: '<?= \yii::$app->request->hostInfo ?>',
                BaseUrl: '<?= \yii::$app->homeUrl ?>',
                _GET: <?= json_encode(\yii::$app->request->get()) ?>,
                UrlHash: {
                    m: '<?= (\yii::$app->controller->module->id) ?>',
                    c: '<?= (\yii::$app->controller->id) ?>',
                    a: '<?= (\yii::$app->controller->action->id) ?>'
                }
            };
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
