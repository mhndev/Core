<?php
namespace Poirot\Core\Interfaces;

use Poirot\Core\AbstractOptions;

/**
 * The Class That Implement This Interface
 * Provide Some Options Configuration
 *
 */
interface OptionsProviderInterface 
{
    /**
     * @return AbstractOptions
     */
    function options();

    /**
     * Get An Bare Options Instance
     *
     * ! it used on easy access to options instance
     *   before constructing class
     *   [php]
     *      $opt = Filesystem::optionsIns();
     *      $opt->setSomeOption('value');
     *
     *      $class = new Filesystem($opt);
     *   [/php]
     *
     * @return AbstractOptions
     */
    static function optionsIns();
}
