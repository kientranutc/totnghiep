<?php
namespace frontend\common;
use yii;
use yii\bootstrap\Html;
use frontend\common\UrlTransliterate;

class BaseHelper
{
    public static function rewriteUrl($id, $title, $action)
    {
        $link = yii::$app->urlManager->baseUrl . '/' . $action . '/' . UrlTransliterate::cleanString($title) . '-' . $id . '.html';
        return Html::decode($link);
    }
     public static function rewriteUrlfilter($thuoctinh,$size, $action)
    {
        $link = yii::$app->urlManager->baseUrl . '/' . $action . '/'.$thuoctinh .'-'. $size . '.html';
        return Html::decode($link);
    }
}