    public static function quickRandom($length = 10)
    {
        $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
    public static function RandomOtp($length = 6)
    {
        $pool = '0123456789';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
