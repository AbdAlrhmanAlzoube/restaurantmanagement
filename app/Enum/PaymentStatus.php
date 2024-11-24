<?php

namespace App\Enum;

enum PaymentStatus :string
{
    case Unpaid = 'unpaid';
    case Paid = 'paid';
    case Pending = 'pending';
    case Cancelled = 'cancelled';
}
