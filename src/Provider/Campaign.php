<?php

namespace DanHanly\FantasyFaker\Provider;

use Faker\Provider\Base;

class Campaign extends Base
{
    protected static $campaignFormat = [
        '{{campaignPrefix}} the {{campaignBeast}}',
        '{{campaignPrefix}} {{characterName}}',
        'The {{campaignBeast}}{{campaignSuffix}}',
        '{{characterName}}{{campaignSuffix}}'
    ];

    protected static $campaignPrefix = [
        'Chronicles of', 'Sword of', 'Sword of the', 'Doom of', 'Death of', 'Flames of',
    ];

    protected static $characterName = [
        'Mordred', 'Thalion', 'Scrane', 'Gandalf', 'Eowyn', 'Gwen', 'Rurik', 'Andrea', 'Smeagol', 'Eddard', 'Tyrion', 'Sansa'
    ];

    protected static $campaignBeast = [
        'Dragon', 'Lich', 'Dire Wolf', 'Spirit', 'Ent', 'Elf', 'Dwarf', 'Kobold', 'Goblin'
    ];

    protected static $campaignSuffix = [
        ' of Doom', '\'s Journey', '\'s Quest', '\'s Lament',
    ];


    public function campaign()
    {
        $format = static::randomElement(self::$campaignFormat);
        return $this->generator->parse($format);
    }

    public static function campaignPrefix()
    {
        return static::randomElement(static::$campaignPrefix);
    }

    public static function campaignBeast()
    {
        return static::randomElement(static::$campaignBeast);
    }

    public static function characterName()
    {
        return static::randomElement(static::$characterName);
    }

    public static function campaignSuffix()
    {
        return static::randomElement(static::$campaignSuffix);
    }
}
