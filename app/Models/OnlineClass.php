<?php

namespace App\Models;

use App\Settings\GeneralSettings;
use App\User;
use App\Traits\ModelLogger;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class OnlineClass extends Model
{
    use ModelLogger;
    protected $guarded = [];
    public $table = 'online_classe_jitsi';

    protected $casts = [
        'start_at' => 'datetime'
    ];

   

    public function createAgoraProject($name){
        $customerKey = env('customerKey');
        $customerSecret = env('customerSecret');
        $credentails = $customerKey. ":".$customerSecret;
        $base64credentials = base64_encode($credentails);
        $arr_header = "Authorization:Basic" . $base64credentials;
        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, "https://api.agora.io/v1/apps/".$
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
    public function grade()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }
    // public function getStartAtAttribute()
    // {
    //     return Carbon::parse($this->attributes['start_at'], app(GeneralSettings::class)->timezone)->setTimezone(config('app.timezone'));
    // }


    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom', 'classroom_id');
    }


    public function group()
    {
        return $this->belongsTo('App\Models\Group', 'group_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function package()
    {
        return $this->belongsTo(package::class, 'package_id');
    }
}
