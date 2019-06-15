<?php namespace Nirjankhadka\Work;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Nirjankhadka\Work\Components\WorkGrid' => 'workGrid'
        ];
    }

    public function registerSettings()
    {
    }
}
