<?php
/*ID: 602110193
Name: yucaiwen
Wechat: yucaiwen*/
printf("Input size:");
fscanf(STDIN,"%d",$n);
for($j=1;$j<=$n;$j++){
    for($i=1;$i<=$n;$i++) {
        printf("%s",($i<=$j)?"*":" ");
    }
    printf("\n");
}
?>