<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class GetAccountDetailsInternalServerErrorException extends \RuntimeException implements ServerException
{
    function __construct()
    {
        parent::__construct('server error', 500);
    }
}