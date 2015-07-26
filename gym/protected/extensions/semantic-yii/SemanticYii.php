<?php

/*
 * The MIT License
 *
 * Copyright 2014 Vadim Oparin <snusmumriken@art-focus.ru>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

defined('DS') or define('DS', DIRECTORY_SEPARATOR);

class SemanticYii extends CApplicationComponent {

    /**
     * @var bool whether we should copy the asset file or directory even if it is already published before.
     */
    public $forceCopyAssets = false;

    /**
     * @var string holds the published assets
     */
    protected $_assetsUrl;

    /**
     * @var array core css assets
     */
    public $coreCss = array(
        'semantic.min',
        'quazatron.colorscheme',
    );

    /**
     * @var array core javascript assets
     */
    public $coreJavascript = array(
        'semantic.min',
    );

    /**
     * Returns the assets URL.
     * Assets folder has few orphan and very useful utility libraries.
     * @return string
     */
    public function getAssetsUrl() {
        return $this->_assetsUrl ? : $this->_assetsUrl = Yii::app()->assetManager->publish(
        Yii::getPathOfAlias('semantic-yii') . DS . 'assets', false, -1, $this->forceCopyAssets
        );
    }

    /**
     * Registers a specific css in the asset's css folder
     * @param string $filename the css file name to register
     * @param string $media the media that the CSS file should be applied to. If empty, it means all media types.
     * @see CClientScript::registerCssFile
     * @return $this
     */
    public function registerAssetCss($filename, $media = '') {
        Yii::app()->getClientScript()->registerCssFile($this->assetsUrl . "/css/{$filename}.css", $media);
        return $this;
    }

    /**
     * Register a specific javascript file in the asset's javascript folder
     * @param string $filename the javascript file name to register
     * @param int $position the position of the JavaScript code.
     * @see CClientScript::registerScriptFile
     * @return $this
     */
    public function registerAssetJs($filename, $position = CClientScript::POS_END) {
        Yii::app()->getClientScript()->registerScriptFile($this->assetsUrl . "/javascript/{$filename}.js", $position);
        return $this;
    }

    /**
     * Initializes component
     */
    public function init() {
        /* ensure all helpers are accessible to the library */
        Yii::import('semantic-yii.helpers.*');

        /* register core css assets */
        foreach ($this->coreCss as $css) {
            $this->registerAssetCss($css);
        }

        /* register core js assets */
        foreach ($this->coreJavascript as $javascript) {
            $this->registerAssetJs($javascript);
        }
    }

}
