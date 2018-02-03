 
<?php
/*  
 * Class Luhn impements the luhn allgorithm
 * The original implementation at Github
 * Version 1.0
 */


class Luhn
{

    /**
     * Main algorithm.
     *
     * @param int|string $number
     * @return int
     */
    private static function algorithm($number)
    {
        $sum = 0;
        settype($number, 'string');
        $length =strlen($number);
        for ($i = $length - 1; $i >= 0; $i --) {
            
            // Double the value of every second digit beginning from the right
            //  the second at first [1,2,3]--> [2]
            // [1,2] -->1 
            
            $decide = ($length %2 ==0)?($i%2==0):(($i+1)%2 ==0);
            if ($decide) {
                $product = intval ( $number[$i]) * 2;
                if ($product > 9) {
                    $product = array_sum(str_split($product));
                }
            } else {
                $product = intval( $number[$i]);
            }
            $sum += $product;
        }
        
        return $sum;
    }

    /**
     * IS Valid check.
     *
     * @param int|string $number
     *
     */
    public static function isValidLuhn($number)
    {
 
        if ((self::algorithm($number) % 10) === 0) {
            print("the credit card number is valid!!");
            return TRUE;
        } else {
            print("the credit card number is not valid!!");
            return FALSE;
        }
    }
} // end class Luhn

   

?> 