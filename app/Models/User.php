<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Paddle\Billable;

class User extends Authenticatable
{
    use HasFactory, Notifiable  ,  Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'companyName' ,
        'email',
        'password',
        'phone',
        'photo',
        'logo',
        'Tc_id',
        'license',
        'is_company',
        'full_data',
        'birth_date',
    ];

    public function userCars() {
        return $this->hasMany(Car::class , 'cars_id');
    }


    public function companyYerlerPoints() {
        return $this->hasMany(YerlerPoints::class , 'company_id');
    }


    public function userPayment() {
        return $this->hasMany(Payment::class , 'user_id');
    }

    public function userLeasing() {
        return $this->hasMany(Leasing::class , 'user_id');
    }

    public function userViolation() {
        return $this->hasMany(Violation::class , 'user_id');
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
