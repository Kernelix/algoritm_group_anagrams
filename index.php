<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        if(empty($strs)){
            return array('');
        }

        foreach($strs as $str){
                $split = str_split($str);
                sort($split);
                $stringKey = implode($split);
                $output[$stringKey][] = $str;
        }

        return $output;
    }
}
