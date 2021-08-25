<?php

namespace Shopper\Framework\Models\System;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'disk_name',
        'file_name',
        'file_size',
        'content_type',
        'is_public',
        'position',
        'filetable_type',
        'filetable_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'is_public',
        'position',
        'filetable_type',
        'filetable_id',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'image_full_path',
    ];

    /**
     * Get the table associated with the model.
     */
    public function getTable(): string
    {
        return shopper_table('system_files');
    }

    /**
     * Get the formatted file_size attribute.
     */
    public function getFileSizeAttribute(string $value): string
    {
        $units = ['octets', 'Ko', 'Mo', 'Go', 'To', 'Po'];

        for ($i = 0; $value > 1024; $i++) {
            $value /= 1024;
        }

        return round($value, 2) . ' ' . $units[$i];
    }

    public function getImageFullPathAttribute(): string
    {
        return Storage::disk(config('shopper.system.storage.disks.uploads'))->url($this->disk_name);
    }

    public function filetable(): MorphTo
    {
        return $this->morphTo();
    }
}
