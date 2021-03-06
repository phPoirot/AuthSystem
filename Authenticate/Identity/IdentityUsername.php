<?php
namespace Poirot\AuthSystem\Authenticate\Identity;


class IdentityUsername
    extends aIdentity
{
    /** @var string */
    protected $username;


    /**
     * @return string
     */
    function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return $this
     */
    function setUsername($username)
    {
        $this->username = (string) $username;
        return $this;
    }

    /**
     * Is Identity Full Filled?
     *
     * - full filled mean that all needed data
     *   set for this identity.
     * - with no property it will check for whole properties
     *
     * @param null|string $property_key
     *
     * @return boolean
     */
    function isFulfilled($property_key = null)
    {
        if ($property_key) {
            $result = parent::isFulfilled($property_key);
        } else {
            // Fulfillment by specific property
            $result = ($this->getUsername() !== null);
            $result = $result && parent::isFulfilled();
        }

        return $result;
    }
}
