<?php

namespace DanHanly\FantasyFaker\Provider;

use Faker\Provider\Base;

class Character extends Base
{
    protected static $nameFormat = [
        '{{name}}',
        '{{name}} {{name}}',
        '{{name}} the {{suffix}}',
        '{{name}} of {{town}}',
    ];

    protected static $name = [
        'Mordred', 'Thalion', 'Scrane', 'Gandalf', 'Eowyn', 'Gwen', 'Rurik', 'Andrea', 'Smeagol', 'Eddard', 'Tyrion', 'Sansa',
        'Geralt', 'Spider', 'Brandon', 'Aegon'
    ];

    protected static $suffix = [
        'Brute', 'Cold', 'Strong', 'Fierce', 'Flamebringer', 'Light', 'Fat', 'Thick'
    ];

    protected static $town = [
        'Rivia', 'Highgarden', 'Blackwater', ''
    ];


    public function character()
    {
        $format = static::randomElement(self::$nameFormat);
        return $this->generator->parse($format);
    }

    public static function name()
    {
        return static::randomElement(static::$name);
    }

    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    public static function town()
    {
        return static::randomElement(static::$town);
    }
}
