<?php

namespace Ziftr\ApiClient\Exceptions;

class GatewayTimeoutException extends Base
{

  public function __construct(\Ziftr\ApiClient\Configuration $Configuration, $message = "", $code = 404, \Exception $previous = NULL) {
    parent::__construct($Configuration, $message,$code,$previous);
  }

}