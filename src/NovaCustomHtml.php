<?php

namespace Nurmuhammet\NovaCustomHtml;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportsDependentFields;

class NovaCustomHtml extends Field
{
    use SupportsDependentFields;
    
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-custom-html';

    /**
     * Make field html
     *
     * @var string
     */
    public function html(string $html)
    {
        return $this->withMeta(['html' => $html]);
    }

    /**
     * Alert if there is message
     *
     * @var string
     */
    public function alert(string $message)
    {
        return $this->withMeta(['alert_message' => $alert_message]);
    }

    public function hidden(bool $hidden = true)
    {
        return $this->withMeta(['hidden' => $hidden]);
    }
}
