<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace yiister\adminlte\widgets;

use rmrevin\yii\fontawesome\component\Icon;
use Yii;
use yii\base\Widget;
use yii\bootstrap\Alert;
use yii\helpers\Html;

class FlashAlert extends Widget
{
    /**
     * @var array the HTML attributes for the wrapper tag
     */
    public $options = [];

    /**
     * @var array flashes definition
     */
    public $flashes = [
        'success' => [
            'class' => 'success',
            'header' => 'Success!',
            'icon' => 'check',
        ],
        'info' => [
            'class' => 'info',
            'header' => 'Info!',
            'icon' => 'info-circle',
        ],
        'warning' => [
            'class' => 'warning',
            'header' => 'Warning!',
            'icon' => 'warning',
        ],
        'error' => [
            'class' => 'error',
            'header' => 'Error!',
            'icon' => 'ban',
        ],
    ];

    /**
     * @var bool show an alert header
     */
    public $showHeader = false;

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        echo Html::beginTag('div', $this->options);
        foreach ($this->flashes as $flashName => $alert) {
            if (Yii::$app->session->hasFlash($flashName)) {
                $header = '';
                if ($this->showHeader) {
                    $header = Html::tag(
                        'h4',
                        (isset($alert['icon']) ? new Icon($alert['icon']) . '&nbsp;' : '') . $alert['header']
                    );
                }
                echo Alert::widget(
                    [
                        'body' => $header . Yii::$app->session->getFlash($flashName),
                        'options' => [
                            'class' => 'alert alert-' . $alert['class'],
                        ],
                    ]
                );
            }
        }
        echo Html::endTag('div');
    }
}
