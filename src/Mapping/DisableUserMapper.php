<?php

namespace App\Mapping;

use App\Entity\Address;
use App\Entity\Hotel;
use App\Entity\User;
use App\Request\Hotel\PutHotelRequest;
use TheSeer\Tokenizer\NamespaceUriException;

class DisableUserMapper
{
    public function mapping(User $user)
    {
        $user->setDiabled(true);

        return $user;
    }
}