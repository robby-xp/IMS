<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">
    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                <p>Administrator</p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i> Ubah Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?= Url::toRoute('/site/logout') ?>" class="btn btn-default btn-flat"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="<?= Url::toRoute('/site/logout') ?>" class="btn btn-flat"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
</header>
