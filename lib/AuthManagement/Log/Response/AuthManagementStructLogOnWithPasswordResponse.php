<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package block_panopto
 * @copyright Panopto 2020
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 /**
 * File for class AuthManagementStructLogOnWithPasswordResponse
 * @package AuthManagement
 * @subpackage Structs
 * @author Panopto
 * @version 20150429-01
 * @date 2017-05-25
 */
/**
 * This class stands for AuthManagementStructLogOnWithPasswordResponse originally named LogOnWithPasswordResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.2/Auth.svc?xsd=xsd0}
 * @package AuthManagement
 * @subpackage Structs
 * @author Panopto
 * @version 20150429-01
 * @date 2017-05-25
 */
class AuthManagementStructLogOnWithPasswordResponse extends AuthManagementWsdlClass
{
    /**
     * The LogOnWithPasswordResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $LogOnWithPasswordResult;
    /**
     * Constructor method for LogOnWithPasswordResponse
     * @see parent::__construct()
     * @param boolean $_logOnWithPasswordResult
     * @return AuthManagementStructLogOnWithPasswordResponse
     */
    public function __construct($_logOnWithPasswordResult = NULL)
    {
        parent::__construct(array('LogOnWithPasswordResult'=>$_logOnWithPasswordResult),false);
    }
    /**
     * Get LogOnWithPasswordResult value
     * @return boolean|null
     */
    public function getLogOnWithPasswordResult()
    {
        return $this->LogOnWithPasswordResult;
    }
    /**
     * Set LogOnWithPasswordResult value
     * @param boolean $_logOnWithPasswordResult the LogOnWithPasswordResult
     * @return boolean
     */
    public function setLogOnWithPasswordResult($_logOnWithPasswordResult)
    {
        return ($this->LogOnWithPasswordResult = $_logOnWithPasswordResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AuthManagementWsdlClass::__set_state()
     * @uses AuthManagementWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return AuthManagementStructLogOnWithPasswordResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
