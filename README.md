# Use Laravel Collections in Craft CMS Plugins

[Collections is a really powerful Laravel class](https://laravel.com/docs/master/collections) that provides "a fluent, convenient wrapper for working with arrays of data". Don't just take our words for it, Adam Watham is working on a book called "[Refactoring to Collections](http://adamwathan.me/refactoring-to-collections/)" and he also has a [great screencast on using collections](http://adamwathan.me/2015/01/01/refactoring-loops-and-conditionals/)..

There are often times when we are working with Craft CMS and wish we had Collections support, so we decided to build this plugin!

## Requirements

TODO

## Installation and Setup

1. Download [plugin release from this page](https://github.com/venveo/craft-collections/releases)
2. Rename the download directory to `collections` and move into your `plugins` directory
3. Install Collections from the control panel settings

## Example Usage

When working with data that is in an array...

```
$array = [
    'eight', 'six', 'seven', 'five'
];
```

You can easily make the array a Collection using the following code:

```
$collection = craft()->collections->make($array);
```

Once you have your data in a Collection, you can instantly reap the rewards!

For example you can get the count of items in the array/Collection by simply calling:

 ```
 $collection->count();
 ```

 Wham-o! the count, in this case `4`, will be easily available!

 What if you need to ensure that an array contains and item?

 ```
 if ($collection->contains('six')) {
    // returns true, then do something about it!
 }
 ```

For the complete list of options when using Collections, see the list of [available methods](https://laravel.com/docs/master/collections#available-methods).

## Credits

* [Jason McCallister](https://github.com/themccallister)
* [Carlo Latiano](https://github.com/carlolaitano)

## About Venveo

Venveo is a Digital Marketing Agency for Building Materials Companies in Blacksburg, VA. Learn more about us on [our website](https://www.venveo.com).

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
