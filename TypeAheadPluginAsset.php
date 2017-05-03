<?php
/**
 * @link https://github.com/2amigos/yii2-type-ahead-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace ptech\typeahead;

use yii\web\AssetBundle;

/**
 * TypeAheadPluginAsset
 *
 * @author Pyrotechsolutions <contactus@pyrotechsolutions.com>
 */
class TypeAheadPluginAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }

    public $js = [
        'js/typeahead.bundle.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'ptech\typeahead\TypeAheadAsset',
    ];
}
