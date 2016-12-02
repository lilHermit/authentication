<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Authentication\PasswordHasher;

/**
 * PasswordHasherInterface
 */
interface PasswordHasherInterface
{

    /**
     * Generates password hash.
     *
     * @param string|array $password Plain text password to hash or array of data
     *   required to generate password hash.
     * @return string Password hash
     */
    public function hash($password);

    /**
     * Check hash. Generate hash from user provided password string or data array
     * and check against existing hash.
     *
     * @param string|array $password Plain text password to hash or data array.
     * @param string $hashedPassword Existing hashed password.
     * @return bool True if hashes match else false.
     */
    public function check($password, $hashedPassword);

    /**
     * Returns true if the password need to be rehashed, due to the password being
     * created with anything else than the passwords generated by this class.
     *
     * Returns true by default since the only implementation users should rely
     * on is the one provided by default in php 5.5+ or any compatible library
     *
     * @param string $password The password to verify
     * @return bool
     */
    public function needsRehash($password);
}
