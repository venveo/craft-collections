<?php

namespace Craft;

use Illuminate\Support\Collection;

class CollectionsService extends BaseApplicationComponent
{
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * Create a new collection.
     *
     * @param  mixed $items
     * @return void
     */
    public function __construct()
    {
        $this->collection = new Collection();
    }

    /**
     * Create a new collection instance if the value isn't one already.
     *
     * @param  mixed $items
     * @return static
     */
    public function make($items = [])
    {
        return $this->collection->make($items);
    }
}
