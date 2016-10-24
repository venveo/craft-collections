<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;
use Twig_Function_Method;

class CollectionsTwigExtension extends \Twig_Extension
{
    /**
    * Returns the extension name.
    *
    * @return string
    */
    public function getName()
    {
        return "Collections";
    }

    /**
    * Returns the extensions filters.
    *
    * @return array
    */
    public function getFilters()
    {
        return [
            'collecy' => new \Twig_Filter_Method(
                $this, 'collect'
            ),
        ];
    }

    /**
    * Returns the extensions functions.
    *
    * @return string
    */
    public function getFunctions()
    {
        return [
            'collect' => new \Twig_Function_Method(
                $this, 'collect'
            ),
        ];
    }

    /**
    * Returns the array as a collection.
    *
    * @param array
    * @return Collection
    */
    public function collect($array)
    {
        return craft()->collections->make($array);
    }
}
