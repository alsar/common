<?php
namespace Alsar\Common\Traits;

trait GetClassTrait
{
    /**
     * Returns a qualified name for the called class.
     *
     * @return string
     */
    public static function getClass()
    {
        return get_called_class();
    }
}