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

class ClassName extends CForm {

    /**
     * Form sizes
     */
    const FORM_SIZE_SMALL = 'small';
    const FORM_SIZE_LARGE = 'large';

    /**
     * @var string the name of the class for representing a form input element. Defaults to 'SemanticFormInputElement'.
     */
    public $inputElementClass = 'SemanticFormInputElement';

    /**
     * @var string the name of the class for representing a form button element. Defaults to 'SemanticFormButtonElement'.
     */
    public $buttonElementClass = 'SemanticFormButtonElement';

    /**
     * @var string form buttons area template.
     */
    public $formButtonsAreaTemplate = '%s';

    /**
     * Renders the {@link buttons} in this form.
     * @return string the rendering result
     */
    public function renderButtons() {
        $output = '';
        foreach ($this->getButtons() as $button) {
            $output .= $this->renderElement($button);
        }
        return '' !== $output ? sprintf($this->formButtonsAreaTemplate, $output) : '';
    }

    /**
     * Renders the body content of this form.
     * This method mainly renders {@link elements} and {@link buttons}.
     * If {@link title} or {@link description} is specified, they will be rendered as well.
     * And if the associated model contains error, the error summary may also be displayed.
     * The form tag will not be rendered. Please call {@link renderBegin} and {@link renderEnd}
     * to render the open and close tags of the form.
     * You may override this method to customize the rendering of the form.
     * @return string the rendering result
     */
    public function renderBody() {
        $output = '';
        if ($this->title !== null) {
            if ($this->getParent() instanceof self) {
                $attributes = $this->attributes;
                unset($attributes['name'], $attributes['type']);
                $output     = CHtml::openTag('fieldset', $attributes) . "<legend>" . $this->title . "</legend>\n";
            } else {
                $output = "<fieldset>\n<legend>" . $this->title . "</legend>\n";
            }
        }

        if ($this->description !== null) {
            $output.="<div class=\"description\">\n" . $this->description . "</div>\n";
        }

        if ($this->showErrorSummary && ($model = $this->getModel(false)) !== null) {
            $output.=$this->getActiveFormWidget()->errorSummary($model) . "\n";
        }

        $output .= $this->renderElements() . "\n" . $this->renderButtons() . "\n";

        if ($this->title !== null) {
            $output.="</fieldset>\n";
        }

        return $output;
    }

}
