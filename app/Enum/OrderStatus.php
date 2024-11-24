<?php

namespace App\Enum;

enum OrderStatus :string
{
    case PENDING = 'pending';

    case COMPLETED = 'completed';

    case CANCELED = 'canceled';

    case IN_PROGRESS = 'in_progress';

}
