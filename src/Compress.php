<?php
/**
 * Slim Middleware Compressor
 *
 * @author Aaron Saray
 */

namespace AaronSaray\SlimPHPMiddleware;

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