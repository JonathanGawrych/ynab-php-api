<?php
/**
 * ScheduledTransactionFrequency
 *
 * PHP version 5
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.ynab.com
 *
 * OpenAPI spec version: 1.72.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YNAB\Model;
use \YNAB\ObjectSerializer;

/**
 * ScheduledTransactionFrequency Class Doc Comment
 *
 * @category Class
 * @description The scheduled transaction frequency
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledTransactionFrequency
{
    /**
     * Possible values of this enum
     */
    const NEVER = 'never';
    const DAILY = 'daily';
    const WEEKLY = 'weekly';
    const EVERY_OTHER_WEEK = 'everyOtherWeek';
    const TWICE_A_MONTH = 'twiceAMonth';
    const EVERY4_WEEKS = 'every4Weeks';
    const MONTHLY = 'monthly';
    const EVERY_OTHER_MONTH = 'everyOtherMonth';
    const EVERY3_MONTHS = 'every3Months';
    const EVERY4_MONTHS = 'every4Months';
    const TWICE_A_YEAR = 'twiceAYear';
    const YEARLY = 'yearly';
    const EVERY_OTHER_YEAR = 'everyOtherYear';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEVER
            self::DAILY
            self::WEEKLY
            self::EVERY_OTHER_WEEK
            self::TWICE_A_MONTH
            self::EVERY4_WEEKS
            self::MONTHLY
            self::EVERY_OTHER_MONTH
            self::EVERY3_MONTHS
            self::EVERY4_MONTHS
            self::TWICE_A_YEAR
            self::YEARLY
            self::EVERY_OTHER_YEAR
        ];
    }
}
