<?php

namespace Lwwcas\LaravelCountries\Facades;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Lwwcas\LaravelCountries\Models\Concerns\HasFlagEmojiGetters;

final class FlagEmoji
{
    use HasFlagEmojiGetters;

    protected $flag_emoji = null;
    protected $on_data = null;
    protected $key = null;

    /**
     * FlagEmoji constructor.
     *
     * @param string $attributes
     */
    public function __construct(protected Collection|array $attributes)
    {
        if ($attributes instanceof Collection) {
            foreach ($attributes as $index => $item) {
                if (is_array($item) == false) {
                    $item = json_decode($item, true);
                }

                $this->on_data[$index] = new self($item);
            }

            return;
        }

        if (is_array($attributes) == false) {
            $attributes = json_decode($attributes, true);
        }

        $this->flag_emoji = $attributes;
        return;
    }

    /**
     * Return the flag emoji attribute.
     *
     * If `$flagKey` is not set, this method will return a Collection of all flag emoji
     * attributes. If `$flagKey` is set, this method will return the flag emoji
     * attribute at the given key.
     *
     * @param string|int $flagKey The key of the flag emoji attribute to return.
     * @return Collection|FlagEmoji A Collection of all flag emoji attributes, or the flag emoji
     *                              attribute at the given key.
     */
    public function get(string|int $flagKey = null): Collection|FlagEmoji
    {
        if ($flagKey !== null) {
           return $this->on_data[$flagKey];
        }

        return collect($this->on_data);
    }

    /**
     * Return the first flag emoji attribute.
     *
     * If the class was constructed with a collection of items, this method will
     * return the first flag emoji attribute from the collection. If the class was
     * constructed with a string, this method will return the flag emoji attribute
     * as a Emoji instance.
     *
     * @return Emoji|\Illuminate\Support\Collection
     */
    public function first(): ?FlagEmoji
    {
        $this->flag_emoji = collect($this->on_data)->first();
        $this->key = collect($this->on_data)->keys()->first();
        return $this->flag_emoji;
    }

    /**
     * Return the last flag emoji attribute.
     *
     * If the class was constructed with a collection of items, this method will
     * return the last flag emoji attribute from the collection. If the class was
     * constructed with a string, this method will return the flag emoji attribute
     * as a Emoji instance.
     *
     * @return Emoji|\Illuminate\Support\Collection
     */
    public function last(): ?FlagEmoji
    {
        $this->flag_emoji = Arr::last($this->on_data);
        $this->key = collect($this->on_data)->keys()->last();
        return $this->flag_emoji;
    }

    /**
     * Return the key of the flag emoji attribute.
     *
     * If the class was constructed with a collection of items, this method will
     * return a collection of the keys from the collection. If the class was
     * constructed with a string, this method will return the key of the flag emoji
     * attribute as a string.
     *
     * @return string|\Illuminate\Support\Collection
     */
    public function keys()
    {
        return collect($this->on_data)->keys();
    }

    /**
     * Return the key of the flag emoji attribute.
     *
     * If the class was constructed with a collection of items, this method will
     * return a collection of the keys from the collection. If the class was
     * constructed with a string, this method will return the key of the flag emoji
     * attribute as a string.
     *
     * @return string|\Illuminate\Support\Collection
     */
    public function key()
    {
        $this->first();
        return $this->key;
    }

}
