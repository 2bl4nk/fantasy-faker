<?php

namespace DanHanly\FantasyFaker\Provider;

use Faker\Provider\Base;

class Campaign extends Base
{
    protected static $campaignFormat = [
        '{{prefix}} the {{beast}}',
        '{{prefix}} {{name}}',
        'The {{beast}} {{suffix}}',
        '{{name}} {{suffix}}'
    ];

    protected static $prefix = [
        'Chronicles of', 'Sword of', 'Sword of the', 'Doom of', 'Death of',
    ];

    protected static $name = [
        'Mordred', 'Thalion', 'Scrane', 'Gandalf', 'Eowyn', 'Gwen', 'Rurik', 'Andrea', 'Smeagol', 'Eddard', 'Tyrion', 'Sansa'
    ];

    protected static $beast = [
        'Dragon', 'Lich', 'Dire Wolf', 'Spirit', 'Ent', 'Elf', 'Dwarf', 'Kobold', 'Goblin'
    ];

    protected static $suffix = [
        'of Doom', '\'s Journey', '\'s Quest', 'Doom of', 'Death of',
    ];


    public function campaign()
    {
        $format = static::randomElement(self::$campaignFormat);
        return $this->generator->parse($format);
    }
}
