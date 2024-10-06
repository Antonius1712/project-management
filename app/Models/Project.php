<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'projects';

    protected $fillable = [
        'category_id',
        'client_id',
        'developer_id',
        'name',
        'start_date',
        'end_date',
        'payment_status_id',
        'description',
        'notes',
    ];

    public function client() {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function developer() {
        return $this->hasOne(User::class, 'id', 'developer_id');
    }

    public function payment() {
        return $this->hasOne(PaymentStatus::class, 'id', 'payment_status_id');
    }

    protected function startDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d M Y'),
            set: fn (string $value) => Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d'),
        );
    }

    protected function endDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d M Y'),
            set: fn (string $value) => Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d'),
        );
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d',
            'deleted_at' => 'datetime:Y-m-d',
        ];
    }
}
