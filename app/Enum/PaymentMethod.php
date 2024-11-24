<?php

namespace App\Enum;

enum PaymentMethod : string
{
    case SYRIATEL = 'syriatel';
    case MTN = 'mtn';
    case VISA = 'visa';
    case STRIPE = 'Stripe';
}
