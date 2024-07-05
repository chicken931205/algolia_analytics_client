<?php

namespace Algolia\Response\Search;

use Algolia\Response\Search\Result\SearchNoResultRateResult;

class SearchNoResultRateResponse
{
    /**
     * @var array
     */
    private $results = [];

    /**
     * @var float
     */
    private $rate;

    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $noResultCount;

    /**
     * SearchNoResultRateResponse constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->rate          = $data->rate;
        $this->count         = $data->count;
        $this->noResultCount = $data->noResultCount;

        foreach ($data->dates as $search) {
            $this->results[] = new SearchNoResultRateResult($search);
        }
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getNoResultCount()
    {
        return $this->noResultCount;
    }
}
