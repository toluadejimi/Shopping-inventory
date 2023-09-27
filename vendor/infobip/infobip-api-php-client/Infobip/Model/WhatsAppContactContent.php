<?php
/**
 * WhatsAppContactContent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Infobip\Model;

use ArrayAccess;
use Infobip\ObjectSerializer;

/**
 * WhatsAppContactContent Class Doc Comment
 *
 * @category Class
 * @description An array of contacts sent in a WhatsApp message.
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WhatsAppContactContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsAppContactContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'addresses' => '\Infobip\Model\WhatsAppAddressContent[]',
        'birthday' => 'string',
        'emails' => '\Infobip\Model\WhatsAppEmailContent[]',
        'name' => '\Infobip\Model\WhatsAppNameContent',
        'org' => '\Infobip\Model\WhatsAppOrganizationContent',
        'phones' => '\Infobip\Model\WhatsAppPhoneContent[]',
        'urls' => '\Infobip\Model\WhatsAppUrlContent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'addresses' => null,
        'birthday' => null,
        'emails' => null,
        'name' => null,
        'org' => null,
        'phones' => null,
        'urls' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'addresses' => 'addresses',
        'birthday' => 'birthday',
        'emails' => 'emails',
        'name' => 'name',
        'org' => 'org',
        'phones' => 'phones',
        'urls' => 'urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addresses' => 'setAddresses',
        'birthday' => 'setBirthday',
        'emails' => 'setEmails',
        'name' => 'setName',
        'org' => 'setOrg',
        'phones' => 'setPhones',
        'urls' => 'setUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addresses' => 'getAddresses',
        'birthday' => 'getBirthday',
        'emails' => 'getEmails',
        'name' => 'getName',
        'org' => 'getOrg',
        'phones' => 'getPhones',
        'urls' => 'getUrls'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }





    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['org'] = $data['org'] ?? null;
        $this->container['phones'] = $data['phones'] ?? null;
        $this->container['urls'] = $data['urls'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets addresses
     *
     * @return \Infobip\Model\WhatsAppAddressContent[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Infobip\Model\WhatsAppAddressContent[]|null $addresses Array of addresses information.
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return string|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string|null $birthday Date of birth in `YYYY-MM-DD` format.
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \Infobip\Model\WhatsAppEmailContent[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Infobip\Model\WhatsAppEmailContent[]|null $emails Array of emails information.
     *
     * @return self
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Infobip\Model\WhatsAppNameContent
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Infobip\Model\WhatsAppNameContent $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets org
     *
     * @return \Infobip\Model\WhatsAppOrganizationContent|null
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param \Infobip\Model\WhatsAppOrganizationContent|null $org org
     *
     * @return self
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return \Infobip\Model\WhatsAppPhoneContent[]|null
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \Infobip\Model\WhatsAppPhoneContent[]|null $phones Array of phones information.
     *
     * @return self
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return \Infobip\Model\WhatsAppUrlContent[]|null
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param \Infobip\Model\WhatsAppUrlContent[]|null $urls Array of urls information.
     *
     * @return self
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
