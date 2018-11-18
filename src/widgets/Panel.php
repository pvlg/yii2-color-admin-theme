<?php

namespace pvlg\yii2\ColorAdminTheme\widgets;

use yii\base\Widget;
use yii\bootstrap4\Html;

class Panel extends Widget
{
    public $options = ['class' => 'panel panel-inverse'];

    public $title = null;
    public $header = false;

    public $expandable = false;
    public $reloadable = false;
    public $collapsable = false;
    public $removable = false;

    public $collapsed = false;

    public $bodyOptions = ['class' => 'panel-body'];

    public function init()
    {
        parent::init();

        $this->registerAssets();

        ob_start();

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->id;
        }

        echo Html::beginTag('div', $this->options);

        if ($this->title !== null || $this->header !== false) {
            echo Html::beginTag('div', ['class' => 'panel-heading ui-sortable-handle']);

            if ($this->expandable || $this->reloadable || $this->collapsable || $this->reloadable) {
                echo Html::beginTag('div', ['class' => 'panel-heading-btn']);

                if ($this->expandable) {
                    echo Html::a('<i class="fa fa-expand"></i>', 'javascript:;', [
                        'class' => 'btn btn-xs btn-icon btn-circle btn-default',
                        'data' => [
                            'click' => 'panel-expand',
                        ],
                    ]);
                }

                if ($this->reloadable) {
                    echo Html::a('<i class="fa fa-redo"></i>', 'javascript:;', [
                        'class' => 'btn btn-xs btn-icon btn-circle btn-success',
                        'data' => [
                            'click' => 'panel-reload',
                        ],
                    ]);
                }

                if ($this->collapsable) {
                    echo Html::a('<i class="fa fa-minus"></i>', 'javascript:;', [
                        'class' => 'btn btn-xs btn-icon btn-circle btn-warning',
                        'data' => [
                            'click' => 'panel-collapse',
                        ],
                    ]);
                }

                if ($this->reloadable) {
                    echo Html::a('<i class="fa fa-times"></i>', 'javascript:;', [
                        'class' => 'btn btn-xs btn-icon btn-circle btn-danger',
                        'data' => [
                            'click' => 'panel-remove',
                        ],
                    ]);
                }

                echo Html::endTag('div');
            }

            if ($this->title !== null) {
                echo Html::tag('h4', $this->title, ['class' => 'panel-title']);
            }

            echo Html::endTag('div');
        }

        if ($this->collapsed === true) {
            Html::addCssStyle($this->bodyOptions, 'display: none;');
        }

        echo Html::beginTag('div', $this->bodyOptions);
    }

    public function run()
    {
        echo Html::endTag('div');
        echo Html::endTag('div');

        return ob_get_clean();
    }

    public function registerAssets()
    {
        $view = $this->getView();

        $view->registerJs("jQuery('#{$this->id} [data-click=panel-collapse]').click(function(){
            localStorage.setItem('{$this->id}', 1);
        })");
    }
}
