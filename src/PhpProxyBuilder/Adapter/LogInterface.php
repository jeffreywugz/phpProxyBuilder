<?php

/**
 * This file is part of the PhpProxyBuilder package.
 *
 * @link https://github.com/ejsmont-artur/phpProxyBuilder
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpProxyBuilder\Adapter;

/**
 * Minimalistic logging interface used internally to shield the library from external libraries.
 * Adapters can be provided for different frameworks like ZF2, Symfony2 etc.
 * 
 * @package PublicApi
 */
interface LogInterface {

    /**
     * Log message as debug level
     * @param string $message
     * @param mixed $attachment optional array or structure of data to be attached
     * @return void
     */
    public function logDebug($message, $attachment = null);

    /**
     * Log message as warning level
     * @param string $message
     * @param mixed $attachment optional array or structure of data to be attached
     * @return void
     */
    public function logWarning($message, $attachment = null);

    /**
     * Log message as error level
     * @param string $message
     * @param mixed $attachment optional array or structure of data to be attached
     * @return void
     */
    public function logError($message, $attachment = null);
}