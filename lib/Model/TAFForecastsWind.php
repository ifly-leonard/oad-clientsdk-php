<?php
/**
 * TAFForecastsWind
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
 * TAFForecastsWind Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TAFForecastsWind implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TAF_forecasts_wind';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dir' => 'int',
        'spd' => 'int',
        'gust' => 'int',
        'shear' => '\Swagger\Client\Model\TAFForecastsWindShear'
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
        'dir' => 'dir',
        'spd' => 'spd',
        'gust' => 'gust',
        'shear' => 'shear'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'dir' => 'setDir',
        'spd' => 'setSpd',
        'gust' => 'setGust',
        'shear' => 'setShear'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'dir' => 'getDir',
        'spd' => 'getSpd',
        'gust' => 'getGust',
        'shear' => 'getShear'
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
        $this->container['dir'] = isset($data['dir']) ? $data['dir'] : null;
        $this->container['spd'] = isset($data['spd']) ? $data['spd'] : null;
        $this->container['gust'] = isset($data['gust']) ? $data['gust'] : null;
        $this->container['shear'] = isset($data['shear']) ? $data['shear'] : null;
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
     * Gets dir
     * @return int
     */
    public function getDir()
    {
        return $this->container['dir'];
    }

    /**
     * Sets dir
     * @param int $dir Degree from which the wind is blowing (0 degrees = variable)
     * @return $this
     */
    public function setDir($dir)
    {
        $this->container['dir'] = $dir;

        return $this;
    }

    /**
     * Gets spd
     * @return int
     */
    public function getSpd()
    {
        return $this->container['spd'];
    }

    /**
     * Sets spd
     * @param int $spd Wind speed in knots (0 dir and 0 spd = calm winds)
     * @return $this
     */
    public function setSpd($spd)
    {
        $this->container['spd'] = $spd;

        return $this;
    }

    /**
     * Gets gust
     * @return int
     */
    public function getGust()
    {
        return $this->container['gust'];
    }

    /**
     * Sets gust
     * @param int $gust Wind gust in knots
     * @return $this
     */
    public function setGust($gust)
    {
        $this->container['gust'] = $gust;

        return $this;
    }

    /**
     * Gets shear
     * @return \Swagger\Client\Model\TAFForecastsWindShear
     */
    public function getShear()
    {
        return $this->container['shear'];
    }

    /**
     * Sets shear
     * @param \Swagger\Client\Model\TAFForecastsWindShear $shear
     * @return $this
     */
    public function setShear($shear)
    {
        $this->container['shear'] = $shear;

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
