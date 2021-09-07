<?php
namespace CondeLua\Bank\Model\Abstraction;
/**
 * Description of CPF
 *
 * @author arauj
 */
final class CPF 
{
    private string $number;
    
    //format the CPF number as 000.000.000-00
    private function formatNumber(string $number): string {
        $formattedNumber = filter_var(
                $number, FILTER_VALIDATE_REGEXP, [
                    'options' => 
                        [
                            'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                        ]
                ]
        );
        
        if($formattedNumber === false){
            echo "Invalid CPF";
            exit();
        }
        
        return $formattedNumber;
    }
   
    //build the CPF object
    public function __construct(string $number) {
        $formattedNumber = $this->formatNumber($number);
        $this->number = $formattedNumber;
    }
    
    //Show the number
    public function getNumber(): string {
        return $this->number;
    }
}            
