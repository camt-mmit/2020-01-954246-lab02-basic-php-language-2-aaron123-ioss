<?php
/*ID: 602110193
Name: yucaiwen
Wechat: yucaiwen*/
printf("Input size:");
fscanf(STDIN,"%d",$n);
for($j=1;$j<=$n;$j++){
    for($i=$n+1;$i>1;$i--) {
        printf("%s",($i>=$j+2)?" ":"*");
    }
    printf("\n");
}
?>