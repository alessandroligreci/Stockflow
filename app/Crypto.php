<?php

namespace StockFlowSite;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    public function users() {
        return $this->belongsTo('StockFlowSite\User');
    }
}
