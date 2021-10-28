<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Diario extends AbstractAction
{
    public function getTitle()
    {
        return 'Diário';
    }

    public function getIcon()
    {
        return 'voyager-categories';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.diarios.index',['obra' => $this->data]);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'sys-obra';
    }
}
