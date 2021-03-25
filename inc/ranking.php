<?php
$r_list = array(

   'sbi' => array(

        "name" => 'SBI証券',
        "pageUrl" => 'sbi',
        "url" => './link/sbi.php',
        "urlIpo" => './link/sbi-ipo.php',
        "urlNisa" => './link/sbi-nisa.php',
        "urlAme" => './link/sbi-ame.php',

        "image" => './img/sbi_fuji_250×250.png',
        "imageIpo" => './img/sbi_ipo_250x250.jpg',
        "imageNisa" => './img/sbi_nisa_250x250.gif',
        "imageAme" => './img/sbi_fuji_250×250_ame.jpg',

        "btnLogo" => './img/sbi-logo.png',
        "sougou" => 98,
        "sougou_img" => './img/review_5.gif',

        // ランキング順位
        "rankAll" => 1,
        "rankBeg" => 2,
        "rankFee" => 1,
        "rankIpo" => 1,
        "rankNisa" => 1,
        "rankInvest" => 1,
        "rankAme" => 1,
        "rankSp" => 2,
        "rankForeign" => 1,

        // ポイント
        "point1" => '550万口座突破の<span class="red">超人気ネット証券口座！</span>',
        "point2" => '<span class="red bg-y">業界最安水準の手数料</span>の安さ！',
        "point3" => '国内株式個人売買代金シェアNo.1！',
        
        "nisa_point1" => 'NISA<span class="red">口座開設数No.1</span>！',
        "nisa_point2" => 'NISA口座の<span class="bg-y red">国内株式売買手数料0円</span>！の安さ！',
        "nisa_point3" => '100円から積立がスタートできる！',
        "tsumi_point1" => '100円から<span class="red">積立がスタートできる</span>!',
        "tsumi_point2" => 'つみたてNISAの<span class="bg-y red">取扱銘柄163本</span>と豊富！',
        "tsumi_point3" => 'つみたてNISAの買付手数料0円！',
        "invest_point1" => '取扱投資信託数は<span class="red">全2,660本！！</span>',
        "invest_point2" => '買付手数料は<span class="red bg-y">すべて無料！</span>',
        "invest_point3" => 'Tポイントで投資信託が買える！',
        "ame_point1" => '米国株の手数料は<span class="red">業界屈指の格安コスト</span>！',
        "ame_point2" => '米国株に関する<span class="red bg-y">情報を豊富に提供</span>！',
        "osusume_point1" => '・株の初心者の人',
        "osusume_point2" => '・業界最安水準の手数料のネット証券を選びたい人',
       
        // コメント
        // Comment TOP
        "comment_top" => 'SBI証券は<span class="newRed">550万人以上</span>から選ばれている<span class="bold">口座開設数No.1の人気のネット証券</span>です。<span class="newRed">手数料が業界最安水準</span>なので、かなりお得に取引することが出来ます。また、IPOの公募株、投資信託、外国株の取扱数も豊富、トレーディングツール「HYPER
            SBI」も優秀なツールなので<span class="bg-y bold">初心者の方からプロの方までどなたでも満足できるネット証券</span>です。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '最初におすすめするのはSBI証券です。SBI証券を1番におすすめする理由は、「IPOチャレンジポイント」という独自の制度を採用しているためです。<br><br>
        「IPOチャレンジポイント」とは、SBI証券でIPO株の抽選に申し込んで落選した場合、自動的にポイントが得られるというものです。このポイントは抽選に外れるごとに溜まっていき、溜まれば溜まるほど抽選に当たる確率が上がっていきます。<br><br>
        IPO株が上場後に値上がりする確率が高いことは常識となっており、IPO株の抽選には毎回多数の投資家が申し込みを行います。SBI証券の「IPOチャレンジポイント」を利用すれば、次期や銘柄は分からないにしろやがては抽選に当たることができます。<br><br>
        また、SBI証券は口座開設費用が無料であることも見逃せません。<br><br>
        IPO株の当選率を上げるには、複数の証券会社に口座を保有し、それぞれから申し込みを行うことも良い方法ですが、SBI証券であれば口座開設費が無料のため、安心して口座を開設・維持することができます。',
        // Comment NISA
        "comment_nisa" => 'SBI証券は豊富な商品ラインナップや業界最低水準の手数料が魅力のネット証券会社です。<br><br>
        NISAで購入できるIPO(新規公開株)や投資信託などの取り扱い件数も業界No1水準です。<br><br>
        また、外国株の取り扱い市場も米国、香港など9カ国(2019年7月現在)と多いため、NISAでの外国株投資をお考えの方にもお勧めです。',
         // Comment TSUMITATE
         "comment_tsumi" => '
         SBI証券はNISA口座開設数No.1のつみたてNISA口座に1番おすすめのネット証券会社です。<br><br>
         つみたてNISAの投資信託取扱銘柄163本と幅広いラインナップに加え、100円から積立がスタートできますので、少額でコツコツ
         投資をしたい方にピッタリ。<br><br>
         積み立てタイミングは「毎日」「毎週」「毎月」の3つから自由に選べて、自動で積み立ててくれるので面倒な手間がかからないのも嬉しいポイントです。',
        // Comment 投資信託
        "comment_invest" => '最初におすすめするのがSBI証券です。SBI証券をおすすめする理由は、何といっても「信託報酬」が業界最安値水準である点です。
        <br><br>
        基本的に投資信託は、中長期間保有した方が無理なく資産を増やすことができます。そのため、投資信託を持っているだけで発生する「信託報酬」が高ければ高いほど、中長期保有のコストが高くなります。
        <br><br>
        SBI証券は「信託報酬」が業界最安値水準だからこそ、投資信託を中長期保有して、安定した資産形成を行うことができます。
        <br><br>
        また、SBI証券では、「信託報酬」だけではなく、「購入時手数料」が無料の投資信託を数多く取り揃えています。
        <br><br>
        SBI証券は、なるべくコストを抑えて資産形成を行いたい方にとって、最適の証券会社であると言えるでしょう。',
        // Comment 米国株
        "comment_ame" => '米国株投資に一番おすすめのネット証券はSBI証券です。<br>
        取引手数料は業界屈指の格安コスト。米国株式・ETFの定期買付サービスや、米国貸株サービスを提供しており、貸株サービスを提供しているのはSBI証券だけ！（※2019年10月17日時点、SBI証券調べ。）<br>
        豊富な米国株の投資情報を日本語で提供していますので、英語ができない方でも安心して情報収集が行えます。',
        
        // 表
        "tesuryou_1_1" => '90円',
        "tesuryou_1_2" => '250円',
        "tesuryou_1_3" => '250円',
        "tesuryou_1_4" => '487円',

        "tesuryou_2_1" => '0円',
        "tesuryou_2_2" => '0円',
        "tesuryou_2_3" => '0円',
        "tesuryou_2_4" => '0円',

        // 米国株表
        "ameTes_1_1" => '約定代金の0.45％（税込0.495％）',
        "ameTes_1_2" => '0ドル',
        "ameTes_1_3" => '20ドル（税込22ドル）',
        "ameTes_1_4" => '3,500以上',

        "ipo" => '<img src="./img/score_i_01.png">',
        "nisa" => '<img src="./img/score_i_01.png">',
        "shintaku" => '<img src="./img/score_i_01.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_02.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_01.png">',
        "syouhinsu" => '<img src="./img/score_i_01.png">',
        "smart" => '<img src="./img/score_i_01.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '口座開設完了でもれなく期間固定Tポイント100ptもらえる♪',
   ), 

   'matsui' => array(

        "name" => '松井証券',
        "pageUrl" => 'matsui',
        "url" => './link/matsui.php',
        "urlIpo" => '',
        "urlNisa" => './link/matsui-nisa.php',
        "urlAme" => '',

        "image" => './img/matsui200_200.gif',
        "imageIpo" => '',
        "imageNisa" => './img/matsui_nisa_200-200.gif',
        "imageAme" => '',

        "btnLogo" => './img/matsui-logo.png',
        "sougou" => 95,
        "sougou_img" => './img/review_45.gif',

        // ランキング順位
        "rankAll" => 2,
        "rankBeg" => 1,
        "rankFee" => 5,
        "rankIpo" => '',
        "rankNisa" => 3,
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        // ポイント
        "point1" => '1日の株式約定代金合計が<span class="red bg-y">50万円以下は手数料無料！</span>',
        "point2" => 'カスタマーサービスは<span class="red ">10年連続三つ星獲得！</span>',
        "point3" => '100円から積立できるロボアド「投信工房」！',
        "nisa_point1" => 'NISA口座の株式取引等の<span class="red bg-y">手数料0円！</span>',
        "nisa_point2" => '1日の株式約定代金合計が<span class="red">50万円以下は手数料無料！</span>',
        "nisa_point3" => 'カスタマーサービスは8年連続三つ星獲得！',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・投資デビューの初心者の人',
        "osusume_point2" => '・困った時に電話で丁寧なサポートが受けたい人',

        // コメント
        // Comment TOP
        "comment_top" => '松井証券は1日の約定代金の合計金額で手数料が決まる料金体系のみですが、現物取引、信用取引共に約定代金が50万円以下の場合手数料無料、 さらにヘルプデスク協会の問い合わせ窓口格付けで最高評価の三つ星を10年連続で獲得するなどお客様サポートが充実しているので、投資デビューに最適なネット証券です。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '松井証券は老舗の独立系のネット証券会社です。
        <br><br>
        NISAでの日本株株式売買手数料は無料となっている点が魅力的です。そのほか一般の口座でも1日の現物株式取引の約定代金50万円までは無料となっており、少額投資を中心に考えている方にもお勧めできます。
        <br><br>
        投資信託の取引もAI(人工知能)を使ったロボアドバイザーが資産の配分を提案してくれるといったように情報サービスも充実しています。',
        
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '-',
        "tesuryou_1_2" => '-',
        "tesuryou_1_3" => '-',
        "tesuryou_1_4" => '-',

        "tesuryou_2_1" => '0円',
        "tesuryou_2_2" => '0円',
        "tesuryou_2_3" => '0円',
        "tesuryou_2_4" => '1000円',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_02.png">',
        "nisa" => '<img src="./img/score_i_01.png">',
        "shintaku" => '<img src="./img/score_i_01.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_02.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '合計6,000円以上投資信託を積立すると、もれなく現金1,000円プレゼント！',
   ), 

   'rakuten' => array(
        "name" => '楽天証券',
        "pageUrl" => 'rakuten',
        "url" => './link/rakuten.php',
        "urlIpo" => '',
        "urlNisa" => './link/rakuten-nisa.php',
        "urlAme" => '',

        "image" => './img/rakuten200_200.png',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/rakuten-logo.png',
        "sougou" => 94,
        "sougou_img" => './img/review_45.gif',

        // ランキング順位
        "rankAll" => 3,
        "rankBeg" => 3,
        "rankFee" => 4,
        "rankIpo" => '',
        "rankNisa" => 2,
        "rankInvest" => 2,
        "rankAme" => 2,
        "rankSp" => '',
        "rankForeign" => 2,

        // ポイント
        "point1" => '手数料が<span class="red bg-y">業界最安クラス！</span>',
        "point2" => '取引ツール「マーケットスピード」が<span class="red">超優秀！</span>',
        "point3" => '',
        "nisa_point1" => '手数料が<span class="red bg-y">業界最安クラス！</span>',
        "nisa_point2" => '取引ツール「マーケットスピード」が<span class="red">超優秀！</span>',
        "nisa_point3" => '<span class="red">楽天ポイントを使って</span>投資ができる！',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '人気アプリ<span class="red bg-y">「iSPEED」で米国株式取引ができる</span>！',
        "ame_point2" => '米国株セミナーなど<span class="red">投資情報が充実！</span>！超優秀',

        "osusume_point1" => '・手数料が安いネット証券を選びたい人',
        "osusume_point2" => '・機能に優れた取引ツールを使いたい人',

        // コメント
        // Comment TOP
        "comment_top" => '楽天証券は508万口座突破のネット証券です。手数料の安さが人気ですが、業界屈指の高機能ツール「マーケットスピード」は圧倒的な情報量と優れた操作性で、 多くの人に支持されている秘訣の１つです。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '楽天証券は508万口座突破のネット証券です。<br><br>

        株式投資初心者でも分かりやすい管理画面と、業界最安値の手数料の安さが魅力。<br><br>
        
        楽天銀行とのブリッジ連携で、口座残高をそのまま証券口座の買付余力として利用できます。<br><br>
        
        さらに、楽天カードで積立NISAの支払いを設定すると、楽天ポイントが最大500P使えて、毎月の積立支払いにもポイントが貯まってお得です。',
        // Comment 投資信託
        "comment_invest" => '続いておすすめするのが楽天証券です。楽天証券をおすすめする理由は、実質的に全ての投資信託で「購入時手数料」が無料な点です。<br><br>

        実質と書いたのは、楽天証券では、投資信託の保有残高や「購入時手数料」に応じて楽天スーパーポイントが貯まる仕組みを導入しているためです。<br><br>
        
        楽天スーパーポイントは、楽天で買い物をする際に現金の代わりに使用できるため、手数料が実質的にキャッシュバックされていると言えるでしょう。<br><br>
        
        また、扱っている投資信託の本数も2647本と業界最高水準であるため、豊富な投資信託のラインナップから、自分にあった商品を選択することが可能です。',
        // Comment 米国株
        "comment_ame" => '国内株式の取引と同じ人気アプリ「iSPEED」で米国株の取引が行えます。<br>
        月間400万人が読む「トウシル」では米国株投資に役立つ情報をたくさん提供、米国株セミナーも無料で参加できますので、初心者の方でも安心です。<br>
        米国株の取引手数料も業界最低水準なので、楽天証券もおすすめのネット証券の一つです。',
        
        // 表
        "tesuryou_1_1" => '90円',
        "tesuryou_1_2" => '250円',
        "tesuryou_1_3" => '250円',
        "tesuryou_1_4" => '4870円',

        "tesuryou_2_1" => '0円',
        "tesuryou_2_2" => '0円',
        "tesuryou_2_3" => '0円',
        "tesuryou_2_4" => '0円',

        // 米国株表
        "ameTes_1_1" => '約定代金の0.45％（税込0.495％）',
        "ameTes_1_2" => '0ドル',
        "ameTes_1_3" => '20ドル（税込22ドル）',
        "ameTes_1_4" => '2,900以上',

        "ipo" => '<img src="./img/score_i_02.png">',
        "nisa" => '<img src="./img/score_i_01.png">',
        "shintaku" => '<img src="./img/score_i_01.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_01.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_01.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '新規デビューキャンペーン開催中！'
    ), 

    'dmm' => array(

        "name" => 'DMM.com証券',
        "pageUrl" => 'dmm',
        "url" => './link/dmm.php',
        "image" => './img/Adbnr_200_200.png',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/dmm-logo.png',
        "sougou" => 87,
        "sougou_img" => './img/review_4.gif',

        // ランキング順位
        "rankAll" => 4,
        "rankBeg" => '',
        "rankFee" => 3,
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => 3,
        "rankSp" => '',
        "rankForeign" => 5,

        // ポイント
        "point1" => '手数料が<span class="red bg-y">業界最安水準！</span>',
        "point2" => '取引手数料の<span class="red">1%がDMM株ポイントとして貯まる！</span>',
        "point3" => '最短即日取引可能！',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',

        "osusume_point1" => '・1約定ごとの手数料を業界最安水準に抑えたい人',
        "osusume_point2" => '・ポイントを貯めながらお得に取引したい人',

        // コメント
        // Comment TOP
        "comment_top" => '現物取引、信用取引の1約定ごとの手数料が大手人気ネット証券会社よりも安く、1回の取引手数料をとにかく安くしたい方におすすめです。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '80円',
        "tesuryou_1_2" => '180円',
        "tesuryou_1_3" => '180円',
        "tesuryou_1_4" => '340円',

        "tesuryou_2_1" => '-',
        "tesuryou_2_2" => '-',
        "tesuryou_2_3" => '-',
        "tesuryou_2_4" => '-',

        // 米国株表
        "ameTes_1_1" => '<span class="red">約定代金にかかわらず一律0ドル</span>',
        "ameTes_1_2" => '0ドル',
        "ameTes_1_3" => '0ドル',
        "ameTes_1_4" => '900以上',

        "ipo" => '<img src="./img/score_i_02.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_02.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_04.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '口座開設完了で1ヶ月間手数料無料＆抽選で2,000円キャッシュバック！',
    ), 

    // 'sbimobi' => array(

    //     "name" => 'SBIネオモバイル証券',
    //     "pageUrl" => 'sbimobi',

    //     "url" => './link/sbimobi.php',
    //     "image" => './img/250_250.png',
    //     "imageIpo" => '',
    //     "imageNisa" => '',
    //     "imageAme" => '',

    //     "btnLogo" => './img/sbimobi-logo.png',
    //     "sougou" => 85,
    //     "sougou_img" => './img/review_4.gif',

    //     // ランキング順位
    //     "rankAll" => 5,
    //     "rankBeg" => 4,
    //     "rankFee" => 5,
    //     "rankIpo" => 6,
    //     "rankNisa" => '',
    //     "rankInvest" => '',
    //     "rankAme" => '',
    //     "rankSp" => 2,
    //     "rankForeign" => '',

    //     // ポイント
    //     "point1" => '日本初！Tポイントを使って株が買える！',
    //     "point2" => '数百円で有名企業の株主になれるチャンス！',
    //     "point3" => '',
    //     "nisa_point1" => '',
    //     "nisa_point2" => '',
    //     "nisa_point3" => '',
    //     "invest_point1" => '',
    //     "invest_point2" => '',
    //     "invest_point3" => '',
    //     "ame_point1" => '',
    //     "ame_point2" => '',

    //     "osusume_point1" => '・株の初心者の人',
    //     "osusume_point2" => '・Tポイントで株を買いたい人',

    //     // コメント
    //     // Comment TOP
    //     "comment_top" => '',
    //     // Comment 初心者
    //     "comment_fee" => '1注文の現物取引手数料が50円～、信用取引はキャンペーン期間中0円と手数料の安さが魅力のネット証券です。',
    //     // Comment IPO
    //     "comment_ipo" => '',
    //     // Comment NISA
    //     "comment_nisa" => '',
    //     // Comment 投資信託
    //     "comment_invest" => '',
    //     // Comment 米国株
    //     "comment_ame" => '',
        
    //     // 表
    //     "tesuryou_1_1" => '200円',
    //     "tesuryou_1_2" => '200円',
    //     "tesuryou_1_3" => '200円',
    //     "tesuryou_1_4" => '1000円',

    //     "tesuryou_2_1" => '-',
    //     "tesuryou_2_2" => '-',
    //     "tesuryou_2_3" => '-',
    //     "tesuryou_2_4" => '-',

    //     // 米国株表
    //     "ameTes_1_1" => '',
    //     "ameTes_1_2" => '',
    //     "ameTes_1_3" => '',
    //     "ameTes_1_4" => '',

    //     "ipo" => '<img src="./img/score_i_02.png">',
    //     "nisa" => '<img src="./img/score_i_04.png">',
    //     "shintaku" => '<img src="./img/score_i_04.png">',
    //     "ryou" => '<img src="./img/score_i_04.png">',
    //     "torihiki" => '<img src="./img/score_i_04.png">',
    //     "tangen" => '<img src="./img/score_i_02.png">',

    //     "yakkan" => '<img src="./img/score_i_04.png">',
    //     "gaikoku" => '<img src="./img/score_i_04.png">',
    //     "tool" => '<img src="./img/score_i_02.png">',
    //     "syouhinsu" => '<img src="./img/score_i_02.png">',
    //     "smart" => '<img src="./img/score_i_01.png">',
    //     "price" => '<img src="./img/score_i_02.png">',

    //     "campaign" => '',
    // ), 

    'livestar' => array(

        "name" => 'SBIネオトレード証券',
        "pageUrl" => 'livestar',
        "url" => './link/livestar.php',
        "image" => './img/sbineo_200_200.png',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/sbineo-logo.jpg',
        "sougou" => 81,
        "sougou_img" => './img/review_4.gif',

        // ランキング順位
        "rankAll" => 6,
        "rankBeg" => '',
        "rankFee" => 2,
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        // ポイント
        "point1" => '手数料が<span class="red bg-y">業界最安水準！</span>',
        "point2" => '今なら取引手数料<span class="red">約2ヶ月間0円キャンペーン実施中！</span>',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・1注文の手数料を業界最安水準で取引したい人',
        "osusume_point2" => '・71年続く老舗のネット証券で安心して取引したい人',

        // コメント
        // Comment TOP
        "comment_top" => '1注文の現物取引手数料が50円～、信用取引はキャンペーン期間中0円と手数料の安さが魅力のネット証券です。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '80円',
        "tesuryou_1_2" => '180円',
        "tesuryou_1_3" => '180円',
        "tesuryou_1_4" => '340円',

        "tesuryou_2_1" => '400円',
        "tesuryou_2_2" => '400円',
        "tesuryou_2_3" => '400円',
        "tesuryou_2_4" => '600円',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_04.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_04.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_04.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_04.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '約2ヶ月間取引手数料0円！',
    ), 

    'line' => array(

        "name" => 'LINE証券',
        "pageUrl" => 'line',
        "url" => './link/line.php',
        "image" => './img/line__seihoukei.gif',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/line-logo.png',
        "sougou" => 85,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => 5,
        "rankBeg" => 4,
        "rankFee" => '',
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => 1,
        "rankForeign" => '',

        "point1" => 'LINEアプリから<span class="red bg-y">スマホで株取引できる</span>！',
        "point2" => '<span class="red">1株単位、数百円から</span>でも取引可能！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・株取引を少額投資で行いたい方',
        "osusume_point2" => '・LINEユーザーでスマホで株取引したい方',

        // コメント
        // Comment TOP
        "comment_top" => 'LINE証券は20代投資家が選ぶ「スマホ利用で使いやすい」ネット証券No.1に選ばれています。 業界最安水準の手数料で買い注文はなんと手数料0円！ LINEポイントを使って投資ができるのでLINEユーザーにはおトクで便利です。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '160円',
        "tesuryou_1_2" => '440円',
        "tesuryou_1_3" => '440円',
        "tesuryou_1_4" => '790円',

        "tesuryou_2_1" => '-',
        "tesuryou_2_2" => '-',
        "tesuryou_2_3" => '-',
        "tesuryou_2_4" => '-',

        "tsyu" => '<small>※同一日に同一注文で複数の約定となった場合は、約定代金を合算し手数料を計算します。</small>',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_04.png">',
        "nisa" => '<img src="./img/score_i_04.png">',
        "shintaku" => '<img src="./img/score_i_02.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_02.png">',
        "gaikoku" => '<img src="./img/score_i_04.png">',
        "tool" => '<img src="./img/score_i_01.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_01.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '今なら口座開設で最高3株分の購入代金がもらえちゃう！',
    ), 

    'smbc' => array(

        "name" => 'SMBC日興証券',
        "pageUrl" => 'smbc',

        "url" => './link/smbc.php',
        "image" => './img/200x200.jpg',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/smbc-logo.png',
        "sougou" => 77,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => 2,
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => 4,

        "point1" => '<span class="red">IPOの取扱銘柄数</span>業界トップクラス！',
        "point2" => '<span class="red bg-y">長い歴史を元にAIを活用</span>した情報サービス！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '',
        "osusume_point2" => '',

        // コメント
        // Comment TOP
        "comment_top" => '続いて紹介するのがSMBC日興証券です。SMBC日興証券の特徴は、証券会社の中でSBI証券の86銘柄に次ぐ71銘柄のIPO株を取り扱っている実績（2018年）があることです。
        <br><br>
        前述したとおり、希望するIPO株を購入するためには、まずそのIPO株を取り扱っている証券会社を選択する必要があります。
        この点、多数のIPO株取り扱いの実績があるSMBC日興証券であれば、今後、新たなIPO株が公開された際にも取り扱い証券会社となっている可能性が高いと言えます。
        <br><br>
        また、SMBC日興証券は、取り扱うIPO株の10％分が完全平等抽選となっており、資金力のない投資家でもIPO株を購入できる余地が十分にあります。
        <br><br>
        このように、IPO取り扱い数と完全平等抽選の余地がある点が、SMBC日興証券の大きな魅力であると言えるでしょう。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '125円',
        "tesuryou_1_2" => '250円',
        "tesuryou_1_3" => '400円',
        "tesuryou_1_4" => '800円',

        "tesuryou_2_1" => '-',
        "tesuryou_2_2" => '-',
        "tesuryou_2_3" => '-',
        "tesuryou_2_4" => '-',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_01.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_02.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '今なら口座開設で最高3株分の購入代金がもらえちゃう！',
    ), 

    'monex' => array(

        "name" => 'マネックス證券',
        "pageUrl" => 'monex',

        "url" => './link/monex.php',
        "image" => './img/monex_200x200.png',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/monex-logo.png',
        "sougou" => 75,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => 3,
        "rankNisa" => 4,
        "rankInvest" => '',
        "rankAme" => 4,
        "rankSp" => '',
        "rankForeign" => 3,

        "point1" => 'プロトレーダー級の<span class="red bg-y">高機能アプリ・ツール</span>を提供！
        ',
        "point2" => '<span class="red">充実のオンラインセミナー</span>が投資に役立つと好評！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '米国株取扱銘柄数は主要ネット証券<span class="red bg-y">No.1</span>！',
        "ame_point2" => 'ネット証券唯一の<span class="red">米国株専用スマホアプリ有り！</span>',
        "osusume_point1" => '・投資情報にこだわりたい人',
        "osusume_point2" => '・自分に合った投資商品を見つけたい人',

        // コメント
        // Comment TOP
        "comment_top" => '年間約200本のオンラインセミナーで投資が学べたり、役立つ情報を手に入れることが出来ます。取扱商品数も豊富なので自分に合った投資商品もきっと見つかることでしょう。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '3番目に紹介するのはマネックス証券です。マネックス証券で見逃せない点は、取り扱うIPO株の全てが完全平等抽選であるという点です。
        <br><br>
        IPO株の100％を完全平等抽選としている証券会社は数が限られるため、マネックス証券の存在は投資家にとって非常にありがたいものであると言えるでしょう。
        <br><br>
        また、取り扱うIPO株の銘柄数が豊富なことも特徴の一つです。
        <br><br>
        取り扱い銘柄数は、SMBC日興証券に次ぐ50銘柄で、これほどの取り扱い銘柄数を誇り、かつその100%が完全平等抽選なのはマネックス証券以外には存在しません。',
        // Comment NISA
        "comment_nisa" => 'マネックス証券はネット証券会社の大手です。外国株取引にも注力しており、NISA口座での外国株の買い付け手数料が無料となります。
        <br><br>
        また、米国株・中国株を中心に取り扱い銘柄数も多いため、NISAでの米国株や中国株投資を考えている方には、おすすめの証券会社です。',
        // Comment 投資信託
        "comment_invest" => '3番目に紹介するのはマネックス証券です。マネックス証券で見逃せない点は、取り扱うIPO株の全てが完全平等抽選であるという点です。
        <br><br>
        IPO株の100％を完全平等抽選としている証券会社は数が限られるため、マネックス証券の存在は投資家にとって非常にありがたいものであると言えるでしょう。
        <br><br>
        また、取り扱うIPO株の銘柄数が豊富なことも特徴の一つです。
        <br><br>
        取り扱い銘柄数は、SMBC日興証券に次ぐ50銘柄で、これほどの取り扱い銘柄数を誇り、かつその100%が完全平等抽選なのはマネックス証券以外には存在しません。',
        // Comment 米国株
        "comment_ame" => 'グループ会社に米国のネット証券であるトレードステーション証券を持つ強みがあるのがマネックス証券です。<br><br>

        米国株取扱銘柄3,674（2020年7月9日時点）は主要ネット証券No.1でGAFAMをはじめとした数多くの 米国株を投資対象とすることができます。<br><br>
        
        また、唯一米国株取引専用スマホアプリを提供しているので、スマホでの相場状況のチェック＆取引も大変便利。',
        
        // 表
        "tesuryou_1_1" => '100円',
        "tesuryou_1_2" => '250円',
        "tesuryou_1_3" => '450円',
        "tesuryou_1_4" => '1000円',

        "tesuryou_2_1" => '500円',
        "tesuryou_2_2" => '500円',
        "tesuryou_2_3" => '500円',
        "tesuryou_2_4" => '500円',

        // 米国株表
        "ameTes_1_1" => '約定代金の0.45％（税込0.495％）',
        "ameTes_1_2" => '0ドル',
        "ameTes_1_3" => '20ドル（税込22ドル）',
        "ameTes_1_4" => '3,600以上',

        "ipo" => '<img src="./img/score_i_01.png">',
        "nisa" => '<img src="./img/score_i_01.png">',
        "shintaku" => '<img src="./img/score_i_01.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '',
    ), 

    'oka' => array(

        "name" => '岡三オンライン証券',
        "pageUrl" => 'oka',

        "url" => './link/okasan.php',
        "image" => './img/okasan200_200.jpg',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/okasan-logo.png',
        "sougou" => 78,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => 4,
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        "point1" => '取引ツールは優れた操作性で<span class="red">シンプルで使いやすい！</span>',
        "point2" => '<span class="bg-y">収益のきっかけになる</span>有益な投資情報が充実！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '',
        "osusume_point2" => '',

        // コメント
        // Comment TOP
        "comment_top" => '',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '続いて紹介するのは、岡三オンライン証券です。岡三オンライン証券の特徴は、マネックス証券と同様に取り扱うIPO株の100%が完全平等抽選である点です。
        <br><br>
        取り扱い銘柄数は47社と、マネックス証券にやや劣りますが、それでも他の証券会社と比較すると抜群に多い銘柄数を誇っています。
        <br><br>
        また、岡三オンライン証券をおすすめする大きな理由は、口座開設者数にあります。
        <br><br>
        当然ながら、一つの証券会社で開設されている口座数が少ないほど、その証券会社からIPO株に申し込む投資家が少ないことを意味するため、その分当選確率が上昇します。
        <br><br>
        先ほどのSBI証券の口座開設数は444万、SMBC日興証券は337万、マネックス証券は179万ですが、これに対して岡三オンライン証券は19万です。
        <br><br>
        そのため、銘柄によってはマネックス証券などよりも当選確率が高い可能性があると言えます。このように完全平等抽選を採用し、かつ口座開設数も少ないことが岡三オンライン証券の大きな魅力です。',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '99円',
        "tesuryou_1_2" => '350円',
        "tesuryou_1_3" => '350円',
        "tesuryou_1_4" => '600円',

        "tesuryou_2_1" => '0円',
        "tesuryou_2_2" => '350円',
        "tesuryou_2_3" => '500円',
        "tesuryou_2_4" => '800円',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_01.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_02.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '取引手数料を口座開設日の翌々月末まで全額キャッシュバック！',
    ), 
    
    'kabucom' => array(

        "name" => 'auカブコム証券',
        "pageUrl" => 'kabucom',
        "url" => './link/kabudotcom.php',
        "image" => './img/kabucom200x200.jpg',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/kabucom-logo.png',
        "sougou" => 76,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => 5,
        "rankNisa" => 5,
        "rankInvest" => 3,
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        "point1" => '<span class="red bg-y">MUFG</span>の信頼できるネット証券会社！',
        "point2" => 'プチ株で<span class="red">１株から売買できる</span>！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・メガバンクグループで安心して取引したい人',
        "osusume_point2" => '・1株から売買できるプチ株を利用したい人',

        // コメント
        // Comment TOP
        "comment_top" => '三菱UFJフィナンシャル・グループのauカブコム証券は大手の安心感と豊富な投資情報コンテンツが魅力。 IPOはシステム抽選なので全てのお客様に公平なチャンスがあるのが嬉しいです。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '最後におすすめするのは、auカブコム証券です。auカブコム証券の特徴は、まず取り扱うIPO株のほぼ100%が完全平等抽選であることが挙げられます。
        <br><br>
        「ほぼ」と記載しているのは、数％はその他の方法が採用されているためですが、それでもほぼ全てが完全平等抽選なのは大きな魅力です。
        <br><br>
        また、auカブコム証券は株式売買手数料が安いことが特徴です。例えば、インターネット上で取引を行う場合、10万円までの売買であれば手数料が90円しかかかりません。
        <br><br>
        そのほか、取り扱うIPO銘柄数も業界では多いほうで、この10年間で平均して20銘柄ほどを安定して取り扱っています。
        <br><br>
        実際、今年に入ってからも、「あさくま」、「ヤシマキザイ」、「Sansan」といったIPO株を取り扱っています。安定して取引が見込める点が、auカブコム証券の魅力だと言えるでしょう。',
        // Comment NISA
        "comment_nisa" => 'auカブコム証券は三菱UFJフィナンシャルグループのネット証券です。
        <br><br>
        NISA口座での日本株買い付け手数料は無料となるほか、つみたてNISA口座を保有していると現物株の取引手数料が最大5%割引になるサービスも提供しています。
        <br><br>
        また、つみたてNISAで選択可能なインデックス投信の取り扱いも多いことが魅力といえます。',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '90円',
        "tesuryou_1_2" => '250円',
        "tesuryou_1_3" => '250円',
        "tesuryou_1_4" => '990円',

        "tesuryou_2_1" => '-',
        "tesuryou_2_2" => '-',
        "tesuryou_2_3" => '-',
        "tesuryou_2_4" => '-',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_02.png">',
        "nisa" => '<img src="./img/score_i_01.png">',
        "shintaku" => '<img src="./img/score_i_01.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_04.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '',
    ), 

    'gmo' => array(

        "name" => 'GMOクリック証券',
        "pageUrl" => 'gmo',
        "url" => './link/gmo.php',
        "image" => './img/gmo200_200.gif',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/gmo-logo.png',
        "sougou" => 75,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        "point1" => '<span class="red bg-y">業界最安値水準</span>の取引手数料が魅力！',
        "point2" => '高機能取引ツールは<span class="red">使いやすい</span>とユーザーに高評価！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・業界最安値水準の手数料で取引したい人',
        "osusume_point2" => '・取引ツール、分析ツール、投資情報などにこだわる人',

        // コメント
        // Comment TOP
        "comment_top" => '大手ネット証券と遜色のない業界最安値水準の取引コストが魅力の１つです。条件を満たすと適用されるVIPプランも有り。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '95円',
        "tesuryou_1_2" => '260円',
        "tesuryou_1_3" => '260円',
        "tesuryou_1_4" => '470円',

        "tesuryou_2_1" => '230円',
        "tesuryou_2_2" => '300円',
        "tesuryou_2_3" => '230円',
        "tesuryou_2_4" => '230円',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_02.png">',
        "nisa" => '<img src="./img/score_i_01.png">',
        "shintaku" => '<img src="./img/score_i_01.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_04.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '',
    ), 

    'musashi' => array(

        "name" => 'むさし証券',
        "pageUrl" => 'musashi',
        "url" => './link/musashi.php',
        "image" => './img/musashi200.jpg',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/musashi-logo.png',
        "sougou" => 74,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        "point1" => '現物取引手数料は<span class="red bg-y">1注文あたり75円～と驚きの安さ！</span>',
        "point2" => '無料の情報ツールTNAVIは<span class="red">多彩なチャート機能で優秀</span>',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '',
        "osusume_point2" => '',

        // コメント
        // Comment TOP
        "comment_top" => '業界トップクラスの現物取引手数料と信用金利1.35％でコストを削減したい方に選ばれているネット証券口座です。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '75円',
        "tesuryou_1_2" => '175円',
        "tesuryou_1_3" => '175円',
        "tesuryou_1_4" => '320円',

        "tesuryou_2_1" => '1200円',
        "tesuryou_2_2" => '1200円',
        "tesuryou_2_3" => '1200円',
        "tesuryou_2_4" => '1200円',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_02.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_04.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_04.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_04.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '',
    ), 

    'iwai' => array(

        "name" => '岩井コスモ証券',
        "pageUrl" => 'iwai',
        "url" => './link/iwaicosmo.php',
        "image" => '',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/iwai-logo.png',
        "sougou" => 73,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        "point1" => '<span class="red bg-y">1ヵ月定額制株式手数料</span>なら1取引あたり216円！',
        "point2" => '1日定額制株式手数料は<span class="red">業界最安水準！</span>',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・1ヵ月あたりの取引回数が多い人',
        "osusume_point2" => '・IPO投資をする人',

        // コメント
        // Comment TOP
        "comment_top" => '1ヵ月定額制株式手数料なら、どんなに高額な取引でも1取引あたり216円とコストが抑えやすいのがメリットです。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '1000円',
        "tesuryou_1_2" => '1000円',
        "tesuryou_1_3" => '1000円',
        "tesuryou_1_4" => '1000円',

        "tesuryou_2_1" => '80円',
        "tesuryou_2_2" => '240円',
        "tesuryou_2_3" => '400円',
        "tesuryou_2_4" => '800円',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_01.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_04.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_04.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '',
    ), 

    'tachibana' => array(

        "name" => '立花証券',
        "pageUrl" => 'tachibana',
        "url" => './link/tachibana.php',
        "image" => './img/tachibanab_200_200.jpg',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/tachibana-logo.png',
        "sougou" => 71,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        "point1" => '<span class="red bg-y">1ヵ月定額制株式手数料</span>なら1取引あたり216円！',
        "point2" => '<span class="red">創刊60年以上</span>の独自レポート「立花月報」が好評！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・株式取引手数料を安く抑えたい人',
        "osusume_point2" => '・立花証券独自の質の高い投資情報を得たい人',

        // コメント
        // Comment TOP
        "comment_top" => '現物取引手数料が業界最安水準と安く、さらに今なら最大半年0円の新規証券口座開設キャンペーン実施中でお得！',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '100円',
        "tesuryou_1_2" => '225円',
        "tesuryou_1_3" => '325円',
        "tesuryou_1_4" => '575円',

        "tesuryou_2_1" => '200円',
        "tesuryou_2_2" => '300円',
        "tesuryou_2_3" => '500円',
        "tesuryou_2_4" => '900円',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_04.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_04.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_02.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_04.png">',
        "tool" => '<img src="./img/score_i_02.png">',
        "syouhinsu" => '<img src="./img/score_i_04.png">',
        "smart" => '<img src="./img/score_i_02.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '',
    ), 

    'nomura' => array(

        "name" => '野村證券',
        "pageUrl" => 'nomura',
        "url" => './link/nomura.php',
        "image" => './img/nomura_300x250.jpg',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/nomura-logo.png',
        "sougou" => 68,
        "sougou_img" => './img/review_3.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => '',
        "rankFee" => '',
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => '',
        "rankForeign" => '',

        "point1" => '<span class="red">IPOの取扱数は</span>は業界トップクラス！',
        "point2" => '総合証券ならではの<span class="bg-y">取扱商品数の豊富さが魅力！</span>',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・IPO投資を考えている人',
        "osusume_point2" => '・豊富な商品数の中から投資商品を選びたい人',

        // コメント
        // Comment TOP
        "comment_top" => '総合証券として取扱商品数が豊富で、IPO取扱数も国内トップクラスなので、野村證券ならば、ニーズに合った投資商品がきっと見つかります。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "tesuryou_1_1" => '139円',
        "tesuryou_1_2" => '300円',
        "tesuryou_1_3" => '477円',
        "tesuryou_1_4" => '953円',

        "tesuryou_2_1" => '-',
        "tesuryou_2_2" => '-',
        "tesuryou_2_3" => '-',
        "tesuryou_2_4" => '-',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '<img src="./img/score_i_01.png">',
        "nisa" => '<img src="./img/score_i_02.png">',
        "shintaku" => '<img src="./img/score_i_02.png">',
        "ryou" => '<img src="./img/score_i_02.png">',
        "torihiki" => '<img src="./img/score_i_02.png">',
        "tangen" => '<img src="./img/score_i_04.png">',

        "yakkan" => '<img src="./img/score_i_04.png">',
        "gaikoku" => '<img src="./img/score_i_02.png">',
        "tool" => '<img src="./img/score_i_04.png">',
        "syouhinsu" => '<img src="./img/score_i_02.png">',
        "smart" => '<img src="./img/score_i_04.png">',
        "price" => '<img src="./img/score_i_02.png">',

        "campaign" => '',
    ), 

    'paypay' => array(

        "name" => 'PayPay証券',
        "url" => './link/one.php',
        "image" => './img/pay-main.png',
        "imageIpo" => '',
        "imageNisa" => '',
        "imageAme" => '',

        "btnLogo" => './img/paypay-logo.jpg',
        "sougou" => 76,
        "sougou_img" => './img/review_35.gif',

        // ランキング順位
        "rankAll" => '',
        "rankBeg" => 5,
        "rankFee" => '',
        "rankIpo" => '',
        "rankNisa" => '',
        "rankInvest" => '',
        "rankAme" => '',
        "rankSp" => 3,
        "rankForeign" => '',

        "point1" => 'わずか3タップで手軽に株の売買ができる！',
        "point2" => '1,000円でカンタンに大企業の株主に！',
        "point3" => '',
        "nisa_point1" => '',
        "nisa_point2" => '',
        "nisa_point3" => '',
        "invest_point1" => '',
        "invest_point2" => '',
        "invest_point3" => '',
        "ame_point1" => '',
        "ame_point2" => '',
        "osusume_point1" => '・業界最安値水準の手数料で取引したい人',
        "osusume_point2" => '・取引ツール、分析ツール、投資情報などにこだわる人',

        // コメント
        // Comment TOP
        "comment_top" => '日本初のスマホ証券サービスで、スマホユーザーのために生まれた証券会社がPayPay証券です。<br>
        1,000円から小額で日米企業の株が購入できて、銘柄選択から購入までわずか3タップで 取引きが完了しますので、カンタンに誰でも気軽に株式投資がはじめられます。<br>
        利用者の約7割が未経験者なので初心者でも安心、スマホアプリ累計170万DLと人気のスマホ証券です。',
        // Comment 初心者
        "comment_fee" => '',
        // Comment IPO
        "comment_ipo" => '',
        // Comment NISA
        "comment_nisa" => '',
        // Comment 投資信託
        "comment_invest" => '',
        // Comment 米国株
        "comment_ame" => '',
        
        // 表
        "pay_tesuryou_1_1" => '基準価格の0.5～1%',
        "pay_tesuryou_1_2" => '基準価格の0.5～0.7%',

        // 米国株表
        "ameTes_1_1" => '',
        "ameTes_1_2" => '',
        "ameTes_1_3" => '',
        "ameTes_1_4" => '',

        "ipo" => '',
        "nisa" => '',
        "shintaku" => '',
        "ryou" => '',
        "torihiki" => '',
        "tangen" => '',

        "yakkan" => '',
        "gaikoku" => '',
        "tool" => '',
        "syouhinsu" => '',
        "smart" => '',
        "price" => '',

        "campaign" => '',
    ), 
);




?>



