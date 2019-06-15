<?php namespace Nirjankhadka\Work\Components;

use Cms\Classes\ComponentBase;
use Nirjankhadka\Work\Models\Work;

class WorkGrid extends ComponentBase 
{
    public function componentDetails()
    {
        return [
            'name' => 'Work Grid',
            'description' => 'Shows all the work that is set to visible in a grid'
        ];
    }

    protected function loadWork(){
        return Work::all();
    }

    public function onRun()
    {
        $this->work = $this->loadWork();
    }

    public $work;
}
