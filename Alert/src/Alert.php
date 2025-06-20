<?php

namespace Saicoder\Alert;

class Alert
{
    public function success($message)
    {
        $this->flash('success', $message);
    }

    public function danger($message)
    {
        $this->flash('danger', $message);
    }

    public function info($message)
    {
        $this->flash('info', $message);
    }

    public function warning($message)
    {
        $this->flash('warning', $message);
    }

    protected function flash($level, $message)
    {
        session()->flash('alert.level', $level);
        session()->flash('alert.message', $message);
    }
}
