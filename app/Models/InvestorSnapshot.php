<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorSnapshot extends Model
{
    protected $fillable = [
        'symbol',
        'price',
        'change_text',
        'market_cap',
        'range_52w',
        'shares_outstanding',
        'session_open',
        'session_high',
        'session_low',
        'session_volume',
    ];

    public static function current(): self
    {
        return static::query()->firstOrCreate([], [
            'symbol' => 'PSX: BEAU',
            'price' => '152.00',
            'change_text' => '+4.25 (+2.88%)',
            'market_cap' => '$1.24 Billion',
            'range_52w' => '$95.00 - $152.00',
            'shares_outstanding' => '8.35 Million',
            'session_open' => '$142.30',
            'session_high' => '$149.20',
            'session_low' => '$141.80',
            'session_volume' => '1.45M',
        ]);
    }

    /** @return array<string, string> */
    public function toPageArray(): array
    {
        return [
            'symbol' => $this->symbol,
            'price' => $this->price,
            'change' => $this->change_text,
            'market_cap' => $this->market_cap,
            'range_52w' => $this->range_52w,
            'shares_outstanding' => $this->shares_outstanding,
            'session_open' => $this->session_open ?? '—',
            'session_high' => $this->session_high ?? '—',
            'session_low' => $this->session_low ?? '—',
            'session_volume' => $this->session_volume ?? '—',
        ];
    }
}
