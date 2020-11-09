<?php
/**
* @param int $no_of_codes//定義一個int類型的參數 用來確定生成多少個優惠碼
* @param array $exclude_codes_array//定義一個exclude_codes_array類型的數組
* @param int $code_length //定義一個code_length的參數來確定優惠碼的長度
* @return array//返回數組
*/
function generate_promotion_code($no_of_codes,$exclude_codes_array='',$code_length =6)
{
$characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$promotion_codes = array();//這個數組用來接收生成的優惠碼
for($j = 0 ; $j < $no_of_codes; $j++)
	{
$code = "";
for ($i = 0; $i < $code_length; $i++)
	{
$code .= $characters[mt_rand(0, strlen($characters)-1)];
	}
//如果生成的6位隨機數不再我們定義的$promotion_codes函數裏面
if(!in_array($code,$promotion_codes))
	{
if(is_array($exclude_codes_array))//
	{
if(!in_array($code,$exclude_codes_array))//排除已經使用的優惠碼
	{
$promotion_codes[$j] = $code;//將生成的新優惠碼賦值給promotion_codes數組
}
else
	{
$j--;
  }
}
else
	{
$promotion_codes[$j] = $code;//將優惠碼賦值給數組
   }
}
else
	 {
$j--;
   }
}
return $promotion_codes;
}
echo '<h1>Promotion / Discount Codes</h1>';
echo '<pre>';
print_r(generate_promotion_code(100,'',6));
echo '</pre>';