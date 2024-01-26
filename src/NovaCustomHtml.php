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
    public function html(string $html): self
    {
        return $this->withMeta(['html' => $html]);
    }

    /**
     * Full width
     */
    public function fullWidth(): self
    {
        return $this->withMeta(['fullWidth' => true]);
    }

    /**
     * Alert if there is message
     *
     * @var string
     */
    public function alert(string $message): self
    {
        return $this->withMeta(['alert_message' => $alert_message]);
    }

    /**
     * Hide 
     * @param  bool|boolean
     */
    public function hidden(bool $hidden = true): self
    {
        return $this->withMeta(['hidden' => $hidden]);
    }
}
