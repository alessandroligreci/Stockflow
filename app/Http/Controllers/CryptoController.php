<?php

namespace StockFlowSite\Http\Controllers;

use StockFlowSite\Crypto;
use Illuminate\Http\Request;
?>
<!-- <script type='text/javascript'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<!-- <script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/js/jquery-ui-personalized-1.5.2.packed.js"></script> -->
<!-- <script language="JavaScript" type="text/javascript" src="/js/sprinkle.js"></script> -->

<?php

//$client = new GuzzleHttp\Client();

    /**
     * Display a listing of the resource.
     *
     *
     */

      class CryptoController extends Controller {
        //@return \Illuminate\Http\Response
        public function saveApiData()
          {
            ?>

            <script src="https://code.jquery.com/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script type='text/javascript'>

            var btcPrice;

            function UpdateBtcPrice(){
              $.ajax({
              type: "GET",
              url: "https://api.coinmarketcap.com/v1/ticker/",
              dataType: "json",
              success: function(result){
                for (var i = 0; i < result.length; i++) {
                  name = result[i].name;
                  priceUsd = result[i].price_usd;
                  rank = result[i].rank;
                  priceBtc = result[i].pricebtc;
                  //24h_volume_usd = result[i].24h_volume_usd;
                  marketCapUsd = result[i].market_cap_usd;
                  availableSupply = result[i].available_supply;
                  totalSupply = result[i].total_supply;
                  maxSupply = result[i].max_supply;
                  percent_change_1h = result[i].percent_change_1h;
                  percent_change_24h = result[i].percent_change_24h;
                  percent_change_7d = result[i].percent_change_7d;
                  last_updated = result[i].last_updated;
                  document.write(name + " ");
                  document.write(priceUsd) + " ";
                  document.write(rank + " ");
                  //console.log(24h_volume_usd);
                  document.write(marketCapUsd + " ");
                  document.write(availableSupply + " ");
                  document.write(totalSupply + " ");
                  document.write(maxSupply + " ");
                  document.write(percent_change_1h + " ");
                  document.write(percent_change_24h + " ");
                  document.write(percent_change_7d) + " ";
                  document.write(last_updated + "<br>");
                }


              },
          error: function(err){
              console.log(err);
          }
          });
      }

      UpdateBtcPrice();
      </script>
      <?php
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     *@return \Illuminate\Http\Response
     */
//     public function create()
//     {
//         //
//     }
//
//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }
//
//     /**
//      * Display the specified resource.
//      *
//      * @param  \StockFlowSite\Crypto  $crypto
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Crypto $crypto)
//     {
//         //
//     }
//
//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \StockFlowSite\Crypto  $crypto
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Crypto $crypto)
//     {
//         //
//     }
//
//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \StockFlowSite\Crypto  $crypto
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Crypto $crypto)
//     {
//         //
//     }
//
//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \StockFlowSite\Crypto  $crypto
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Crypto $crypto)
//     {
//         //
//     }
// }
?>
