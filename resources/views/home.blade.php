@include('layouts.navbar')
<body>
  <div class="container">
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
</div>
</body>
