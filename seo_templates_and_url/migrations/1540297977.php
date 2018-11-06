<?php
/**
 * Class Migration1540297977
 * @author: nameless
 * @documentation: http://cjp2600.github.io/bim-core/
 */
class Migration1540297977 implements Bim\Revision {

    private static $author = "nameless";
    private static $description = "Seo meta-tags iblock type #add";

    /**
     * up
     * @success : return void or true;
     * @error   : return false, or Exception
     */
    public static function up()
    {
        // do up code
        Bim\Db\Iblock\IblockTypeIntegrate::Add(array (
  'ID' => 'seo_meta',
  'SECTIONS' => 'Y',
  'EDIT_FILE_BEFORE' => '',
  'EDIT_FILE_AFTER' => '',
  'IN_RSS' => 'N',
  'SORT' => '500',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Мета-теги для СЕО',
      'SECTION_NAME' => '',
      'ELEMENT_NAME' => '',
    ),
    'en' => 
    array (
      'NAME' => 'Seo meta-tags',
      'SECTION_NAME' => '',
      'ELEMENT_NAME' => '',
    ),
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
        Bim\Db\Iblock\IblockTypeIntegrate::Delete('seo_meta');

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