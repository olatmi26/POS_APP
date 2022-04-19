<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use App\Models\Customer;
use App\Models\Warehouse;
use Illuminate\Support\Str;
// use App\Models\Role;
use \Spatie\Permission\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable; 
    use HasFactory;

    protected $fillable = [
        'FirstName',
        'SurName',
        'MiddleName',
        'address',
        'email',
        'phoneN0',
        'password',
        'username',
        'isActive',
        'userType',
        'profileImage',
    ];

    protected $hidden = [
        'password', 'remember_token', 'email_verified_at'
    ];

    
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * Get the role that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get all of the customers for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function hasAnyRoles($roles)
    {
        if ($this->roles()->whereIn('name', $roles)->first()) { //list or roles
            return true;
        }
        return false;
    }
    
    /**
     * Get the wareHouse that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wareHouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
    public function getFullNameAttribute()
    {
        return Str::upper($this->SurName) . ' ' . ucfirst($this->FirstName)   . ' ' . Str::upper($this->MiddleName);
    }
}


