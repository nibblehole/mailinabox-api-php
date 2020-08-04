<?php
/**
 * DNSRecordType
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
 * DNSRecordType Class Doc Comment
 *
 * @category Class
 * @description DNS record type.
 * @package  MailInABoxAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DNSRecordType
{
    /**
     * Possible values of this enum
     */
    const A = 'A';
    const AAAA = 'AAAA';
    const CAA = 'CAA';
    const CNAME = 'CNAME';
    const TXT = 'TXT';
    const MX = 'MX';
    const SRV = 'SRV';
    const SSHFP = 'SSHFP';
    const NS = 'NS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A,
            self::AAAA,
            self::CAA,
            self::CNAME,
            self::TXT,
            self::MX,
            self::SRV,
            self::SSHFP,
            self::NS,
        ];
    }
}
