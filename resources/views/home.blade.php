@extends('layouts.app')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th id="rank" scope="col">#</th>
      <th scope="col">Name</th>
      <th  scope="col">Market Cap</th>
      <th scope="col">Volume (24h)</th>
      <th scope="col">Circulating Supply</th>
      <th scope="col">Change (24h)</th>
      <th scope="col">Price Graph (24h)</th>
    </tr>
  </thead>
 <tbody>
        <tr>
          <th scope="row"></th>
          <td id="name"></td>
          <td id="market cap"></td>
          <td id="volume (24h)"></td>
          <td id="circulating supply"></td>
          <td id="change (24h)"></td>
          <td id="price graph (24h)"></td>
        </tr>
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery.min.js"></script>
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></script> --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type='text/javascript'>
  function UpdateBtcPrice(){
    $.ajax({
    type: "GET",
    url: "https://api.coinmarketcap.com/v1/ticker/",
    dataType: "json",

    success: function(result){
        var name_ = [];
      for (var i = 0; i < result.length; i++) {
        // para = document.createElement("p").setAttribute("id", "nome('+i+')");
        name = result[i].name;
        //priceUsd = priceUsd;
        rank = result[i].rank;
        priceBtc = result[i].pricebtc;
        //volume_usd = result[i].24h_volume_usd;
        marketCapUsd = result[i].market_cap_usd;
        availableSupply = result[i].available_supply;
        totalSupply = result[i].total_supply;
        maxSupply = result[i].max_supply;
        percent_change_1h = result[i].percent_change_1h;
        percent_change_24h = result[i].percent_change_24h;
        percent_change_7d = result[i].percent_change_7d;
        last_updated = result[i].last_updated;

        name_.push(result[i].name);


        document.getElementById("name").innerHTML = (name_);
        document.getElementById("market cap").innerHTML = (result[0].market_cap_usd + " $");
        document.getElementById("circulating supply").innerHTML = (result[0].available_supply);
        document.getElementById("change (24h)").innerHTML = (result[0].percent_change_24h + " %");

        //document.getElementById("price graph (24h)").innerHTML = (result[0].market_cap_usd);
        //document.getElementById("volume (24h)").innerHTML = (result[0].24h_volume_usd;);
        // document.write(priceUsd + " ";
        // document.write(rank + " ");
        // //console.log(24h_volume_usd);
        // document.write(marketCapUsd + " ");
        // document.write(availableSupply + " ");
        // document.write(totalSupply + " ");
        // document.write(maxSupply + " ");
        // document.write(percent_change_1h + " ");
        // document.write(percent_change_24h + " ");
        // document.write(percent_change_7d + " ";
        // document.write(last_updated + "<br>");
      }
    },
    error: function(err){
      console.log(err);
    }
    });
  }
  UpdateBtcPrice();
  </script>
@endsection
