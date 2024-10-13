

falar sobre list
    $list = Country::getList()->withNamesSlugsAndFlags()->limit(3)->pluck('flag_emoji');
    // dd($list);

    dd((new FlagEmoji($list))->first()->getFlagEmoji());

e criar listas mais simples talvez ate helpers
