<?php
/**
 * Class Migration1540298887
 * @author: nameless
 * @documentation: http://cjp2600.github.io/bim-core/
 */
class Migration1540298887 implements Bim\Revision {

    private static $author = "nameless";
    private static $description = "cities_seo_templates iblock #add";

    /**
     * up
     * @success : return void or true;
     * @error   : return false, or Exception
     */
    public static function up()
    {
        // do up code
        Bim\Db\Iblock\IblockIntegrate::Add(array (
  'TIMESTAMP_X' => '23.10.2018 16:47:19',
  'IBLOCK_TYPE_ID' => 'seo_meta',
  'LID' => 's1',
  'CODE' => 'cities_seo_templates',
  'NAME' => 'Шаблоны СЕО по городам',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '',
  'DETAIL_PAGE_URL' => '',
  'SECTION_PAGE_URL' => '',
  'CANONICAL_PAGE_URL' => '',
  'PICTURE' => NULL,
  'DESCRIPTION' => '',
  'DESCRIPTION_TYPE' => 'text',
  'RSS_TTL' => '24',
  'RSS_ACTIVE' => 'Y',
  'RSS_FILE_ACTIVE' => 'N',
  'RSS_FILE_LIMIT' => NULL,
  'RSS_FILE_DAYS' => NULL,
  'RSS_YANDEX_ACTIVE' => 'N',
  'XML_ID' => NULL,
  'TMP_ID' => NULL,
  'INDEX_ELEMENT' => 'N',
  'INDEX_SECTION' => 'N',
  'WORKFLOW' => 'N',
  'BIZPROC' => 'N',
  'SECTION_CHOOSER' => 'L',
  'LIST_MODE' => 'C',
  'RIGHTS_MODE' => 'S',
  'SECTION_PROPERTY' => NULL,
  'PROPERTY_INDEX' => NULL,
  'VERSION' => '2',
  'LAST_CONV_ELEMENT' => '0',
  'SOCNET_GROUP_ID' => NULL,
  'EDIT_FILE_BEFORE' => '',
  'EDIT_FILE_AFTER' => '',
  'SECTIONS_NAME' => 'Разделы',
  'SECTION_NAME' => 'Раздел',
  'ELEMENTS_NAME' => 'Элементы',
  'ELEMENT_NAME' => 'Элемент',
  'EXTERNAL_ID' => NULL,
  'LANG_DIR' => '/',
  'SERVER_NAME' => '',
  'GROUP_ID' => 
  array (
    1 => 'X',
    2 => 'R',
  ),
  'FIELDS' => 
  array (
    'IBLOCK_SECTION' => 
    array (
      'NAME' => 'Привязка к разделам',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 
      array (
        'KEEP_IBLOCK_SECTION_ID' => 'N',
      ),
    ),
    'ACTIVE' => 
    array (
      'NAME' => 'Активность',
      'IS_REQUIRED' => 'Y',
      'DEFAULT_VALUE' => 'Y',
    ),
    'ACTIVE_FROM' => 
    array (
      'NAME' => 'Начало активности',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '',
    ),
    'ACTIVE_TO' => 
    array (
      'NAME' => 'Окончание активности',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '',
    ),
    'SORT' => 
    array (
      'NAME' => 'Сортировка',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '0',
    ),
    'NAME' => 
    array (
      'NAME' => 'Название',
      'IS_REQUIRED' => 'Y',
      'DEFAULT_VALUE' => '',
    ),
    'PREVIEW_PICTURE' => 
    array (
      'NAME' => 'Картинка для анонса',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 
      array (
        'FROM_DETAIL' => 'N',
        'SCALE' => 'N',
        'WIDTH' => '',
        'HEIGHT' => '',
        'IGNORE_ERRORS' => 'N',
        'METHOD' => 'resample',
        'COMPRESSION' => 95,
        'DELETE_WITH_DETAIL' => 'N',
        'UPDATE_WITH_DETAIL' => 'N',
        'USE_WATERMARK_TEXT' => 'N',
        'WATERMARK_TEXT' => '',
        'WATERMARK_TEXT_FONT' => '',
        'WATERMARK_TEXT_COLOR' => '',
        'WATERMARK_TEXT_SIZE' => '',
        'WATERMARK_TEXT_POSITION' => 'tl',
        'USE_WATERMARK_FILE' => 'N',
        'WATERMARK_FILE' => '',
        'WATERMARK_FILE_ALPHA' => '',
        'WATERMARK_FILE_POSITION' => 'tl',
        'WATERMARK_FILE_ORDER' => NULL,
      ),
    ),
    'PREVIEW_TEXT_TYPE' => 
    array (
      'NAME' => 'Тип описания для анонса',
      'IS_REQUIRED' => 'Y',
      'DEFAULT_VALUE' => 'text',
    ),
    'PREVIEW_TEXT' => 
    array (
      'NAME' => 'Описание для анонса',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '',
    ),
    'DETAIL_PICTURE' => 
    array (
      'NAME' => 'Детальная картинка',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 
      array (
        'SCALE' => 'N',
        'WIDTH' => '',
        'HEIGHT' => '',
        'IGNORE_ERRORS' => 'N',
        'METHOD' => 'resample',
        'COMPRESSION' => 95,
        'USE_WATERMARK_TEXT' => 'N',
        'WATERMARK_TEXT' => '',
        'WATERMARK_TEXT_FONT' => '',
        'WATERMARK_TEXT_COLOR' => '',
        'WATERMARK_TEXT_SIZE' => '',
        'WATERMARK_TEXT_POSITION' => 'tl',
        'USE_WATERMARK_FILE' => 'N',
        'WATERMARK_FILE' => '',
        'WATERMARK_FILE_ALPHA' => '',
        'WATERMARK_FILE_POSITION' => 'tl',
        'WATERMARK_FILE_ORDER' => NULL,
      ),
    ),
    'DETAIL_TEXT_TYPE' => 
    array (
      'NAME' => 'Тип детального описания',
      'IS_REQUIRED' => 'Y',
      'DEFAULT_VALUE' => 'text',
    ),
    'DETAIL_TEXT' => 
    array (
      'NAME' => 'Детальное описание',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '',
    ),
    'XML_ID' => 
    array (
      'NAME' => 'Внешний код',
      'IS_REQUIRED' => 'Y',
      'DEFAULT_VALUE' => '',
    ),
    'CODE' => 
    array (
      'NAME' => 'Символьный код',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 
      array (
        'UNIQUE' => 'N',
        'TRANSLITERATION' => 'N',
        'TRANS_LEN' => 100,
        'TRANS_CASE' => 'L',
        'TRANS_SPACE' => '-',
        'TRANS_OTHER' => '-',
        'TRANS_EAT' => 'Y',
        'USE_GOOGLE' => 'N',
      ),
    ),
    'TAGS' => 
    array (
      'NAME' => 'Теги',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '',
    ),
    'SECTION_NAME' => 
    array (
      'NAME' => 'Название',
      'IS_REQUIRED' => 'Y',
      'DEFAULT_VALUE' => '',
    ),
    'SECTION_PICTURE' => 
    array (
      'NAME' => 'Картинка для анонса',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 
      array (
        'FROM_DETAIL' => 'N',
        'SCALE' => 'N',
        'WIDTH' => '',
        'HEIGHT' => '',
        'IGNORE_ERRORS' => 'N',
        'METHOD' => 'resample',
        'COMPRESSION' => 95,
        'DELETE_WITH_DETAIL' => 'N',
        'UPDATE_WITH_DETAIL' => 'N',
        'USE_WATERMARK_TEXT' => 'N',
        'WATERMARK_TEXT' => '',
        'WATERMARK_TEXT_FONT' => '',
        'WATERMARK_TEXT_COLOR' => '',
        'WATERMARK_TEXT_SIZE' => '',
        'WATERMARK_TEXT_POSITION' => 'tl',
        'USE_WATERMARK_FILE' => 'N',
        'WATERMARK_FILE' => '',
        'WATERMARK_FILE_ALPHA' => '',
        'WATERMARK_FILE_POSITION' => 'tl',
        'WATERMARK_FILE_ORDER' => NULL,
      ),
    ),
    'SECTION_DESCRIPTION_TYPE' => 
    array (
      'NAME' => 'Тип описания',
      'IS_REQUIRED' => 'Y',
      'DEFAULT_VALUE' => 'text',
    ),
    'SECTION_DESCRIPTION' => 
    array (
      'NAME' => 'Описание',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '',
    ),
    'SECTION_DETAIL_PICTURE' => 
    array (
      'NAME' => 'Детальная картинка',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 
      array (
        'SCALE' => 'N',
        'WIDTH' => '',
        'HEIGHT' => '',
        'IGNORE_ERRORS' => 'N',
        'METHOD' => 'resample',
        'COMPRESSION' => 95,
        'USE_WATERMARK_TEXT' => 'N',
        'WATERMARK_TEXT' => '',
        'WATERMARK_TEXT_FONT' => '',
        'WATERMARK_TEXT_COLOR' => '',
        'WATERMARK_TEXT_SIZE' => '',
        'WATERMARK_TEXT_POSITION' => 'tl',
        'USE_WATERMARK_FILE' => 'N',
        'WATERMARK_FILE' => '',
        'WATERMARK_FILE_ALPHA' => '',
        'WATERMARK_FILE_POSITION' => 'tl',
        'WATERMARK_FILE_ORDER' => NULL,
      ),
    ),
    'SECTION_XML_ID' => 
    array (
      'NAME' => 'Внешний код',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => '',
    ),
    'SECTION_CODE' => 
    array (
      'NAME' => 'Символьный код',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 
      array (
        'UNIQUE' => 'N',
        'TRANSLITERATION' => 'N',
        'TRANS_LEN' => 100,
        'TRANS_CASE' => 'L',
        'TRANS_SPACE' => '-',
        'TRANS_OTHER' => '-',
        'TRANS_EAT' => 'Y',
        'USE_GOOGLE' => 'N',
      ),
    ),
    'LOG_SECTION_ADD' => 
    array (
      'NAME' => 'LOG_SECTION_ADD',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => NULL,
    ),
    'LOG_SECTION_EDIT' => 
    array (
      'NAME' => 'LOG_SECTION_EDIT',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => NULL,
    ),
    'LOG_SECTION_DELETE' => 
    array (
      'NAME' => 'LOG_SECTION_DELETE',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => NULL,
    ),
    'LOG_ELEMENT_ADD' => 
    array (
      'NAME' => 'LOG_ELEMENT_ADD',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => NULL,
    ),
    'LOG_ELEMENT_EDIT' => 
    array (
      'NAME' => 'LOG_ELEMENT_EDIT',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => NULL,
    ),
    'LOG_ELEMENT_DELETE' => 
    array (
      'NAME' => 'LOG_ELEMENT_DELETE',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => NULL,
    ),
    'XML_IMPORT_START_TIME' => 
    array (
      'NAME' => 'XML_IMPORT_START_TIME',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => NULL,
      'VISIBLE' => 'N',
    ),
    'DETAIL_TEXT_TYPE_ALLOW_CHANGE' => 
    array (
      'NAME' => 'DETAIL_TEXT_TYPE_ALLOW_CHANGE',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 'Y',
      'VISIBLE' => 'N',
    ),
    'PREVIEW_TEXT_TYPE_ALLOW_CHANGE' => 
    array (
      'NAME' => 'PREVIEW_TEXT_TYPE_ALLOW_CHANGE',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 'Y',
      'VISIBLE' => 'N',
    ),
    'SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE' => 
    array (
      'NAME' => 'SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE',
      'IS_REQUIRED' => 'N',
      'DEFAULT_VALUE' => 'Y',
      'VISIBLE' => 'N',
    ),
  ),
));

Bim\Db\Iblock\IblockPropertyIntegrate::Add(array (
  'TIMESTAMP_X' => '2018-10-23 16:47:20',
  'IBLOCK_ID' => '27',
  'NAME' => 'Код шаблона',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'META_TEMPLATE_CODE',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => '',
  'MULTIPLE_CNT' => '5',
  'TMP_ID' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'IS_REQUIRED' => 'Y',
  'VERSION' => '2',
  'USER_TYPE' => NULL,
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => '',
  'IBLOCK_CODE' => 'regions_seo_templates',
  'VALUES' => 
  array (
      array (
          'VALUE' => 'Главная страница',
          'DEF' => 'N',
          'SORT' => '500',
          'XML_ID' => 'MAIN',
          'TMP_ID' => NULL,
          'EXTERNAL_ID' => 'MAIN',
          'PROPERTY_NAME' => 'Код шаблона',
          'PROPERTY_CODE' => 'META_TEMPLATE_CODE',
          'PROPERTY_SORT' => '500',
      ),
      array (
          'VALUE' => 'Раздел',
          'DEF' => 'N',
          'SORT' => '500',
          'XML_ID' => 'SECTION',
          'TMP_ID' => NULL,
          'EXTERNAL_ID' => 'SECTION',
          'PROPERTY_NAME' => 'Код шаблона',
          'PROPERTY_CODE' => 'META_TEMPLATE_CODE',
          'PROPERTY_SORT' => '500',
      ),
      array (
          'VALUE' => 'Категория',
          'DEF' => 'N',
          'SORT' => '500',
          'XML_ID' => 'CATEGORY',
          'TMP_ID' => NULL,
          'EXTERNAL_ID' => 'CATEGORY',
          'PROPERTY_NAME' => 'Код шаблона',
          'PROPERTY_CODE' => 'META_TEMPLATE_CODE',
          'PROPERTY_SORT' => '500',
      ),
      array (
          'VALUE' => 'Подкатегория',
          'DEF' => 'N',
          'SORT' => '500',
          'XML_ID' => 'SUBCATEGORY',
          'TMP_ID' => NULL,
          'EXTERNAL_ID' => 'SUBCATEGORY',
          'PROPERTY_NAME' => 'Код шаблона',
          'PROPERTY_CODE' => 'META_TEMPLATE_CODE',
          'PROPERTY_SORT' => '500',
      ),
  ),
  'LINK_IBLOCK_CODE' => NULL,
));

Bim\Db\Iblock\IblockPropertyIntegrate::Add(array (
  'TIMESTAMP_X' => '2018-10-23 16:47:21',
  'IBLOCK_ID' => '27',
  'NAME' => 'Шаблон META TITLE',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'META_TITLE',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
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
  'IBLOCK_CODE' => 'regions_seo_templates',
  'LINK_IBLOCK_CODE' => NULL,
));

Bim\Db\Iblock\IblockPropertyIntegrate::Add(array (
  'TIMESTAMP_X' => '2018-10-23 16:47:21',
  'IBLOCK_ID' => '27',
  'NAME' => 'Шаблон META DESCRIPTION',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'META_DESCRIPTION',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
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
  'IBLOCK_CODE' => 'regions_seo_templates',
  'LINK_IBLOCK_CODE' => NULL,
));

Bim\Db\Iblock\IblockPropertyIntegrate::Add(array (
  'TIMESTAMP_X' => '2018-10-23 16:47:21',
  'IBLOCK_ID' => '27',
  'NAME' => 'Шаблон META KEYWORDS',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'META_KEYWORDS',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
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
  'IBLOCK_CODE' => 'regions_seo_templates',
  'LINK_IBLOCK_CODE' => NULL,
));

Bim\Db\Iblock\IblockPropertyIntegrate::Add(array (
  'TIMESTAMP_X' => '2018-10-23 16:47:21',
  'IBLOCK_ID' => '27',
  'NAME' => 'Тег H1',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'TAG_H',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
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
  'HINT' => 'Доступные переменные: {city.name}, {city.name.rp}, {city.name.pp}, {section.name}',
  'IBLOCK_CODE' => 'regions_seo_templates',
  'LINK_IBLOCK_CODE' => NULL,
));

Bim\Db\Iblock\IblockPropertyIntegrate::Add(array (
  'TIMESTAMP_X' => '2018-10-23 16:47:21',
  'IBLOCK_ID' => '27',
  'NAME' => 'Пропустить TITLE(Заголовок) для первой страницы',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SKIP_FIRST_PAGE',
  'DEFAULT_VALUE' => '',
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'C',
  'MULTIPLE' => 'N',
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
  'IBLOCK_CODE' => 'regions_seo_templates',
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Да',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'Y',
      'TMP_ID' => NULL,
      'EXTERNAL_ID' => 'Y',
      'PROPERTY_NAME' => 'Пропустить TITLE(Заголовок) для первой страницы',
      'PROPERTY_CODE' => 'SKIP_FIRST_PAGE',
      'PROPERTY_SORT' => '500',
    ),
  ),
  'LINK_IBLOCK_CODE' => NULL,
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
        Bim\Db\Iblock\IblockIntegrate::Delete('regions_seo_templates');

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