<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace yiister\adminlte\widgets;

use rmrevin\yii\fontawesome\component\Icon;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Menu extends \yii\widgets\Menu
{
    /**
     * @inheritdoc
     */
    public $labelTemplate = '{label}';

    /**
     * @inheritdoc
     */
    public $linkTemplate = '<a href="{url}">{icon}<span>{label}</span>{badge}</a>';

    /**
     * @inheritdoc
     */
    public $submenuTemplate = "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n";

    /**
     * @inheritdoc
     */
    public $activateParents = true;

    /**
     * @inheritdoc
     */
    public function init()
    {
        Html::addCssClass($this->options, 'sidebar-menu');
        parent::init();
    }

    /**
     * @inheritdoc
     */
    protected function renderItem($item)
    {
        $renderedItem = parent::renderItem($item);
        if (isset($item['badge'])) {
            $badgeOptions = ArrayHelper::getValue($item, 'badgeOptions', []);
            Html::addCssClass($badgeOptions, 'label pull-right');
        } else {
            $badgeOptions = null;
        }
        return strtr(
            $renderedItem,
            [
                '{icon}' => isset($item['icon'])
                    ? new Icon($item['icon'], ArrayHelper::getValue($item, 'iconOptions', []))
                    : '',
                '{badge}' => (
                    isset($item['badge'])
                        ? Html::tag('small', $item['badge'], $badgeOptions)
                        : ''
                    ) . (
                    isset($item['items']) && count($item['items']) > 0
                        ? new Icon('fa fa-angle-left pull-right')
                        : ''
                    ),
            ]
        );
    }
}
