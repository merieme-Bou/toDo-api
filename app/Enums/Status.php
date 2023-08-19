<?php
declare (strict_types=1);
namespace app\Enume;


enum Status: string
{
    case OPEN = 'open';
    case IN_PROGRESS = 'in progress';
    case COMPLETE = 'complete';
}

