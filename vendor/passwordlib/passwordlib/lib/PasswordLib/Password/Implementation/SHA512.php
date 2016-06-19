<?php
/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * PHP version 5.3
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 * @copyright  2011 The Authors
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    Build @@version@@
 */

namespace PasswordLib\Password\Implementation;

use PasswordLib\Random\Factory as RandomFactory;

/**
 * The Blowfish password hashing implementation
 *
 * Use this class to generate and validate Blowfish password hashes.
 *
 * @category   PHPPasswordLib
 * @package    Password
 * @subpackage Implementation
 * @author     Anthony Ferrara <ircmaxell@ircmaxell.com>
 */
class SHA512 extends Crypt {

    protected static $prefix = '$6$';

    protected $saltLen = 16;

    /**
     * Determine if the hash was made with this method
     *
     * @param string $hash The hashed data to check
     *
     * @return boolean Was the hash created by this method
     */
    public static function detect($hash) {
        $regex = '#^\$6\$(rounds=\d{4,9}\$)?[a-zA-Z0-9./]{16}\$[a-zA-Z0-9./]{86}$#';
        return 1 == preg_match($regex, $hash);
    }

    protected function generateSalt() {
        $salt = parent::generateSalt();
        return '$6$rounds=' . $this->iterations . '$' . $salt;
    }

}