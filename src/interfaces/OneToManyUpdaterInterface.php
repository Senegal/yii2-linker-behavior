<?php

namespace voskobovich\linker\interfaces;

/**
 * Interface OneToManyUpdaterInterface
 * @package voskobovich\linker\interfaces
 */
interface OneToManyUpdaterInterface extends UpdaterInterface
{
    /**
     * Set default value for an attribute
     * @param string $value
     */
    public function setDefaultValue($value);

    /**
     * Get default value for an attribute (used for 1-N relations)
     * @return mixed
     */
    public function getDefaultValue();
}