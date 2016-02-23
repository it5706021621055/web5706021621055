<html>
 <head>
  <meta charset="UTF-8">
  <title>HW2 Random</title>
 </head>

<body>
    <center>
    <?php
      $i=1;
      for ($r=0; $r <13 ; $r++) {
        for ($c=0; $c <4 ; $c++) {
          $num[$r][$c]=$i;
          $i++;
        }
      }
      for ($r=0; $r <13 ; $r++) {
        for ($c=0; $c <4 ; $c++) {
          $a=rand(0,12);
          $b=rand(0,3);
          $temp=$num[$r][$c];
          $num[$r][$c]=$num[$a][$b];
          $num[$a][$b]=$temp;
          echo  $num[$i][$c];
        }
      }
    ?>
      <table border="1" height="1000" width="1000" >

      <?php for($r=0; $r <13 ; $r++) { ?>
          <tr>
              <?php  for ($c=0; $c <4 ; $c++) { ?>
                <td align = "center"><?php echo $num[$r][$c]; ?></td>
            <?php  } ?>
          </tr>
      <?php } ?>
    </table>
  </body>
 </html>
