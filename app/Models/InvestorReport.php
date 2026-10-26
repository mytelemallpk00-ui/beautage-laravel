<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorReport extends Model
{
    protected $fillable = [
        'badge_label',
        'badge_tone',
        'title',
        'description',
        'file_label',
        'download_message',
        'sort_order',
    ];

    /** @return array<string, string> */
    public function badgeClasses(): array
    {
        return match ($this->badge_tone) {
            'pink' => ['wrap' => 'bg-pink-100 text-beautage-pink', 'icon' => 'text-beautage-purple'],
            'emerald' => ['wrap' => 'bg-emerald-100 text-emerald-700', 'icon' => 'text-emerald-600'],
            default => ['wrap' => 'bg-purple-100 text-beautage-purple', 'icon' => 'text-beautage-pink'],
        };
    }
}
