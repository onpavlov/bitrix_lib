<?php
/**
 * Class Migration1540474320
 * @author: nameless
 * @documentation: http://cjp2600.github.io/bim-core/
 */
class Migration1540474320 implements Bim\Revision {

    private static $author = "nameless";
    private static $description = "UF_NAME_PP #add";

    /**
     * up
     * @success : return void or true;
     * @error   : return false, or Exception
     */
    public static function up()
    {
        // do up code
        Bim\Db\Iblock\HighloadblockFieldIntegrate::Add('CitiesWithXML', array (
  'FIELD_NAME' => 'UF_NAME_PP',
  'USER_TYPE_ID' => 'string',
  'XML_ID' => 'UF_NAME_PP',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 
  array (
    'SIZE' => 20,
    'ROWS' => 1,
    'REGEXP' => '',
    'MIN_LENGTH' => 0,
    'MAX_LENGTH' => 0,
    'DEFAULT_VALUE' => '',
  ),
  'EDIT_FORM_LABEL' => 
  array (
    'en' => '',
    'ru' => 'Название города в предложном падеже',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'en' => '',
    'ru' => '',
  ),
));

    }

    /**
     * down
     * @success : return void or true;
     * @error   : return false, or Exception
     */
    public static function down()
    {
        // do down code
        Bim\Db\Iblock\HighloadblockFieldIntegrate::Delete('CitiesWithXML', 'UF_NAME_PP');

    }

    /**
     * getDescription
     * @return string
     */
    public static function getDescription()
    {
        return self::$description;
    }

    /**
     * getAuthor
     * @return string
     */
    public static function getAuthor()
    {
        return self::$author;
    }

}