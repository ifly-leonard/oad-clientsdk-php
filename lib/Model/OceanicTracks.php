<?php
/**
 * OceanicTracks
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Open Aviation Data
 *
 * Accessible Aviation Data for the Masses
 *
 * OpenAPI spec version: 3.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * OceanicTracks Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OceanicTracks implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OceanicTracks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ausot' => '\Swagger\Client\Model\OceanicTrack[]',
        'pacot' => '\Swagger\Client\Model\OceanicTrack[]',
        'nat' => '\Swagger\Client\Model\OceanicTrack[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'ausot' => 'ausot',
        'pacot' => 'pacot',
        'nat' => 'nat'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ausot' => 'setAusot',
        'pacot' => 'setPacot',
        'nat' => 'setNat'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ausot' => 'getAusot',
        'pacot' => 'getPacot',
        'nat' => 'getNat'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ausot'] = isset($data['ausot']) ? $data['ausot'] : null;
        $this->container['pacot'] = isset($data['pacot']) ? $data['pacot'] : null;
        $this->container['nat'] = isset($data['nat']) ? $data['nat'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets ausot
     * @return \Swagger\Client\Model\OceanicTrack[]
     */
    public function getAusot()
    {
        return $this->container['ausot'];
    }

    /**
     * Sets ausot
     * @param \Swagger\Client\Model\OceanicTrack[] $ausot
     * @return $this
     */
    public function setAusot($ausot)
    {
        $this->container['ausot'] = $ausot;

        return $this;
    }

    /**
     * Gets pacot
     * @return \Swagger\Client\Model\OceanicTrack[]
     */
    public function getPacot()
    {
        return $this->container['pacot'];
    }

    /**
     * Sets pacot
     * @param \Swagger\Client\Model\OceanicTrack[] $pacot
     * @return $this
     */
    public function setPacot($pacot)
    {
        $this->container['pacot'] = $pacot;

        return $this;
    }

    /**
     * Gets nat
     * @return \Swagger\Client\Model\OceanicTrack[]
     */
    public function getNat()
    {
        return $this->container['nat'];
    }

    /**
     * Sets nat
     * @param \Swagger\Client\Model\OceanicTrack[] $nat
     * @return $this
     */
    public function setNat($nat)
    {
        $this->container['nat'] = $nat;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}