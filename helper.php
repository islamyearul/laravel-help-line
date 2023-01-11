    public static function quickRandom($length = 10)
    {
        $pool = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
=========================================
    public static function RandomOtp($length = 6)
    {
        $pool = '0123456789';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

=============================================
    public static function invoice_num($input, $pad_len, $prefix = null, $shop_id, $GetYear)
    {
        if ($pad_len <= strlen($input)) {
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
        }

        if (is_string($prefix)) {
            return sprintf("%s%s%s%s%s", $prefix,$GetYear,$shop_id, '-', str_pad($input, $pad_len, "0", STR_PAD_LEFT));
        }

        return sprintf("%s%s%s%s%s", $GetYear,$shop_id, '-', str_pad($input, $pad_len, "0", STR_PAD_LEFT));
    }
=======================================
                                        public static function orderSerial($shop_id, $company_id)
    {
        // Ordera No
        //  $this->sendRequest($uri)

        $Shop = MstShop::find($shop_id);
        $Shopname = strtoupper(substr($Shop->shop_name, 0, 3));
        $Totalorders = Order::where('shop_id', $shop_id)->get()->count();

        $ORDER_NO_PREFIX = self::preference(9, $company_id, $shop_id); // 9 for order no prefix
        $ORDER_NO_START = self::preference(11, $company_id, $shop_id); // 11 for order no start
        $ORDER_NO_LEN = self::preference(10, $company_id, $shop_id); // 10 for order no length
        // $Preference = Preference::where('keyword', 'order_no_prefix')->where('mst_company_id', auth()->user()->mst_company_id)->where('is_active', 1)->first();
        $Prefix = $ORDER_NO_PREFIX ? $ORDER_NO_PREFIX->char_val : $Shopname;
        $Start = $ORDER_NO_START ? $ORDER_NO_START->int_val : 0;
        $Len = $ORDER_NO_LEN ? $ORDER_NO_LEN->int_val : 5;
        $GetCurrentYear = date('Y'); // return 4 digit current year
        $GetSlYear = $Shop->order_sl_year; // return 4 digit current year

        if ($GetCurrentYear > $GetSlYear) {     
            $input = intval(1) + $Start; //main value
            $Order_NO = self::invoice_num($input, $Len, $Prefix, $Shop->id, $GetCurrentYear);
            $Shop->next_order_sl = 2;
            $Shop->order_sl_year = $GetCurrentYear;
            $Shop->save();
            return $Order_NO;
        } else {
            $input = $Shop->next_order_sl + $Start; //main value
            $Order_NO = self::invoice_num($input, $Len, $Prefix, $Shop->id, $GetSlYear);
            $Shop->next_order_sl += 1;
            $Shop->save();
            return $Order_NO;
        }

    }
=======================================   
  Laravel all() method modification in Model Class 
             /**
    * get all users except specified ones
    *
    * @param  array|mixed  $keys
    * @return array
    */
    public static function all($keys = null)
    {
        $data = parent::all(); # grep data from parent 

        return $data->except(auth()->id); # except whoever you wanted
    }
=======================================                                      
=======================================   
=======================================                                     
=======================================   
