<?php
/**
 * Custom Exceptions for the CloudFiles API
 *
 * Requres PHP 5.x (for Exceptions and OO syntax)
 *
 * See COPYING for license information.
 *
 * @author Eric "EJ" Johnson <ej@racklabs.com>
 * @copyright Copyright (c) 2008, Rackspace US, Inc.
 * @package php-cloudfiles-exceptions
 */

/**
 * Custom Exceptions for the CloudFiles API
 * @package php-cloudfiles-exceptions
 */
class CloudFilesException extends Exception {}
class SyntaxException extends CloudFilesException{}
class AuthenticationException extends CloudFilesException{}
class InvalidResponseException extends CloudFilesException{}
class NonEmptyContainerException extends CloudFilesException{}
class NoSuchObjectException extends CloudFilesException{}
class NoSuchContainerException extends CloudFilesException{}
class NoSuchAccountException extends CloudFilesException{}
class MisMatchedChecksumException extends CloudFilesException{}
class IOException extends CloudFilesException{}
class CDNNotEnabledException extends CloudFilesException{}
class BadContentTypeException extends CloudFilesException{}
class InvalidUTF8Exception extends CloudFilesException{}
class ConnectionNotOpenException extends CloudFilesException{}
