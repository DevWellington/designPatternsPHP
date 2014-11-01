<?php

namespace Ribeiro\Request;

class Request implements IRequest
{
    /**
     * @var (edit, insert, delete, etc)
     */
    private $mode;

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param mixed $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

}