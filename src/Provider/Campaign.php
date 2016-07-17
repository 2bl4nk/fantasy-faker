<?php

namespace DanHanly\FantasyFaker\Provider;

use Faker\Provider\Base;

class Campaign extends Base
{
    protected static $campaignFormat = [
        '{{campaignPrefix}} the {{campaignBeast}}',
        '{{campaignPrefix}} {{campaignName}}',
        'The {{campaignBeast}} {{campaignSuffix}}',
        '{{campaignName}} {{campaignSuffix}}'
    ];

    protected static $campaignPrefix = [
        'Chronicles of', 'Sword of', 'Sword of the', 'Doom of', 'Death of',
    ];

    protected static $campaignName = [
        'Mordred', 'Thalion', 'Scrane', 'Gandalf', 'Eowyn', 'Gwen', 'Rurik', 'Andrea', 'Smeagol', 'Eddard', 'Tyrion', 'Sansa'
    ];

    protected static $campaignBeast = [
        'Dragon', 'Lich', 'Dire Wolf', 'Spirit', 'Ent', 'Elf', 'Dwarf', 'Kobold', 'Goblin'
    ];

    protected static $campaignSuffix = [
        'of Doom', '\'s Journey', '\'s Quest', 'Doom of', 'Death of',
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

    public static function campaignName()
    {
        return static::randomElement(static::$campaignName);
    }

    public static function campaignSuffix()
    {
        return static::randomElement(static::$campaignSuffix);
    }
}
