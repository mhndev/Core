<?php
namespace Poirot\Std\Interfaces;

use Poirot\Std\Interfaces\Struct\iDataEntity;

interface ipEntity extends iDataEntity
{
    /**
     * Get a copy of properties as hydrate given entity struct
     *
     * @param ipEntity $entity Entity
     *
     * @return mixed
     */
    function getAs(ipEntity $entity);

    /**
     * Output Conveyor Props. as desired manipulated data struct.
     *
     * ! Be Aware of the situation for classes that extend Entity
     *   and maybe have stored original properties in the other way
     *   instead of $this->properties in exp. for session storage,
     *   so i prefer use:
     *   [code]
     *      return $this->getAs(new Entity($this));
     *   [/code]
     *
     * @return mixed
     */
    function borrow();
}
