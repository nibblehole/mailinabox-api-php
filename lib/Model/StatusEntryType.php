<?php
/**
 * StatusEntryType
 *
 * PHP version 5
 *
 * @category Class
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mail-in-a-Box
 *
 * Mail-in-a-Box API HTTP specification.
 *
 * The version of the OpenAPI document: 0.46.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailInABoxAPI\Client\Model;
use MailInABoxAPI\Client\ObjectSerializer;

/**
 * StatusEntryType Class Doc Comment
 *
 * @category Class
 * @description System status entry type.
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatusEntryType
{
    /**
     * Possible values of this enum
     */
    const HEADING = 'heading';
    const OK = 'ok';
    const WARNING = 'warning';
    const ERROR = 'error';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [self::HEADING, self::OK, self::WARNING, self::ERROR];
    }
}