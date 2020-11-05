<?php
/*ID: 602110193
Name: yucaiwen
Wechat: yucaiwen*/
printf("Input number:");
fscanf(STDIN, "%d", $n);
for ($j=1;$j<=12;$j++){
    for($i=2; $i<=$n; $i++){
        printf("%4d",$h=$i*$j);
    }printf("\n");
}
?>