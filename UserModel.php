<?php

namespace antonkorotkyi\phpmvc;

use antonkorotkyi\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

}