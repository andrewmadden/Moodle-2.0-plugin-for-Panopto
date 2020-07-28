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
 * File for class SessionManagementEnumSessionEndSettingType
 * @package SessionManagement
 * @subpackage Enumerations
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
/**
 * This class stands for SessionManagementEnumSessionEndSettingType originally named SessionEndSettingType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://demo.hosted.panopto.com/Panopto/PublicAPI/4.6/SessionManagement.svc?xsd=xsd3}
 * @package SessionManagement
 * @subpackage Enumerations
 * @author Panopto
 * @version 20150429-01
 * @date 2017-01-19
 */
class SessionManagementEnumSessionEndSettingType extends SessionManagementWsdlClass
{
    /**
     * Constant for value 'Forever'
     * @return string 'Forever'
     */
    const VALUE_FOREVER = 'Forever';
    /**
     * Constant for value 'WithItsFolder'
     * @return string 'WithItsFolder'
     */
    const VALUE_WITHITSFOLDER = 'WithItsFolder';
    /**
     * Constant for value 'SpecificDate'
     * @return string 'SpecificDate'
     */
    const VALUE_SPECIFICDATE = 'SpecificDate';
    /**
     * Return true if value is allowed
     * @uses SessionManagementEnumSessionEndSettingType::VALUE_FOREVER
     * @uses SessionManagementEnumSessionEndSettingType::VALUE_WITHITSFOLDER
     * @uses SessionManagementEnumSessionEndSettingType::VALUE_SPECIFICDATE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SessionManagementEnumSessionEndSettingType::VALUE_FOREVER,SessionManagementEnumSessionEndSettingType::VALUE_WITHITSFOLDER,SessionManagementEnumSessionEndSettingType::VALUE_SPECIFICDATE));
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
