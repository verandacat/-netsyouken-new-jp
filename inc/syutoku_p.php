<?php
	//約定ごとの最低手数料/ 1:100円以下、2:200円以下、3：300円以下
	$pkod1 = $_POST["kod1"];

	if(!empty($pkod1)):

		if($pkod1 === "0"):
			$pkod1_txt = '指定なし';
		endif;

		if($pkod1 === "1"):
			$pkod1_txt = '100円以下';
		endif;
		
		if($pkod1 === "2"):
			$pkod1_txt = '200円以下';
		endif;
		
		if($pkod1 === "3"):
			$pkod1_txt = '300円以下';
		endif;
	
	else:
  	$pkod1_txt = '指定なし';
  endif;
  

	//投資商品 
	//1：先物・オプション
  //2：ミニ株
  //3：投資信託
  //4：IPO
  //5：日経225ミニ
  //6：信用取引
  //7：夜間取引
	$pkod2 = $_POST["kod2"];
	$pkod2_0 = $_POST["kod2"][0];
	$pkod2_1 = $_POST["kod2"][1];
	$pkod2_2 = $_POST["kod2"][2];
	$pkod2_3 = $_POST["kod2"][3];
	$pkod2_4 = $_POST["kod2"][4];
	$pkod2_5 = $_POST["kod2"][5];
	$pkod2_6 = $_POST["kod2"][6];
	$pkod2_7 = $_POST["kod2"][7];
	

    if($pkod2_1 === "1" || $pkod2_2 === "2" || $pkod2_3 === "3"  || $pkod2_4 === "4" || $pkod2_5 === "5" || $pkod2_6 === "6" || $pkod2_7 === "7"):
     else:
      $pkod2_txt = '指定なし';
    endif;
    
		if($pkod2_1 === "1"):
			$pkod2_txt = '先物・オプション';
			if($pkod2_2 === "2" || $pkod2_3 === "3"  || $pkod2_4 === "4" || $pkod2_5 === "5" || $pkod2_6 === "6" || $pkod2_7 === "7"):
				$pkod2_txt .= '・';
			endif;
		endif;
		
		if($pkod2_2 === "2"):
			$pkod2_txt .= 'ミニ株';
			if($pkod2_3 === "3"  || $pkod2_4 === "4" || $pkod2_5 === "5" || $pkod2_6 === "6" || $pkod2_7 === "7"):
				$pkod2_txt .= '・';
			endif;
		endif;
		
		if($pkod2_3 === "3"):
			$pkod2_txt .= '投資信託';
			if($pkod2_4 === "4" || $pkod2_5 === "5" || $pkod2_6 === "6" || $pkod2_7 === "7"):
				$pkod2_txt .= '・';
			endif;
		endif;
		
		if($pkod2_4 === "4"):
			$pkod2_txt .= 'IPO';
			if($pkod2_5 === "5" || $pkod2_6 === "6" || $pkod2_7 === "7"):
				$pkod2_txt .= '・';
			endif;
		endif;
		
		if($pkod2_5 === "5"):
			$pkod2_txt .= '日経225ミニ';
			if($pkod2_6 === "6" || $pkod2_7 === "7"):
				$pkod2_txt .= '・';
			endif;
		endif;
		
		if($pkod2_6 === "6"):
			$pkod2_txt .= '信用取引';
			if($pkod2_7 === "7"):
				$pkod2_txt .= '・';
			endif;
		endif;
		
		if($pkod2_7 === "7"):
			$pkod2_txt .= '夜間取引';
		endif;
		


	//外国株 1：米国株、2：中国株、3：韓国株
	$pkod3 = $_POST["kod3"];
	$pkod3_0 = $_POST["kod3"][0];
	$pkod3_1 = $_POST["kod3"][1];
	$pkod3_2 = $_POST["kod3"][2];
	$pkod3_3 = $_POST["kod3"][3];
	
	if(isset($pkod3)):
    if($pkod3_1 === "1" || $pkod3_2 === "2" || $pkod3_3 === "3"):
     else:
			$pkod3_txt = '指定なし';
		endif;

		if($pkod3_1 === "1"):
			$pkod3_txt = '米国株';
			if($pkod3_2 === "2" || $pkod3_3 === "3"):
				$pkod3_txt .=  '・';
			endif;
		endif;
		
		if($pkod3_2 === "2"):
			$pkod3_txt .= '中国株';
			if($pkod3_3 === "3"):
				$pkod3_txt .=  '・';
			endif;
		endif;
		
		if($pkod3_3 === "3"):
			$pkod3_txt .= '韓国株';
		endif;
		
	else:
		$pkod3_txt = '指定なし';
	endif;

	//投資信託取扱本数 1:1000本以上、2:800本以上、3:500本以上
	$pkod4 = $_POST["kod4"];
	
	if(!empty($pkod4)):

		if($pkod4 === "0"):
			$pkod4_txt = '指定なし';
		endif;

		if($pkod4 === "1"):
			$pkod4_txt = '1000本以上';
		endif;
		
		if($pkod4 === "2"):
			$pkod4_txt = '800本以上';
		endif;
		
		if($pkod4 === "3"):
			$pkod4_txt = '500本以上';
		endif;
		
	else:
		$pkod4_txt = '指定なし';
	endif;

	//IPO取扱実績 1:40社以上、2:30社以上、3:20社以上
	$pkod5 = $_POST["kod5"];
	
	if(!empty($pkod5)):
	
		if($pkod5 === "0"):
			$pkod5_txt = '指定なし';
		endif;
	
		if($pkod5 === "1"):
			$pkod5_txt = '40社以上';
		endif;

		if($pkod5 === "2"):
			$pkod5_txt = '30社以上';
		endif;

		if($pkod5 === "3"):
			$pkod5_txt = '20社以上';
		endif;
		
	else: //empty($pkod5)
		$pkod5_txt = '指定なし';
	endif;

	
	//こだわり条件 1:初心者向き,2:手数料が安い
  //3:サポートが充実
  //4:NISA口座におすすめ
  //5:取引ツールが優秀
  //6:投資情報量が豊富
  //7:口座開設キャンペーンあり
	$pkod6 = $_POST["kod6"];
	$pkod6_1 = $_POST["kod6"][1];
	$pkod6_2 = $_POST["kod6"][2];
	$pkod6_3 = $_POST["kod6"][3];
	$pkod6_4 = $_POST["kod6"][4];
	$pkod6_5 = $_POST["kod6"][5];
	$pkod6_6 = $_POST["kod6"][6];
	$pkod6_7 = $_POST["kod6"][7];

	if(!empty($pkod6)):
		
		if($pkod6_1 === "1"):
			$pkod6_txt = '初心者向き';
			if($pkod6_2 === "2" || $pkod6_3 === "3" || $pkod6_4 === "4" || $pkod6_5 === "5" || $pkod6_6 === "6" || $pkod6_7 === "7"):
				$pkod6_txt .= '・';
			endif;
		endif;
		
		if($pkod6_2 === "2"):
			$pkod6_txt .= '手数料が安い';
			if($pkod6_3 === "3" || $pkod6_4 === "4" || $pkod6_5 === "5" || $pkod6_6 === "6" || $pkod6_7 === "7"):
				$pkod6_txt .= '・';
			endif;
		endif;
		
		if($pkod6_3 === "3"):
			$pkod6_txt .= 'サポートが充実';
			if($pkod6_4 === "4" || $pkod6_5 === "5" || $pkod6_6 === "6" || $pkod6_7 === "7"):
				$pkod6_txt .= '・';
			endif;
		endif;
		
		if($pkod6_4 === "4"):
			$pkod6_txt .= 'NISA口座におすすめ';
			if($pkod6_5 === "5" || $pkod6_6 === "6" || $pkod6_7 === "7"):
				$pkod6_txt .= '・';
			endif;
		endif;
		
	 if($pkod6_5 === "5"):
		$pkod6_txt .= '取引ツールが優秀';
			if($pkod6_6 === "6" || $pkod6_7 === "7"):
				$pkod6_txt .= '・';
			endif;
		endif;

 		if($pkod6_6 === "6"):
			$pkod6_txt .= '投資情報量が豊富';
			if($pkod6_7 === "7"):
				$pkod6_txt .= '・';
			endif;
		endif;
		
		if($pkod6_7 === "7"):
			$pkod6_txt .= '口座開設キャンペーンあり';
		endif;
		
	else:
		$pkod6_txt = '指定なし';
	endif;

  $ua=$_SERVER['HTTP_USER_AGENT'];
  $browser = ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false));
  ?>

<table class="jyoken">
  <tbody>
    <tr>
			<th>約定ごとの<span class="nosp"><br></span>最低手数料</th>
			<td><?php echo $pkod1_txt; ?></td>
		<?php if($browser == 'sp'){ echo '</tr><tr>';} ?>
			<th>投資商品</th>
			<td><?php echo $pkod2_txt; ?></td>
		<?php if($browser == 'sp'){ echo '</tr><tr>';} ?>
			<th>外国株</th>
			<td><?php echo $pkod3_txt; ?></td>
		<?php if($browser == 'pc'){ echo '</tr><tr>';} ?>
		<tr>
			<th>投資信託取扱本数</th>
			<td><?php echo $pkod4_txt; ?></td>
		<?php if($browser == 'sp'){ echo '</tr><tr>';} ?>
			<th>IPO取扱実績<span class="nosp"><br></span>(2018年)</th>
			<td><?php echo $pkod5_txt; ?></td>
		<?php if($browser == 'sp'){ echo '</tr><tr>';} ?>
			<th>こだわり条件</th>
			<td><?php echo $pkod6_txt; ?></td>
    </tr>
  </tbody>
</table>
