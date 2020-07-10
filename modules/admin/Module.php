<?php

namespace app\modules\admin;

use Yii;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function beforeAction($action)
    {
        parent::beforeAction($action);
        if (Yii::$app->user->isGuest) {
            Yii::$app->getResponse()->redirect(Yii::$app->user->loginUrl);
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }
}
