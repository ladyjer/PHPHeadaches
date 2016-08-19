<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


/**
 * Created by PhpStorm.
 * User: renato
 * Date: 17/07/16
 * Time: 15.28
 */

$doc_xml =<<<XML
<?xml version='1.0' standalone='yes'?>
<news>
  <articolo>
    <titolo>Guida a XML</titolo>
    <info>
      <informazioni>
        <autore id="1">Eliox</autore>
        <argomento>PHP e SimpleXML</argomento>
      </informazioni>
      <informazioni>
        <autore id="3">Luke</autore>
        <argomento>XML in PHP e ASP</argomento>
      </informazioni>
    </info>
    <descrizione>Guida completa al parsing XML.</descrizione>
    <data type="it">21 08 06</data>
    <data type="uk">06 08 21</data>
  </articolo>
  <articolo>
    <titolo>Guida a XHTML</titolo>
    <info>
      <informazioni>
        <autore id="2">Eliox</autore>
        <argomento>PHP e SimpleXML</argomento>
      </informazioni>
      <informazioni>
        <autore id="5">Luke</autore>
        <argomento>XML in PHP e ASP</argomento>
      </informazioni>
    </info>
    <descrizione>Guida completa al parsing XHTML.</descrizione>
    <data type="it">21 08 06</data>
    <data type="uk">06 08 21</data>
  </articolo>
</news>

XML;


$xml = simplexml_load_string($doc_xml);
//NB. La root non si considera.
print($xml->articolo[1]->info->informazioni[0]->autore . "<br>");
foreach ($xml->articolo as $articolo)
{
    echo $articolo->descrizione, '<br />';
}
/*
Eliox
Guida completa al parsing XML.
Guida completa al parsing XHTML.
*/

var_dump($xml->xpath('//informazioni/autore[@id > 1]'));
/*
array (size=3)
  0 =>
    object(SimpleXMLElement)[4]
      public '@attributes' =>
        array (size=1)
          'id' => string '3' (length=1)
  1 =>
    object(SimpleXMLElement)[3]
      public '@attributes' =>
        array (size=1)
          'id' => string '2' (length=1)
  2 =>
    object(SimpleXMLElement)[2]
      public '@attributes' =>
        array (size=1)
          'id' => string '5' (length=1)
 */

echo "*******************************";
foreach ($xml->xpath('/news/articolo/info/informazioni/autore[@id > 1]') as $informazioni)
{
    var_dump($informazioni);
}
/***** da nota che con XPATH la root va contata!. Con gli iteratori di SimpeXML invece no
object(SimpleXMLElement)[11]
  public '@attributes' => 
    array (size=1)
      'id' => string '3' (length=1)

object(SimpleXMLElement)[12]
  public '@attributes' => 
    array (size=1)
      'id' => string '2' (length=1)

object(SimpleXMLElement)[13]
  public '@attributes' => 
    array (size=1)
      'id' => string '5' (length=1)

 */




