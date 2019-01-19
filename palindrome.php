<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        return $word;
    }
    
    function check($x)
    {
        $jml=strlen($x);
        $tmp=strtolower($x);
        $kalimat="";
        for ($i=$jml; $i>=0;$i--){
            $kalimat=$kalimat."".$tmp[$i];
        }
        if ($tmp==$kalimat){
            $x=strtolower($x);
            return Palindrome::isPalindrome($x);
        }else{
            return $x;
        }

    }
}

echo Palindrome::check('Deleveled');