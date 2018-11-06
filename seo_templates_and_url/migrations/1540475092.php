<?php

use Bitrix\Highloadblock\HighloadBlockTable;

/**
 * Class Migration1540475092
 * @author: nameless
 * @documentation: http://cjp2600.github.io/bim-core/
 */
class Migration1540475092 implements Bim\Revision {

    private static $author = "nameless";
    private static $description = "Cities RP and PP";

    private static $cities = [
        'abakan' => [
            // Кого? Чео? Москвы
            'UF_NAME_RP' => 'Абакана',
            // Где? В Москве
            'UF_NAME_PP' => 'Абакане'
        ],
        'arkhangelsk' => [
            'UF_NAME_RP' => 'Архангельска',
            'UF_NAME_PP' => 'Архангельске'
        ],
        'astrakhan' => [
            'UF_NAME_RP' => 'Астрахани',
            'UF_NAME_PP' => 'Астрахани'
        ],
        'barnaul' => [
            'UF_NAME_RP' => 'Барнаула',
            'UF_NAME_PP' => 'Барнауле'
        ],
        'galtaysk' => [
            'UF_NAME_RP' => 'Горно-Алтайска',
            'UF_NAME_PP' => 'Горно-Алтайске'
        ],
        'belgorod' => [
            'UF_NAME_RP' => 'Белгорода',
            'UF_NAME_PP' => 'Белгороде'
        ],
        'birobidjan' => [
            'UF_NAME_RP' => 'Биробиджана',
            'UF_NAME_PP' => 'Биробиджане'
        ],
        'blagoveshensk' => [
            'UF_NAME_RP' => 'Благовещенска',
            'UF_NAME_PP' => 'Благовещенске'
        ],
        'bryansk' => [
            'UF_NAME_RP' => 'Брянска',
            'UF_NAME_PP' => 'Брянске'
        ],
        'vnovgorod' => [
            'UF_NAME_RP' => 'Великого Новгорода',
            'UF_NAME_PP' => 'Великом Новгороде'
        ],
        'vladivostok' => [
            'UF_NAME_RP' => 'Владивостока',
            'UF_NAME_PP' => 'Владивостоке'
        ],
        'vladikavkaz' => [
            'UF_NAME_RP' => 'Владикавказа',
            'UF_NAME_PP' => 'Владикавказе'
        ],
        'vladimir' => [
            'UF_NAME_RP' => 'Владимира',
            'UF_NAME_PP' => 'Владимире'
        ],
        'volgograd' => [
            'UF_NAME_RP' => 'Волгограда',
            'UF_NAME_PP' => 'Волгограде'
        ],
        'vologda' => [
            'UF_NAME_RP' => 'Вологды',
            'UF_NAME_PP' => 'Вологде'
        ],
        'voronezh' => [
            'UF_NAME_RP' => 'Воронежа',
            'UF_NAME_PP' => 'Воронеже'
        ],
        'ekb' => [
            'UF_NAME_RP' => 'Екатеринбурга',
            'UF_NAME_PP' => 'Екатеринбурге'
        ],
        'ivanovo' => [
            'UF_NAME_RP' => 'Иваново',
            'UF_NAME_PP' => 'Иваново'
        ],
        'izhevsk' => [
            'UF_NAME_RP' => 'Ижевска',
            'UF_NAME_PP' => 'Ижевске'
        ],
        'irkutsk' => [
            'UF_NAME_RP' => 'Иркутска',
            'UF_NAME_PP' => 'Иркутске'
        ],
        'yola' => [
            'UF_NAME_RP' => 'Йошкар-Олы',
            'UF_NAME_PP' => 'Йошкар-Оле'
        ],
        'kzn' => [
            'UF_NAME_RP' => 'Казани',
            'UF_NAME_PP' => 'Казани'
        ],
        'kaliningrad' => [
            'UF_NAME_RP' => 'Калининграда',
            'UF_NAME_PP' => 'Калининграде'
        ],
        'kaluga' => [
            'UF_NAME_RP' => 'Калуги',
            'UF_NAME_PP' => 'Калуге'
        ],
        'kemerovo' => [
            'UF_NAME_RP' => 'Кемерова',
            'UF_NAME_PP' => 'Кемерове'
        ],
        'kirov' => [
            'UF_NAME_RP' => 'Кирова',
            'UF_NAME_PP' => 'Кирове'
        ],
        'kostroma' => [
            'UF_NAME_RP' => 'Костромы',
            'UF_NAME_PP' => 'Костроме'
        ],
        'krasnogorsk' => [
            'UF_NAME_RP' => 'Красногорска',
            'UF_NAME_PP' => 'Красногорске'
        ],
        'msk' => [
            'UF_NAME_RP' => 'Москвы',
            'UF_NAME_PP' => 'Москве'
        ],
        'krasnodar' => [
            'UF_NAME_RP' => 'Краснодара',
            'UF_NAME_PP' => 'Краснодаре'
        ],
        'krasnoyarsk' => [
            'UF_NAME_RP' => 'Красноярска',
            'UF_NAME_PP' => 'Красноярске'
        ],
        'kurgan' => [
            'UF_NAME_RP' => 'Кургана',
            'UF_NAME_PP' => 'Кургане'
        ],
        'kursk' => [
            'UF_NAME_RP' => 'Курска',
            'UF_NAME_PP' => 'Курске'
        ],
        'kyzyl' => [
            'UF_NAME_RP' => 'Кызыла',
            'UF_NAME_PP' => 'Кызыле'
        ],
        'lipetsk' => [
            'UF_NAME_RP' => 'Липецка',
            'UF_NAME_PP' => 'Липецке'
        ],
        'magadan' => [
            'UF_NAME_RP' => 'Магадана',
            'UF_NAME_PP' => 'Магадане'
        ],
        'maykop' => [
            'UF_NAME_RP' => 'Майкопа',
            'UF_NAME_PP' => 'Майкопе'
        ],
        'murmansk' => [
            'UF_NAME_RP' => 'Мурманска',
            'UF_NAME_PP' => 'Мурманске'
        ],
        'nalchik' => [
            'UF_NAME_RP' => 'Нальчика',
            'UF_NAME_PP' => 'Нальчике'
        ],
        'nnovgorod' => [
            'UF_NAME_RP' => 'Нижнего Новгорода',
            'UF_NAME_PP' => 'Нижнем Новгороде'
        ],
        'novosib' => [
            'UF_NAME_RP' => 'Новосибирска',
            'UF_NAME_PP' => 'Новосибирске'
        ],
        'omsk' => [
            'UF_NAME_RP' => 'Омска',
            'UF_NAME_PP' => 'Омске'
        ],
        'orel' => [
            'UF_NAME_RP' => 'Орла',
            'UF_NAME_PP' => 'Орле'
        ],
        'orenburg' => [
            'UF_NAME_RP' => 'Оренбурга',
            'UF_NAME_PP' => 'Оренбурге'
        ],
        'penza' => [
            'UF_NAME_RP' => 'Пензы',
            'UF_NAME_PP' => 'Пензе'
        ],
        'perm' => [
            'UF_NAME_RP' => 'Перми',
            'UF_NAME_PP' => 'Перми'
        ],
        'petrozavodsk' => [
            'UF_NAME_RP' => 'Петрозаводска',
            'UF_NAME_PP' => 'Петрозаводске'
        ],
        'petropavlovskk' => [
            'UF_NAME_RP' => 'Петропавловска',
            'UF_NAME_PP' => 'Петропавловске'
        ],
        'pskov' => [
            'UF_NAME_RP' => 'Пскова',
            'UF_NAME_PP' => 'Пскове'
        ],
        'rostov' => [
            'UF_NAME_RP' => 'Ростова',
            'UF_NAME_PP' => 'Ростове'
        ],
        'ryazan' => [
            'UF_NAME_RP' => 'Рязани',
            'UF_NAME_PP' => 'Рязани'
        ],
        'samara' => [
            'UF_NAME_RP' => 'Самары',
            'UF_NAME_PP' => 'Самаре'
        ],
        'spb' => [
            'UF_NAME_RP' => 'Санкт-Петербурга',
            'UF_NAME_PP' => 'Санкт-Петербурге'
        ],
        'saransk' => [
            'UF_NAME_RP' => 'Саранска',
            'UF_NAME_PP' => 'Саранске'
        ],
        'saratov' => [
            'UF_NAME_RP' => 'Саратова',
            'UF_NAME_PP' => 'Саратове'
        ],
        'sevastopol' => [
            'UF_NAME_RP' => 'Севастополя',
            'UF_NAME_PP' => 'Севастополе'
        ],
        'simferopol' => [
            'UF_NAME_RP' => 'Симферополя',
            'UF_NAME_PP' => 'Симферополе'
        ],
        'smolensk' => [
            'UF_NAME_RP' => 'Смоленска',
            'UF_NAME_PP' => 'Смоленске'
        ],
        'stavropol' => [
            'UF_NAME_RP' => 'Ставрополя',
            'UF_NAME_PP' => 'Ставрополе'
        ],
        'syktyvkar' => [
            'UF_NAME_RP' => 'Сыктывкара',
            'UF_NAME_PP' => 'Сыктывкаре'
        ],
        'tambov' => [
            'UF_NAME_RP' => 'Тамбова',
            'UF_NAME_PP' => 'Тамбове'
        ],
        'tver' => [
            'UF_NAME_RP' => 'Твери',
            'UF_NAME_PP' => 'Твери'
        ],
        'tomsk' => [
            'UF_NAME_RP' => 'Томска',
            'UF_NAME_PP' => 'Томске'
        ],
        'tula' => [
            'UF_NAME_RP' => 'Тулы',
            'UF_NAME_PP' => 'Туле'
        ],
        'tumen' => [
            'UF_NAME_RP' => 'Тюмени',
            'UF_NAME_PP' => 'Тюмени'
        ],
        'ulanude' => [
            'UF_NAME_RP' => 'Улан-Уде',
            'UF_NAME_PP' => 'Улан-Уде'
        ],
        'ulsk' => [
            'UF_NAME_RP' => 'Ульяновска',
            'UF_NAME_PP' => 'Ульяновске'
        ],
        'ufa' => [
            'UF_NAME_RP' => 'Уфы',
            'UF_NAME_PP' => 'Уфе'
        ],
        'habarovsk' => [
            'UF_NAME_RP' => 'Хабаровска',
            'UF_NAME_PP' => 'Хабаровске'
        ],
        'hma' => [
            'UF_NAME_RP' => 'Ханты-Мансийска',
            'UF_NAME_PP' => 'Ханты-Мансийске'
        ],
        'chel' => [
            'UF_NAME_RP' => 'Челябинска',
            'UF_NAME_PP' => 'Челябинске'
        ],
        'cheb' => [
            'UF_NAME_RP' => 'Чебоксар',
            'UF_NAME_PP' => 'Чебоксарах'
        ],
        'cherk' => [
            'UF_NAME_RP' => 'Черкесска',
            'UF_NAME_PP' => 'Черкесске'
        ],
        'chita' => [
            'UF_NAME_RP' => 'Читы',
            'UF_NAME_PP' => 'Чите'
        ],
        'elista' => [
            'UF_NAME_RP' => 'Элисты',
            'UF_NAME_PP' => 'Элисте'
        ],
        'yusakh' => [
            'UF_NAME_RP' => 'Южно-Сахалинска',
            'UF_NAME_PP' => 'Южно-Сахалинске'
        ],
        'yakutsk' => [
            'UF_NAME_RP' => 'Якутска',
            'UF_NAME_PP' => 'Якутске'
        ],
        'yaroslavl' => [
            'UF_NAME_RP' => 'Ярославля',
            'UF_NAME_PP' => 'Ярославле'
        ],
    ];

    /**
     * up
     * @success : return void or true;
     * @error   : return false, or Exception
     */
    public static function up()
    {
        $citiesTable = HighloadBlockTable::getById(Cities::CITIES_HIGHLOAD_BLOCK_ID)->fetch();
        $entity = HighloadBlockTable::compileEntity($citiesTable);
        /** @var HighloadBlockTable $citiesEntityDataClass */
        $citiesEntityDataClass = $entity->getDataClass();

        foreach (static::$cities as $code => $data) {
            $city = $citiesEntityDataClass::getRow(['filter' => ['UF_SHORT_CODE' => $code]]);

            if (!empty($city)) {
                $citiesEntityDataClass::update($city['ID'], $data);
            }
        }
    }

    /**
     * down
     * @success : return void or true;
     * @error   : return false, or Exception
     */
    public static function down()
    {
        $citiesTable = HighloadBlockTable::getById(Cities::CITIES_HIGHLOAD_BLOCK_ID)->fetch();
        $entity = HighloadBlockTable::compileEntity($citiesTable);
        /** @var HighloadBlockTable $citiesEntityDataClass */
        $citiesEntityDataClass = $entity->getDataClass();

        foreach (static::$cities as $code => $data) {
            $city = $citiesEntityDataClass::getRow(['filter' => ['UF_SHORT_CODE' => $code]]);

            if (!empty($city)) {
                $citiesEntityDataClass::update($city['ID'], ['UF_NAME_RP' => '', 'UF_NAME_PP' => '']);
            }
        }
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