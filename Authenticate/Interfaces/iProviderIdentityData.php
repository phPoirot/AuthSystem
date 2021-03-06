<?php
namespace Poirot\AuthSystem\Authenticate\Interfaces;

/*
class UserData implements iIdentityDataProvider
{

    #
    # Finds a user by the given user Identity.
    #
    # @param string $property ie. 'name'
    # @param mixed $value ie. 'payam@mail.com'
    #
    # @throws \Exception
    # @return EntityInterface
    #
    function findBy($property, $value)
    {
        $entity = new Entity;
        if ($property == 'username' && $value == 'admin')
            ## find by user name
            $entity->from(new ArrayFileData(['dir_path' => PR_DIR_TEMP, 'realm' => 'user_data']));

        return $entity;
    }
}

// =================================================================================================================
$lazyLoad = new LazyFulfillmentIdentity(['fulfillment_by' => 'username', 'data_provider' => new UserData]);
$auth     = new Authenticator\HttpDigestAuth([
    'identity' => $lazyLoad,
]);

## run rest of program
if ($auth->hasAuthenticated()) {
    echo ("<h1>Hello User {$auth->identity()->getEmail()}</h1>");
}
*/
use Poirot\Std\Interfaces\Struct\iData;

/**
 * Data Model Used Within Identifier/Identity
 * To Retrieve User Data
 *
 * this data model can injected into
 * classes that implemented this feature
 */
interface iProviderIdentityData
{
    /**
     * Finds a user by the given user Identity.
     *
     * @param string $property  ie. 'name'
     * @param mixed  $value     ie. 'payam@mail.com'
     *
     * @return iData
     * @throws \Exception
     */
    function findOneMatchBy($property, $value);
}
