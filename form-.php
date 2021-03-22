<div id="search-bx">
  <div class="formtitle">条件に合った証券会社を簡単検索！</div>
	<form id="form" name="kform" action="./result.php" method="POST">
	
	<table class="buhin">
	  <tbody>
  	<tr>
  	  <th class="ftitle">約定ごとの最低手数料※税抜</th>
  	  <td>
  	    <label for="yaku0">
          <input type="radio" name="kod1" value="" id="yaku0" class="radio" checked="checked">
          <span class="radio-icon"></span>
          指定なし
        </label>
        <label for="yaku100">
          <input type="radio" name="kod1" value="1" id="yaku100" class="radio">
          <span class="radio-icon"></span>
          100円以下
        </label>
        <label for="yaku200">
          <input type="radio" name="kod1" value="2" id="yaku200" class="radio">
          <span class="radio-icon"></span>
          200円以下
        </label>
        <label for="yaku300">
          <input type="radio" name="kod1" value="3" id="yaku300" class="radio">
          <span class="radio-icon"></span>
          300円以下
        </label>
      </td>
    </tr>
	  <tr>
 		  <th class="ftitle">投資商品</th>
 		  <td>
 		    <label for="tou1">
          <input type="checkbox" name="kod2[1]" value="1" id="tou1" class="checkbox">
          <span class="checkbox-icon"></span>
          先物・オプション
        </label>
        <label for="tou2">
          <input type="checkbox" name="kod2[2]" value="2" id="tou2" class="checkbox">
          <span class="checkbox-icon"></span>
          ミニ株
        </label>
        <label for="tou3">
          <input type="checkbox" name="kod2[3]" value="3" id="tou3" class="checkbox">
          <span class="checkbox-icon"></span>
          投資信託
        </label>
        <label for="tou4">
          <input type="checkbox" name="kod2[4]" value="4" id="tou4" class="checkbox">
          <span class="checkbox-icon"></span>
          IPO
        </label>
        <label for="tou5">
          <input type="checkbox" name="kod2[5]" value="5" id="tou5" class="checkbox">
          <span class="checkbox-icon"></span>
          日経225ミニ
        </label>
        <label for="tou6">
          <input type="checkbox" name="kod2[6]" value="6" id="tou6" class="checkbox">
          <span class="checkbox-icon"></span>
          信用取引
        </label>
        <label for="tou7">
          <input type="checkbox" name="kod2[7]" value="7" id="tou7" class="checkbox">
          <span class="checkbox-icon"></span>
          夜間取引
        </label>
      </td>
    </tr>

	  <tr>
 		  <th class="ftitle">外国株</th>
 		  <td>
 		  <label for="gai1">
        <input type="checkbox" name="kod3[1]" value="1" id="gai1" class="checkbox">
        <span class="checkbox-icon"></span>
        米国株
      </label>
      <label for="gai2">
        <input type="checkbox" name="kod3[2]" value="2" id="gai2" class="checkbox">
        <span class="checkbox-icon"></span>
        中国株
      </label>
      <label for="gai3" class="checkbox">
        <input type="checkbox" name="kod3[3]" value="3" id="gai3" class="checkbox">
        <span class="checkbox-icon"></span>
        韓国株
      </label>
      </td>
    </tr>
		
	  <tr>
 		  <th class="ftitle">投資信託取扱本数</th>
 		  <td>
 		  <label for="hon1">
        <input type="radio" name="kod4" value="" id="hon1" class="radio" checked="checked">
        <span class="radio-icon"></span>
        指定なし
      </label>
      <label for="hon2">
        <input type="radio" name="kod4" value="1" id="hon2" class="radio">
        <span class="radio-icon"></span>
        1000本以上
      </label>
      <label for="hon3">
        <input type="radio" name="kod4" value="2" id="hon3" class="radio">
        <span class="radio-icon"></span>
        800本以上
      </label>
      <label for="hon4">
        <input type="radio" name="kod4" value="3" id="hon4" class="radio">
        <span class="radio-icon"></span>
        500本以上
      </label>
      </td>
    </tr>

	  <tr>
 		  <th class="ftitle">IPO取扱実績(2018年)</th>
 		  <td>
 		  <label for="ipo1">
        <input type="radio" name="kod5" value="" id="ipo1" class="radio" checked="checked">
        <span class="radio-icon"></span>
        指定なし
      </label>
      <label for="ipo2">
        <input type="radio" name="kod5" value="1" id="ipo2" class="radio">
        <span class="radio-icon"></span>
        40社以上
      </label>
      <label for="ipo3">
        <input type="radio" name="kod5" value="2" id="ipo3" class="radio">
        <span class="radio-icon"></span>
        30社以上
      </label>
      <label for="ipo4">
        <input type="radio" name="kod5" value="3" id="ipo4" class="radio">
        <span class="radio-icon"></span>
        20社以上
      </label>
      </td>
    </tr>

	  <tr>
 		  <th class="ftitle">こだわり条件</th>
 		  <td>
 		    <label for="jyo1">
  	      <input type="checkbox" name="kod6[1]" value="1" id="jyo1" class="checkbox">
          <span class="checkbox-icon"></span>
  	      初心者向き
	      </label>
	      <label for="jyo2">
	        <input type="checkbox" name="kod6[2]" value="2" id="jyo2" class="checkbox">
          <span class="checkbox-icon"></span>
	        手数料が安い
	      </label>
	      <label for="jyo3">
  	      <input type="checkbox" name="kod6[3]" value="3" id="jyo3" class="checkbox">
          <span class="checkbox-icon"></span>
  	      サポートが充実
	      </label>
	      <label for="jyo4">
  	      <input type="checkbox" name="kod6[4]" value="4" id="jyo4" class="checkbox">
          <span class="checkbox-icon"></span>
  	      NISA口座におすすめ
	      </label>
	      <label for="jyo5">
  	      <input type="checkbox" name="kod6[5]" value="5" id="jyo5" class="checkbox">
          <span class="checkbox-icon"></span>
  	      取引ツールが優秀
	      </label>
	      <label for="jyo6">
  	      <input type="checkbox" name="kod6[6]" value="6" id="jyo6" class="checkbox">
          <span class="checkbox-icon"></span>
  	      投資情報量が豊富
	      </label>
	      <label for="jyo7">
  	      <input type="checkbox" name="kod6[7]" value="7" id="jyo7" class="checkbox">
          <span class="checkbox-icon"></span>
  	      口座開設キャンペーンあり
	      </label>
      </td>
    </tr>

    </tbody>
  </table>


		<input type="submit" value="&#xf002; この条件で検索する" class="fas button">
	</form>
	
</div>
