<?php
/**
 * Slim Middleware Compressor
 *
 * @author Aaron Saray
 */

namespace AaronSaray\SlimMiddleware;

/**
 * Class Compress
 * @package SlimMiddleware
 */
class Compress extends \Slim\Middleware
{
    /**
     * The middleware calling function
     */
    public function call()
    {
        $this->next->call();
    }
}