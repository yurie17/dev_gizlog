<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\SearchingScope;

class DailyReport extends Model
{

    use SoftDeletes,SearchingScope;

    protected $fillable = [
        'user_id',
        'title',
        'contents',
        'reporting_time',
    ];

    protected $dates = [
        'reporting_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fetchAllPersonalReports($userId)
    {
        return $this->filterEqual('user_id', $userId)
                    ->orderby('created_at', 'desc')
                    ->get();
    }

    public function fetchSearchingPersonalReports($userId,$conditions)
    {
        return $this->filterEqual('user_id', $userId)
                    ->filterLike('reporting_time', $conditions['search-month'])
                    ->orderby('reporting_time', 'desc')
                    ->get();
    }
}
