<?php

namespace App\Enum;

enum OrderType: string
{
    case INTERNAL = 'internal'; //داخلي
    
    case EXTERNAL = 'external';//خارجي
    
    public function description(): string
    {
        return match($this) {
            self::INTERNAL => 'Internal order (e.g., dine-in)',
            self::EXTERNAL => 'External order (e.g., delivery or takeaway)',
        };
    }
}
