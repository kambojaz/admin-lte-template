<?php namespace SleepingOwl\Admin\FormItems;

use SleepingOwl\Admin\FormItems\Textarea;


class Code extends Textarea
{
    protected $view = 'code';
    protected $rows = 10;


    public function getParams()
    {
        return parent::getParams() + [
            'name'      => $this->name(),
            'label'     => $this->label(),
            'readonly'  => $this->readonly(),
            'value'     => $this->value(),
            'rows'      => $this->rows()
        ];
    }

    public function rows($rows = null)
    {
        if (is_null($rows))
        {
            return $this->rows;
        }
        $this->rows = $rows;
        return $this;
    }

}