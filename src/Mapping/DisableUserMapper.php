<?php

namespace App\Mapping;

use App\Entity\Address;
use App\Entity\Hotel;
use App\Entity\User;
use App\Request\Hotel\PutHotelRequest;
use TheSeer\Tokenizer\NamespaceUriException;

class DisableUserMapper
{
    public function disable(User $user)
    {
        $user->setDisabled(true);

        return $user;
    }

    public function unDisable(User $user)
    {
        $user->setDisabled(false);

        return $user;
    }
}