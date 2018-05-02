<?php

use Faker\Generator as Faker;



$factory->define(StockFlowSite\Crypto::class, function (Faker $faker) {
    return [
        'name'=>$faker->randomElement(['Bitcoin','Ether','Ripple','Bitcoin Cash', 'Litecoin', 'EOS', 'Cardano', 'Stellar', 'IOTA', 'NEO', 'Monero', 'NEM', 'Dash', 'TRON', 'Tether', 'VeChain', 'Ether Classic', 'Verge', 'OmiseGo', 'Qtum', 'Binance Coin', 'Lisk', 'ICON', 'Ontology', 'Populous', 'Bitcoin Gold', 'Zcash', 'Bytom', 'Nano', 'Bytecoin', 'Steem', 'Siacoin', 'Wanchain', 'Bitshares', 'Dogecoin', 'Bitcoin Private', 'Stratis', 'DigixDAO', 'Waves', 'Ziliqa', 'Maker', 'Bitcoin Diamond', 'Decred', 'Status', 'Aeternity', 'RChain', '0x', 'Aion', 'Loopring', 'Komodo', 'Golem', 'Ardor', 'Augur', 'Digibyte', 'IOSToken', 'Waltonchain', 'KuCoin Shares', 'HShare', 'Basic Attention Token', 'Ark', 'Substratum', 'PIVX', 'aelf', 'Cryptonex', 'Centrality', 'Factom', 'Dragonchain', 'Mithril', 'QASH', 'Veritaseum', 'MonaCoin', 'SysCoin', 'Gas', 'FunFair', 'Ethos', 'Nxt', 'Elastos', 'Kyber Network', 'Nucleus Vision', 'Nebulas', 'Byteball Bytes', 'GXChain', 'WAX', 'ReddCoin', 'Dentacoin', 'Ethos BQX', 'Revain', 'SALT', 'Power Ledger', 'MaidSafeCoin', 'Mixin', 'ChainLink', 'ZCoin', 'Electroneum', 'Storm', 'Bancor', 'Enigma', 'Request Network', 'Kin', 'TenX', 'Neblio']),
        'quantity'=>$faker->randomFloat($nbMaxDecimals = 8, $min = 0, $max = 999999999.99999999),
        'value'=>$faker->randomFloat($nbMaxDecimals = 8, $min = 0, $max = 999999999.99999999),
        'user_id'=>factory('StockFlowSite\User')->create()->id,
    ];
});

//salvare quantity in una variabile esterna
//value = quantity * (chiamata al valore al momento d'acquisto della determinata crypto)
