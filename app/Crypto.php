<?php

namespace StockFlowSite;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    public function users() {
        return $this->belongsTo('StockFlowSite\User');
        // $id;
        // $name;
        // $symbol;
        // $rank;
        // $price_usd;
        // //var $24h_volume_usd;
        // $market_cap_usd;
        // $available_supply;
        // $total_supply;
        // $max_supply;
        // $percent_change_1h;
        // $percent_change_24h;
        // $percent_change_7d;
        // $last_updated;

    }
}
