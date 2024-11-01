<?php

namespace Lwwcas\LaravelCountries\Models\Concerns;

trait HasWhereIndependenceDay
{
    /**
     * Filter the query by independence day.
     *
     * @param Builder $query
     * @param string $date
     * @return Builder
     */
    public function scopeWhereIndependenceDay($query, string $date)
    {
        return $query->whereNotNull('independence_day')->whereDate('independence_day', $date);
    }

    /**
     * Filter the query by independence year.
     *
     * @param Builder $query
     * @param int $year
     * @return Builder
     */
    public function scopeWhereIndependenceYear($query, int $year)
    {
        return $query->whereNotNull('independence_day')->whereYear('independence_day', $year);
    }

    /**
     * Filter the query by independence dates between two dates.
     *
     * @param Builder $query
     * @param string $startDate
     * @param string $endDate
     * @return Builder
     */
    public function scopeWhereIndependenceBetweenDates($query, $startDate, $endDate)
    {
        return $query->whereNotNull('independence_day')
            ->whereBetween('independence_day', [$startDate, $endDate]);
    }

    /**
     * Filter the query by independence month.
     *
     * @param Builder $query
     * @param int $month
     * @return Builder
     */
    public function scopeWhereIndependenceMonth($query, int $month)
    {
        return $query->whereNotNull('independence_day')->whereMonth('independence_day', $month);
    }
    /**
     * Filter the query by independence dates before a certain date.
     *
     * @param Builder $query
     * @param string $date
     * @return Builder
     */
    public function scopeWhereIndependenceBefore($query, string $date)
    {
        return $query->whereNotNull('independence_day')->where('independence_day', '<', $date);
    }

    /**
     * Filter the query by independence dates after a certain date.
     *
     * @param Builder $query
     * @param string $date
     * @return Builder
     */
    public function scopeWhereIndependenceAfter($query, string $date)
    {
        return $query->whereNotNull('independence_day')->where('independence_day', '>', $date);
    }
}
