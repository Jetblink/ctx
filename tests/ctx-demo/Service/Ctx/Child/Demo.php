<?php

namespace Tests\Tree6bee\Ctx\Service\Ctx\Child;

use Tests\Tree6bee\Ctx\Basic\Ctx;

class Demo extends Ctx
{
    protected $log = "";

    /**
     * @var string
     */
    private $prefix;

    /**
     * @var string
     */
    private $middle;

    public function __construct($prefix)
    {
        $this->prefix = $prefix;
    }

    public function init()
    {
        $this->middle = ' ';
    }

    public function setMessage($name)
    {
        $this->log = $this->prefix . $this->middle . $name;

        return true;
    }

    public function getMessage()
    {
        return $this->log;
    }
}
