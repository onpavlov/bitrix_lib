<?php
/**
 * Class Migration1540905758
 * @author: nameless
 * @documentation: http://cjp2600.github.io/bim-core/
 */
class Migration1540905758 implements Bim\Revision {

    private static $author = "nameless";
    private static $description = "Property ADD_FILTER #add";

    /**
     * up
     * @success : return void or true;
     * @error   : return false, or Exception
     */
    public static function up()
    {
        // do up code
        Bim\Db\Iblock\IblockPropertyIntegrate::Add(array (
  'TIMESTAMP_X' => '2018-10-30 17:21:20',
  'NAME' => 'Доп. признаки страницы',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'ADD_FILTER',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'TMP_ID' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'IBLOCK_CODE' => 'cities_seo_templates',
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
        Bim\Db\Iblock\IblockPropertyIntegrate::Delete('cities_seo_templates', 'ADD_FILTER');

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