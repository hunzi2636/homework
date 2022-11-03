<table>
    <?php
    for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=$i;$j++){
            $c=$j*$i;
            $r=mt_rand(0,255);
            $g=mt_rand(0,255);
            $b=mt_rand(0,255);
            echo "<td style='background:rgb($r,".$g.",".$b.")'>$i*$j=$c</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
