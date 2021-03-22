<?php 
global $imaurl;
$imaurl = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); 
?>
<h3 class="hikaku-title"><i class="fas fa-check"></i>おすすめ証券会社一括比較</h3>
    <div class="tab">
      
      <input name="tabs" type="radio" id="tab-1" checked="checked" class="input">
      <label for="tab-1" class="tab-label">総合<span class="nopc"><br></span>ランキング</label>
      <div class="tab-panel">
        <div class="scroll_div">
        <table class="r-table tablesorter" id="myTable">
          <thead>
            <tr>
              <td class="koteitd sorter-false nametd">証券会社</td>
              <td class="font95">総合評価</td>
              <td>手数料</td>
              <td>初心者</td>
              <td>ツール</td>
              <td>IPO</td>
              <td>NISA</td>
              <td class="font95">投資信託</td>
              <td class="sorter-false setumeitd">おすすめ<span class="nosp"><br></span>ポイント</td>
              <td class="sorter-false setumeitd2">口座開設<span class="nosp"><br></span>キャンペーン</td>
              <td class="sorter-false kotei">公式<span class="nosp"><br></span>サイト</td>
            </tr>
          </thead>
          <tbody>
          <?php
           include ('inc/company.php');
           $i=0;
          
           foreach($list as $v){
            $i++;
            include ('inc/syutoku_v.php');
            
$html = <<<EOD

     <tr>
      <td class="item-d1">
        <a href={$url} target=_blank class="prrrr"><img src={$img1}>{$name}</a>
      </td>
      <td class="deka"><span class="nosp">{$sougou_gazo}<br></span>{$sougou}点</td>
      <td><span class="hide">{$koda2}</span>{$koda2_txt}{$koda_txt}</td>
      <td><span class="hide">{$koda1}</span>{$koda1_txt}{$koda_txt}</td>
      <td><span class="hide">{$koda5}</span>{$koda5_txt}{$koda_txt}</td>
      <td><span class="hide">{$tousi4}</span>{$tousi4_txt}</td>
      <td><span class="hide">{$tousi8}</span>{$tousi8_txt}</td>
      <td><span class="hide">{$tousi3}</span>{$tousi3_txt}</td>
      <td class="setumei">{$point}</td>
      <td class="setumei">{$canp}</td>
      <td class="row2"><a href={$url} target=_blank class="kousiki_btn prrrr">公式<span class="nopc">サイト</span></a></td>
    </tr>
    
EOD;

			  if (strpos($imaurl, 'result') !== false) {
                include ('search.php');
              }else{
                echo $html;
              }
           	}?>
            </tbody>
          </table>
         </div>
      </div>


      
      <input name="tabs" type="radio" id="tab-2" class="input">
      <label for="tab-2" class="tab-label">手数料<span class="nopc"><br></span>比較表</label>
      <div class="tab-panel">
        <div class="scroll_div">
        <table class="r-table tablesorter" id="myTable2" >
          <thead>
            <tr>
              <td rowspan="2" class="koteitd sorter-false nametd">証券会社</td>
              <td colspan="7" class="sorter-false">手数料(取引ごと)※税抜</td>
              <td colspan="7" class="sorter-false">手数料(１日定額)※税抜</td>
              <td rowspan="2" class="kotei sorter-false">公式<span class="nosp"><br></span>サイト</td>
            </tr>
            <tr>
              <td>10万<span class="nosp"><br></span>まで</td>
              <td>20万<span class="nosp"><br></span>まで</td>
              <td>30万<span class="nosp"><br></span>まで</td>
              <td>50万<span class="nosp"><br></span>まで</td>
              <td>100万<span class="nosp"><br></span>まで</td>
              <td>300万<span class="nosp"><br></span>まで</td>
              <td>500万<span class="nosp"><br></span>まで</td>
              <td>10万<span class="nosp"><br></span>まで</td>
              <td>20万<span class="nosp"><br></span>まで</td>
              <td>30万<span class="nosp"><br></span>まで</td>
              <td>50万<span class="nosp"><br></span>まで</td>
              <td>100万<span class="nosp"><br></span>まで</td>
              <td>300万<span class="nosp"><br></span>まで</td>
              <td>500万<span class="nosp"><br></span>まで</td>
           </tr>
          </thead>
          <tbody>
          <?php
           include ('/inc/company.php');
           $i=0;
          
           foreach($list as $v){
            $i++;
            include ('/inc/syutoku_v.php');
            
            if($i == 7) {
              $td = "<td class='item-d' rowspan='2' style='padding: 20px 5px'>";
              $kome = "<tr><td colspan='15' style='text-align:left; position: relative;
              z-index: 0; padding:0 2px!important;'>※同一日に同一注文で複数の約定となった場合は、約定代金を合算し手数料を計算します。</td></tr>";
            }elseif($i > 7 || $i < 7) {
              $td = "<td class='item-d'>";
              unset($kome);
            }
$html = <<<EOD

     <tr>
      
      {$td}
        <a href={$url} target=_blank class="prrrr"><img src={$img1}>{$name}</a>
      </td>
      <td>{$t10_ki}<br>{$t10}円</td>
      <td>{$t20_ki}<br>{$t20}円</td>
      <td>{$t30_ki}<br>{$t30}円</td>
      <td>{$t50_ki}<br>{$t50}円</td>
      <td>{$t100_ki}<br>{$t100}円</td>
      <td>{$t300_ki}<br>{$t300}円</td>
      <td>{$t500_ki}<br>{$t500}円</td>
      
      <td>{$n10_ki}<br>{$n10}円</td>
      <td>{$n20_ki}<br>{$n20}円</td>
      <td>{$n30_ki}<br>{$n30}円</td>
      <td>{$n50_ki}<br>{$n50}円</td>
      <td>{$n100_ki}<br>{$n100}円</td>
      <td>{$n300_ki}<br>{$n300}円</td>
      <td>{$n500_ki}<br>{$n500}円</td>
      <td class="row2"><a href={$url} target=_blank class="kousiki_btn prrrr">公式<span class="nopc">サイト</span></a></td>
      {$kome}
    </tr>
  
EOD;
      
      
    		 if (strpos($imaurl, 'result') !== false) {
                include ('/search.php');
              }else{
                echo $html;
              }
           	}?>
            </tbody>
          </table>
        </div>
      </div>
      
      
      <input name="tabs" type="radio" id="tab-3" class="input">
      <label for="tab-3" class="tab-label">投資商品<span class="nopc"><br></span>比較表</label>
      <div class="tab-panel">
        <div class="scroll_div">
        <table class="r-table tablesorter" id="myTable3">
          <thead>
            <tr>
              <td class="koteitd sorter-false nametd">証券会社</td>
              <td>総合評価</td>
              <td class="font95 wide">先物・ｵﾌﾟｼｮﾝ</td>
              <td>ミニ株</td>
              <td>投資信託</td>
              <td>IPO</td>
              <td>NISA</td>
              <td class="font95 wide">日経225ミニ</td>
              <td>信用取引</td>
              <td>夜間取引</td>
              <td>米国株</td>
              <td>中国株</td>
              <td>韓国株</td>
              <td class="kotei sorter-false">公式<span class="nosp"><br></span>サイト</td>
            </tr>
          </thead>
          <tbody>
          <?php
           include ('/inc/company.php');
           $i=0;
          
           foreach($list as $v){
            $i++;
            include ('/inc/syutoku_v.php');
    
            
$html = <<<EOD

     <tr>
      <td class="item-d">
        <a href={$url} target=_blank class="prrrr"><img src={$img1}>{$name}</a>
      </td>
      <td class="deka">{$sougou_gazo}<br>{$sougou}点</td>
      <td><span class="hide">{$tousi1}</span>{$tousi1_txt}</td>
      <td><span class="hide">{$tousi2}</span>{$tousi2_txt}</td>
      <td><span class="hide">{$tousi3}</span>{$tousi3_txt}</td>
      <td><span class="hide">{$tousi4}</span>{$tousi4_txt}</td>
      <td><span class="hide">{$tousi5}</span>{$tousi5_txt}</td>
      <td><span class="hide">{$tousi6}</span>{$tousi6_txt}</td>
      <td><span class="hide">{$tousi7}</span>{$tousi7_txt}</td>
      <td><span class="hide">{$tousi8}</span>{$tousi8_txt}</td>
      <td><span class="hide">{$gaikoku1}</span>{$gaikoku1_txt}</td>
      <td><span class="hide">{$gaikoku2}</span>{$gaikoku2_txt}</td>
      <td><span class="hide">{$gaikoku3}</span>{$gaikoku3_txt}</td>
      <td class="row2"><a href={$url} target=_blank class="kousiki_btn prrrr">公式<span class="nopc">サイト</span></a></td>
    </tr>
    
EOD;
    
    		 if (strpos($imaurl, 'result') !== false) {
                include ('/search.php');
              }else{
                echo $html;
              }
           	}?>
        </tbody>
      </table>
      </div>
    </div>
    </div><!-- end.tab -->
