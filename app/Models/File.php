<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class File extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'filenames1',
        'filenames2',
        'filenames3',
        'filenames4',
        'filenames5',
        'filenames6',
        'titre',
        'sous_titre',
        'desc_1',
        'desc_2',
        'video',
        'prix',
        'nbr_perso',
        'airport',
        'date_depart'
        
    ];
  
    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
}
