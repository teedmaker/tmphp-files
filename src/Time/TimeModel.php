<?php

namespace TMPHP\Files\Time;

abstract class TimeModel
{
    abstract public function __construct($object);

    abstract public function isGreaterThan($object);

    abstract public function isLessThan($object);

}
