<?php
/**
 * _1_print.php
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
<?php
/**
 * Created by PhpStorm.
 * User: renato
 * Date: 18/07/16
 * Time: 6.07
 */


vprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01
echo PHP_EOL;

$str = vsprintf("%04d-%02d-%02d", explode('-', '1988-8-1')); // 1988-08-01
echo PHP_EOL;
echo $str;



$num = 5;
$location = 'tree';

echo '<br/>';
$format = 'There are %d monkeys in the %s';
$valore = sprintf($format, $num, $location);
echo $valore;


echo PHP_EOL;
printf("valore pari a euro %2.2f", 30.25);


echo PHP_EOL;
printf("%'*4d", 2);//***2


echo PHP_EOL;
printf("%-'*4d", 2);//2***




echo "<br>",sprintf('|%.4d| %.4f',0XFF,0XFF),"<br>";//|255| 255.0000


echo PHP_EOL;
echo sprintf("%.4d", 125);//125
echo PHP_EOL;
echo sprintf("%.2f", 4/7);//0.57

/****
 *
 *
 * regola
 *
 *
uno o più caratteri (escluso %) che precedono il risultato
il simbolo %
uno specificatore di padding (opzionale)
uno specificatore di allineamento (opzionale)
uno specificatore di numero minimo di caratteri (opzionale)
uno specificatore di precisione (opzionale)
uno specificatore di tipo che indica se l’argomento da stampare sia da considerarsi intero, float, stringa etc.
 *
 *
 * */