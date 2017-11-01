<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $version
 * @property int $id
 * @property int $regionid
 * @property string $xmlid
 * @property string $name
 * @property string $affiliation
 * @property string $lastupdate
 * @property int $photocount
 * @property boolean $flag
 * @property boolean $locator
 */
class factbook_countries extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['regionid', 'xmlid', 'name', 'affiliation', 'lastupdate', 'photocount', 'flag', 'locator'];

}
