<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $temp = array(); 
        
        foreach($nums as $key=>$num){
            
            if(isset($temp[$target - $num]) && $temp[$target - $num] != $key){ 
                return [$temp[$target - $num], $key]; 
            } 
            
            $temp[$num] = $key;
            
        }
    }
}
