<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Mail\SendCodeMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'sex',
        'tgl_lahir',
        'email',
        'password',
        'google_id',
        'isaktif'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function generateCode()
    {
        $code = rand(1000, 9999);
        $code_expired = now()->addMinutes(10);

        UserCode::updateOrCreate(
            ['user_id' => auth()->user()->id,
            'code' => $code,
            'code_expired' => $code_expired],
        );

        try {

            $details = [
                'title' => 'Mail from beresdigital.com',
                'code' => $code
            ];

            Mail::to(auth()->user()->email)->send(new SendCodeMail($details));
        } catch (\Exception $e) {
            info("Error: " . $e->getMessage());
        }
    }
}
