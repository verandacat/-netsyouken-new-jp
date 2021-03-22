<div id="search-bx">
  <div class="formtitle">条件に合った証券会社を簡単検索！</div>
	<form id="form" name="kform" action="./result.php" method="POST">
	<style>
    .buhin tr:first-child td {
      padding: 0!important;
    }
    .buhin tr:first-child td .f-title {
      width: 100%;
      text-align: center;
      display:flex;
      justify-content: center;
      align-items: center;
      border-bottom: solid 1px #CCC;
      padding: 5px;
    }
    .buhin tr:first-child td select {
      margin: 5px;
      width: 70%;
      border: 2px solid #003233;
      border-radius: 5px;
    }
    #form .buhin td {
    padding: 10px;
    width: 33%;
    }
    .tables {
      display:flex;
      justify-content: space-around;
      align-items: center;
      flex-direction: column;
    }
    .f-title {
      font-weight: bold;
      background-color: #f4fbfb;
    }
    @media (max-width: 768px) {
      .buhin label {
      font-size: 12px!important;
    }
    .buhin tr:first-child td .f-title {
      font-size: 12px!important;
      min-height: 45px;
      display: block;
      padding: 2px;
    }
      .buhin tr:first-child td select {
        font-size: 12px;
    }
    #form .buhin td {
      padding: 5px 10px;
    }
    th {
      padding: 3px 5px!important;
    }
  }
  </style>
	<table class="buhin">
	  <tbody>
  	<tr>
  	  <td>
        <div class="table-1 tables">
          <h4 class="f-title">約定ごとの最低手数料※税抜</h4>
          <select name="kod1">
            <option id="yaku0" value="">指定なし</option>
            <option id="yaku100" value="1">100円以下</option>
            <option id="yaku200" value="2">200円以下</option>
            <option id="yaku300" value="3">300円以下</option>
          </select>
        </div>
      </td>
      <td>
        <div class="table-2 tables">
          <h4 class="f-title">投資信託取扱本数</h4>
          <select name="kod4">
            <option id="hon1" value="">指定なし</option>
            <option id="hon2" value="1">1000本以上</option>
            <option id="hon3" value="2">800本以上</option>
            <option id="hon4" value="3">500本以上</option>
          </select>
        </div>
        </td>
        <td>
        <div class="table-3 tables">
          <h4 class="f-title">IPO取扱実績(2018年)</h4>
          <select name="kod5">
          <option id="ipo1" value="">指定なし</option>
          <option id="ipo2" value="1">40社以上</option>
          <option id="ipo3" value="2">30社以上</option>
          <option id="ipo4" value="3">20社以上</option>
        </select>
        </div>
      </td>
    </tr>

    <tr>
      <th colspan="3" class="ftitle">投資商品</th>
    </tr>

	  <tr>
 		  <td colspan="3">
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
 		  <td colspan="2">
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
      <th colspan="3" class="ftitle">こだわり条件</th>
    </tr>

	  <tr>
 		  <td colspan="3">
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
