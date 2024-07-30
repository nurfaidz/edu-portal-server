<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Roles\Role;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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

    public function getRoleAttribute()
    {
        return $this->getRoleNames()->first();
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    /**
     * Scope
     */

    public function scopeSuperadmin()
    {
        return $this->role(Role::Superadmin->value, 'superadmin');
    }

    // Admin
    public function scopeAdmin(){
        return $this->role(Role::Admin->value, 'admin');
    }

    // Lecturer
    public function scopeLecturer()
    {
        return $this->role(Role::Lecturer->value, 'lecturer');
    }

    // Student
    public function scopeStudent()
    {
        return $this->role(Role::Student->value, 'student');
    }

    /**
     * Relationship
     */
    public function lecturerCourses()
    {
        return $this->hasMany(LecturerCourse::class);
    }
}
