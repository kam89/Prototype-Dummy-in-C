<!--
/* 
 * Module: dataArr.php
 * Version: 0.0
 * Creator: WEI LEONG
 * Changelog Description:
 * 
 * ----------------------- 
 * 
 */
 -->
<?php 
class DataArr {
   var $m_arr;
   var $m_index;
   
   public function __construct($arr) {
      $this->m_arr = $arr;
      $this->m_index = 0;
   }
   
   public function BOF(){
      $out = false;
      if(count($this->m_arr) == 0 ) {
         $out = true;
      }
      return $out;
   }
   
   public function EOF(){
      $out = false;
      if($this->m_index >  count($this->m_arr) - 1 || $this->m_index < 0) {
         $out = true;
      }
      return $out;
   }
   
   public function MoveNext(){
      $this->m_index +=1;
   }
   
   public function MovePrevious(){
      $this->m_index -=1;
   }
   
   public function MoveFirst(){
      $this->m_index = 0;
   }
   
   public function MoveLast(){
      if (count($this->m_arr) <> 0) {
         $this->m_index = count($this->m_arr)-1;
      } else {
         $this->m_index = 0;
      }
   }
   
   public function Item($col){ //can be column name or column #
      return $this->m_arr[$this->m_index][$col];
   }
   
   public function Count(){
      return count($this->m_arr);
   }
  
   


   
} //class DataArr 
?>