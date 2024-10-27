<?php

use Lwwcas\LaravelCountries\Database\Factories\CountryFactory;

it('should gets the flag emoji', function ($method, $key) {
    $country = CountryFactory::new()->make();

    $flag = $country->flag_emoji[$key];

    expect($country->{$method}())->not()->toBeNull();
    expect($country->{$method}())->toEqual($flag);
})->with([
    ['getFlagEmoji', 'img'],
    ['getFlagEmojiImage', 'img'],
    ['getFlagEmojiImg', 'img'],
    ['getFlagEmojiUtf8', 'utf8'],
    ['getFlagEmojiUtf16', 'utf16'],
    ['getFlagEmojiCode', 'uCode'],
    ['getFlagEmojiUCode', 'uCode'],
    ['getFlagEmojiHex', 'hex'],
    ['getFlagEmojiHtml', 'html'],
    ['getFlagEmojiCss', 'css'],
    ['getFlagEmojiDecimal', 'decimal'],
    ['getFlagEmojiShortCode', 'shortcode'],
]);

it('should gets the flag emoji with html code', function ($withHtml, $flag, $tag) {
    $country = CountryFactory::new()->make();

    $code = $country->{$withHtml}();

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain($tag);
    expect($code)->toContain($country->{$flag}());

})->with([
    ['getFlagEmojiImgWithHtmlCode', 'getFlagEmojiImg', 'span'],
    ['getFlagEmojiUtf8WithHtmlCode', 'getFlagEmojiUtf8', 'span'],
    ['getFlagEmojiHexWithHtmlCode', 'getFlagEmojiHex', 'span'],
    ['getFlagEmojiHtmlWithHtmlCode', 'getFlagEmojiHtml', 'span'],
    ['getFlagEmojiDecimalWithHtmlCode', 'getFlagEmojiDecimal', 'span'],
]);

it('should gets the flag emoji utf-16 with html code', function () {
    $country = CountryFactory::new()->make();

    $code = $country->getFlagEmojiUtf16WithHtmlCode('div-emoji-utf16');

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-utf16');
    expect($code)->toContain('span');

    $code = $country->getFlagEmojiUtf16WithScriptCode('div-emoji-utf16', false);

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-utf16');
    expect($code)->toContain('document.getElementById');
    expect($code)->toContain($country->getFlagEmojiUtf16());
    expect($code)->not()->toContain('script');

    $code = $country->getFlagEmojiUtf16WithScriptCode('div-emoji-utf16', true);

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-utf16');
    expect($code)->toContain('document.getElementById');
    expect($code)->toContain($country->getFlagEmojiUtf16());
    expect($code)->toContain('script');

    $code = $country->getFlagEmojiUtf16WithCode('div-emoji-utf16');

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-utf16');
    expect($code)->toContain('document.getElementById');
    expect($code)->toContain($country->getFlagEmojiUtf16());
    expect($code)->toContain('script');
    expect($code)->toContain('span');
});

it('should gets the flag emoji css with html code', function () {
    $country = CountryFactory::new()->make();

    $code = $country->getFlagEmojiCssWithHtmlCode('div-emoji-css');

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-css');
    expect($code)->toContain('span');

    $code = $country->getFlagEmojiCssWithCssCode('div-emoji-css', false);

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-css');
    expect($code)->toContain('::before');
    expect($code)->toContain('content:');
    expect($code)->toContain($country->getFlagEmojiCss());
    expect($code)->not()->toContain('style');

    $code = $country->getFlagEmojiCssWithCssCode('div-emoji-css', true);

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-css');
    expect($code)->toContain('::before');
    expect($code)->toContain('content:');
    expect($code)->toContain($country->getFlagEmojiCss());
    expect($code)->toContain('style');

    $code = $country->getFlagEmojiCssWithCode('div-emoji-css');

    expect($code)->not()->toBeNull();
    expect($code)->toBeString();
    expect($code)->toContain('div-emoji-css');
    expect($code)->toContain('::before');
    expect($code)->toContain('content:');
    expect($code)->toContain($country->getFlagEmojiCss());
    expect($code)->toContain('style');
    expect($code)->toContain('span');

});
