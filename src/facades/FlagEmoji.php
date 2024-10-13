<?php

namespace Lwwcas\LaravelCountries\Facades;

use Illuminate\Support\Collection;
use Lwwcas\LaravelCountries\Models\Concerns\HasFlagEmojiGetters;

final class FlagEmoji
{
    use HasFlagEmojiGetters;

    protected ?array $flag_emoji = null;
    protected ?array $on_data = null;

    /**
     * FlagEmoji constructor.
     *
     * @param string $attributes
     */
    public function __construct(protected Collection $attributes)
    {
        if ($attributes instanceof Collection) {
            foreach ($attributes as $item) {
                $this->on_data[] = $item;
            }
            return $this;
        }

        $this->flag_emoji = $attributes;
        return $this;
    }

    /**
     * Return the flag emoji attributes as an array.
     *
     * If the class was constructed with a collection of items, this method will
     * return a collection of the flag emoji attributes for each item.
     *
     * @return array|\Illuminate\Support\Collection
     */
    public function get()
    {
        if ($this->on_data != null) {
            return collect($this->on_data);
        }

        return $this->flag_emoji;
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
    public function first()
    {
        $this->flag_emoji = collect($this->on_data)->first();
        return $this;
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
    public function last()
    {
        $this->flag_emoji = collect($this->on_data)->last();
        return $this;
    }

}
