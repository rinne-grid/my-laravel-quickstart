<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model
{
    // 複数代入を防ぐ
    protected $fillable = ['name'];

    // タスク所有ユーザの取得
    public function user() {
        return $this->belongsTo(User::class);
    }
}
