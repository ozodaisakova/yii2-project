<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>





<?= $content ?>
<div class="ui inverted vertical  segment">
  <div class="ui container">
    <div class="ui stackable inverted divided equal height stackable grid">
      <div class="three wide column">
        <h4 class="ui inverted header">Информация</h4>
        <div class="ui inverted link list">
          <a href="#" class="item">Карта сайта</a>
          <a href="#" class="item">Контакты</a>
          <a href="#" class="item">О нас</a>
        </div>
      </div>
      <div class="three wide column">
        <h4 class="ui inverted header">Каталог</h4>
        <div class="ui inverted link list">
          <a href="#" class="item">Приправы</a>
          <a href="#" class="item">Специи</a>
          <a href="#" class="item">Перец</a>
          <a href="#" class="item">Супы</a>
          <a href="#" class="item">Кисели</a>
        </div>
      </div>
      <div class="seven wide column">
        <h4 class="ui inverted header">Омега специи, 2018</h4>
        <p>Секреты ваших блюд</p>
      </div>
    </div>
  </div>
</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
