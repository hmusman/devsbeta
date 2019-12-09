<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Portfolio extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'portfolios';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = ['name', 'image','category', 'subimage1','subimage2','subimage3','subimage4','subimage5','subimage6', 'cName', 'cService', 'cWebsite','objective','tools','challenge'];

      public function categories()
    {
        return $this->belongsTo(Category::class);
    }
 
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
     public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $extention = substr($value, strpos($value, "/") + 1);
        $extention = substr($extention, 0, strpos($extention, ";"));
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.'.$extention;
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }
//subimage2
 public function setSubimage1Attribute($value)
    {
        $attribute_name = "subimage1";
        $extention = substr($value, strpos($value, "/") + 1);
        $extention = substr($extention, 0, strpos($extention, ";"));
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.'.$extention;
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    } public function setSubimage2Attribute($value)
    {
        $attribute_name = "subimage2";
        $extention = substr($value, strpos($value, "/") + 1);
        $extention = substr($extention, 0, strpos($extention, ";"));
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.'.$extention;
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    } public function setSubimage3Attribute($value)
    {
        $attribute_name = "subimage3";
        $extention = substr($value, strpos($value, "/") + 1);
        $extention = substr($extention, 0, strpos($extention, ";"));
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.'.$extention;
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    } public function setSubimage4Attribute($value)
    {
        $attribute_name = "subimage4";
        $extention = substr($value, strpos($value, "/") + 1);
        $extention = substr($extention, 0, strpos($extention, ";"));
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.'.$extention;
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    } public function setSubimage5Attribute($value)
    {
        $attribute_name = "subimage5";
        $extention = substr($value, strpos($value, "/") + 1);
        $extention = substr($extention, 0, strpos($extention, ";"));
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.'.$extention;
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    } public function setSubimage6Attribute($value)
    {
        $attribute_name = "subimage6";
        $extention = substr($value, strpos($value, "/") + 1);
        $extention = substr($extention, 0, strpos($extention, ";"));
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.'.$extention;
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }
 //end subimages   
    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public_folder')->delete($obj->image);
        });
    }
/*
    public function setSubimageAttribute($value)
    {
       
        $attribute_name = "subimage";
        $disk = "public_folder";
        $destination_path = "storage/uploads/portfolios";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }*/
}
