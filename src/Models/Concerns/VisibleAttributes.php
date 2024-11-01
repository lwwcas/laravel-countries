<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

trait VisibleAttributes
{
    /**
     * Determine if the model is visible.
     *
     * @return bool
     */
    public function isVisible(): bool
    {
        return (bool) $this->is_visible == true || $this->is_visible == 1;
    }

    /**
     * Determine if the model is hidden.
     *
     * @return bool
     */
    public function isHidden(): bool
    {
        return (bool) $this->is_visible == false || $this->is_visible == 0;
    }

    /**
     * Set the model as visible.
     *
     * @return $this
     */
    public function setVisibleTrue(): self
    {
        $this->is_visible = 1;
        $this->save();

        return $this;
    }

    /**
     * Set the model as hidden.
     *
     * @return $this
     */
    public function setVisibleFalse(): self
    {
        $this->is_visible = 0;
        $this->save();

        return $this;
    }

    /**
     * Set the visible attributes for the model.
     *
     * @return $this
     */
    public function setModelVisible(): self
    {
        $this->is_visible = 1;
        $this->save();

        return $this;
    }

    /**
     * Set the hidden attributes for the model.
     *
     * @return $this
     */
    public function setModelHidden(): self
    {
        $this->is_visible = 0;
        $this->save();

        return $this;
    }
}
