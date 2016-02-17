<?php
namespace Poirot\Std\Struct;

use Poirot\Std\Interfaces\ipOptions;
use Poirot\Std\Struct\Traits\OpenOptionsTrait;

/*
 * $openOption = new class AnonymOptions extends OpenOptions
 * {
 *    function setWritableOption($value) {
 *       // ...
 *       // we can set variable into $this->properties turn key/value
 *       // through readable props
 *    }
 * }
 *
 * $openOption->setAnonymousOption('open option value');
 *
 * print_r($openOption->props());
 *
 * // ['complex'  => ['writable_option', 'anonymous_option'],
 * //  'readable' => ['anonymous_option'],
 * //  'writable' => ['writable_option', 'anonymous_option'],
 * // ]
 *
 */

class OpenOptions implements ipOptions
{
    use OpenOptionsTrait;

    /**
     * Construct
     *
     * @param array|ipOptions $options Options
     */
    function __construct($options = null)
    {
        if ($options !== null)
            $this->from($options);
    }
}
 