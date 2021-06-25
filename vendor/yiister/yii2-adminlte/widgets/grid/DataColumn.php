<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace yiister\adminlte\widgets\grid;

use yii\helpers\Html;

class DataColumn extends \yii\grid\DataColumn
{
    public function renderHeaderCell()
    {
        $provider = $this->grid->dataProvider;
        if ($this->attribute !== null && $this->enableSorting &&
            ($sort = $provider->getSort()) !== false && $sort->hasAttribute($this->attribute)) {
            if (($direction = $sort->getAttributeOrder($this->attribute)) !== null) {
                Html::addCssClass($this->headerOptions, 'sorting_' . ($direction === SORT_DESC ? 'desc' : 'asc'));
            } else {
                Html::addCssClass($this->headerOptions, 'sorting');
            }
        }
        return Html::tag('th', $this->renderHeaderCellContent(), $this->headerOptions);
    }
}
