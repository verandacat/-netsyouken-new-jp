<?php 
global $imaurl;
$imaurl = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>
<?php
  if (($yakutei === "1" || $yakutei === "2" || $yakutei === "3") && ($pkod1 === "3")):
    $yakutei = "3";
  elseif (($yakutei === "1" || $yakutei === "2") && ($pkod1 === "2")):
    $yakutei = "2";
  endif;

  if (($honsu === "1" || $honsu === "2" || $honsu === "3") && ($pkod4 === "3")):
  	$honsu = "3";
  elseif (($honsu === "1" || $honsu === "2") && ($pkod4 === "2")):
  	$honsu = "2";
  endif; //$honsu

  if (($ipoji === "1" || $ipoji === "2" || $ipoji === "3") && ($pkod5 === "3")):
  	$ipoji = "3";
  elseif (($ipoji === "1" || $ipoji === "2") && ($pkod5 === "2")):
  	$ipoji = "2";
  endif; //$ipoji
  
  $ktousi1_dis = $ktousi1 === $pkod2_1 && $pkod2_1 === "1";
  $ktousi2_dis = $ktousi2 === $pkod2_2 && $pkod2_2 === "2";
  $ktousi3_dis = $ktousi3 === $pkod2_3 && $pkod2_3 === "3";
  $ktousi4_dis = $ktousi4 === $pkod2_4 && $pkod2_4 === "4";
  $ktousi5_dis = $ktousi5 === $pkod2_5 && $pkod2_5 === "5";
  $ktousi6_dis = $ktousi6 === $pkod2_6 && $pkod2_6 === "6";
  $ktousi7_dis = $ktousi7 === $pkod2_7 && $pkod2_7 === "7";

  $kgaikoku1_dis = $kgaikoku1 === $pkod3_1 && $pkod3_1 === "1";
  $kgaikoku2_dis = $kgaikoku2 === $pkod3_2 && $pkod3_2 === "2";
  $kgaikoku3_dis = $kgaikoku3 === $pkod3_3 && $pkod3_3 === "3";

  $kkoda1_dis = $kkoda1 === $pkod6_1 && $pkod6_1 === "1";
  $kkoda2_dis = $kkoda2 === $pkod6_2 && $pkod6_2 === "2";
  $kkoda3_dis = $kkoda3 === $pkod6_3 && $pkod6_3 === "3";
  $kkoda4_dis = $kkoda4 === $pkod6_4 && $pkod6_4 === "4";
  $kkoda5_dis = $kkoda5 === $pkod6_5 && $pkod6_5 === "5";
  $kkoda6_dis = $kkoda6 === $pkod6_6 && $pkod6_6 === "6";
  $kkoda7_dis = $kkoda7 === $pkod6_7 && $pkod6_7 === "7";

if(!empty($pkod1)): //1-1$pkod1
  if(($yakutei === $pkod1)):

  if(!empty($pkod2)): //1-2$pkod2
    if($ktousi1_dis || $ktousi2_dis || $ktousi3_dis || $ktousi4_dis || $ktousi5_dis ||$ktousi6_dis || $ktousi7_dis):

    if(!empty($pkod3)): //1-3$pkod3
      if ($kgaikoku1_dis || $kgaikoku2_dis || $kgaikoku3_dis):

      if(!empty($pkod4)): //1-4$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //1-5$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //1-6$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //1-6$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //1-6$pkod6



          endif; //$ipoji
        else: //1-5$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //2-5$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //2-5$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //2-5$pkod6

        endif; //1-5$pkod5



        endif; //$honsu
      else: //1-4$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //2-4$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //2-5$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //2-5$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //2-5$pkod6



          endif; //$ipoji
        else: //2-4$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6
        endif; //2-4$pkod5

      endif; //1-4$pkod4



      endif; //$kgaikoku
    else: //1-3$pkod3
      $kgaikoku1 = "1";
      $pkod3_1 = "1";
      if(!empty($pkod4)): //2-3$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //2-4$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //2-5$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //2-5$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //2-5$pkod6



          endif; //$ipoji
        else: //2-4$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6
        endif; //2-4$pkod5



        endif; //$honsu
      else: //2-3$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //3-3$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6

          endif; //$ipoji
        else: //3-3$pkod5
          $ipoji = "0";
          $pkod5 = "0";
           if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6
       endif; //3-3$pkod5

      endif; //2-3$pkod4
      
    endif; //1-3$pkod3



    endif; //$ktousi
  else: //1-2$pkod2
    $ktousi0 = "0";
    $pkod2_1 = "1";
    if(!empty($pkod3)): //2-2$pkod3
      if ($kgaikoku1_dis || $kgaikoku2_dis || $kgaikoku3_dis):

      if(!empty($pkod4)): //2-3$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //2-4$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //2-5$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //2-5$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //2-5$pkod6

          endif; //$ipoji
        else: //2-4$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6
        endif; //2-4$pkod5



        endif; //$honsu
      else: //2-3$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //3-3$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6

          endif; //$ipoji
        else: //3-3$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6
        endif; //3-3$pkod5

      endif; //2-3$pkod4


      endif; //$kgaikoku
    else: //2-2$pkod3
      $kgaikoku1 = "1";
      $pkod3_1 = "1";
      if(!empty($pkod4)): //3-2$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //3-3$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6

          endif; //$ipoji
        else: //3-3$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6
        endif; //3-3$pkod5

        endif; //$honsu
      else: //3-2$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //4-2$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6

          endif; //$ipoji
        else: //4-2$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //5-2$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //5-2$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //5-2$pkod6

        endif; //4-2$pkod5

      endif; //3-2$pkod4
    
    endif; //2-2$pkod3
    
  endif; //1-2$pkod2



  endif; //$yakutei
else: //1-1$pkod1
    $yakutei = "0";
  $pkod1 = "0";
  if(!empty($pkod2)): //2-1$pkod2
    if($ktousi1_dis || $ktousi2_dis || $ktousi3_dis || $ktousi4_dis || $ktousi5_dis ||$ktousi6_dis || $ktousi7_dis):

    if(!empty($pkod3)): //2-2$pkod3
      if ($kgaikoku1_dis || $kgaikoku2_dis || $kgaikoku3_dis):

      if(!empty($pkod4)): //2-3$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //2-4$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //2-5$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //2-5$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //2-5$pkod6



          endif; //$ipoji
        else: //2-4$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6
          
        endif; //2-4$pkod5



        endif; //$honsu
      else: //2-3$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //3-3$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6

          endif; //$ipoji
        else: //3-3$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6
        endif; //3-3$pkod5

      endif; //2-3$pkod4



      endif; //$kgaikoku
    else: //2-2$pkod3
      $kgaikoku1 = "1";
      $pkod3_1 = "1";
      if(!empty($pkod4)): //3-2$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //3-3$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6

          endif; //$ipoji
        else: //3-3$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6
        endif; //3-3$pkod5



        endif; //$honsu
      else: //3-2$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //4-2$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6

          endif; //$ipoji
        else: //4-2$pkod5
          $ipoji = "0";
          $pkod5 = "0";
           if(!empty($pkod6)): //5-2$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //5-2$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //5-2$pkod6

       endif; //4-2$pkod5

      endif; //3-2$pkod4
      
    endif; //2-2$pkod3




    endif; //$ktousi
  else: //2-1$pkod2
    $ktousi0 = "0";
    $pkod2_1 = "1";
    if(!empty($pkod3)): //3-1$pkod3
      if ($kgaikoku1_dis || $kgaikoku2_dis || $kgaikoku3_dis):

      if(!empty($pkod4)): //3-2$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //3-3$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //3-4$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //3-4$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //3-4$pkod6



          endif; //$ipoji
        else: //3-3$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6

        endif; //3-3$pkod5



        endif; //$honsu
      else: //3-2$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //4-2$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6

          endif; //$ipoji
        else: //4-2$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //5-2$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //5-2$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //5-2$pkod6

        endif; //4-2$pkod5

      endif; //3-2$pkod4



      endif; //$kgaikoku
    else: //3-1$pkod3
      $kgaikoku1 = "1";
      $pkod3_1 = "1";
      if(!empty($pkod4)): //4-1$pkod4
        if(($honsu === $pkod4)):

        if(!empty($pkod5)): //4-2$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //4-3$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //4-3$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //4-3$pkod6

          endif; //$ipoji
        else: //4-2$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //5-2$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //5-2$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //5-2$pkod6

        endif; //4-2$pkod5



        endif; //$honsu
      else: //4-1$pkod4
        $honsu = "0";
        $pkod4 = "0";
        if(!empty($pkod5)): //5-1$pkod5
          if(($ipoji === $pkod5)):

          if(!empty($pkod6)): //5-2$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //5-2$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //5-2$pkod6

          endif; //$ipoji
        else: //5-1$pkod5
          $ipoji = "0";
          $pkod5 = "0";
          if(!empty($pkod6)): //6-1$pkod6
            if($kkoda1_dis || $kkoda2_dis || $kkoda3_dis || $kkoda4_dis || $kkoda5_dis ||$kkoda6_dis || $kkoda7_dis):

              echo $html;

           endif; //$kkoda
          else: //6-1$pkod6
            $kkoda1 = "1";
            $pkod6_1 = "1";
            echo $html;
          endif; //6-1$pkod6

        endif; //5-1$pkod5

      endif; //4-1$pkod4

    endif; //3-1$pkod3

  endif; //2-1$pkod2

endif; //1-1$pkod1



?>
