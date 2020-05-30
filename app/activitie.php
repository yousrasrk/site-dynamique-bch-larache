<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activitie extends Model
{
    //
    function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->video)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 400]);
        return $embed->getHtml();
    }
    
}
