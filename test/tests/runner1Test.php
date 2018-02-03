 
<?php
// test PHPUNIT
// Makegood evaluation


use PHPUnit\Framework\TestCase;

require_once '../Luhn.php';

class LuhnTest extends TestCase
{
 
    /**
     * test Valid
     */
    public function testValid()
    {
       $this->assertEquals(Luhn::isValidLuhn(182), TRUE);
       
    }     
       
    
    
    /**
     * test not Valid
     */
    public function testNotValid()
    {
      $this->assertEquals(Luhn::isValidLuhn(1114), FALSE);
        
    }  
    
    
    
}  


?>
