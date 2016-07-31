<?php
/**
 * strspn.php
 *
 * PHP version 5
 *
 * @category   Joomla_Components
 * @package    Joomla.Administrator
 * @subpackage Com_Arxivar
 * @author     Mariella Colombo <mariella.colombo@ladyj.eu>
 * @copyright  Copyright © 2016 Colombo Mariella
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://www.ladyj.eu
 */


//Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.

echo strspn("42 is the answer to the 128th question.", "1234567890"), "\n";//2
echo strspn("42 is the answer to the 128th question.", "1234567890", 23), "\n";//0
echo strspn("42 is the answer to the 128th question.", "1234567890", 24, 2), "\n";//2
echo strspn("42 is the answer to the 128th question.", "1234567890", 24, 3), "\n";//3
echo strspn("42 is the answer to the 128th question.", "1234567890", -13), "\n";//1


//Find length of initial segment not matching mask
echo strcspn("42 is the answer to the 128th question.", "1234567890"), "\n";//0
echo strcspn("42 is the answer to the 128th question.", "1234567890", 23), "\n";//1
echo strcspn("42 is the answer to the 128th question.", "1234567890", 24, 2), "\n";//0
echo strcspn("42 is the answer to the 128th question.", "1234567890", 24, 3), "\n";//0
echo strcspn("42 is the answer to the 128th question.", "1234567890", -13), "\n";//0