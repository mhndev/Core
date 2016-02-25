<?php
namespace Poirot\Std\Struct;

!defined('POIROT_CORE_LOADED') and include_once __DIR__.'/../functions.php';

use Poirot\Std;
use Poirot\Std\Struct\Traits\EntityDataTrait;

/*
$data = function() {
    yield [0,1]            => ['this is data for this column'];
    yield new \Directory() => 'this is value for Directory as a key.';
};

$entity = new Entity($data());

$entity->set([0,1], ['this is data for this column']);
$entity->set(new \Directory(), 'this is value for Directory as a key.');

foreach($entity as $k => $v)
        // $k: array, \Directory
*/


class EntityData extends AbstractDataStruct
    implements Std\Interfaces\Struct\iEntityData
{
    use EntityDataTrait;
}
