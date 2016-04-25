<?php

class Bingo{
  public function create(){
    $nums = [];

    for($i=0; $i<5; $i++){
      $col = range($i * 15 +1, $i * 15 + 15);//引数1,2の範囲で配列を生成する
      shuffle($col);
      $nums[$i] = array_slice($col,0,5);
    }

    $nums[2][2] = "FREE";
    return $nums;
  }
}
 ?>
