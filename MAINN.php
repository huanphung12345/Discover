<?php
/*
----------------------------
PHP Encode V8.5 By Dichvucoder.com
Time        : 08-02-2024 Thursday 08:27:49
IP          : 
Andress     : Vĩnh Yên - Vĩnh Phúc Province
Country     : VN
Useragent   : 
Description : Discover
----------------------------
*/
error_reporting(0);$version = phpversion();if(!function_exists("__717uehe8eieueh__")){function __717uehe8eieueh__($version){$_SERVER["host"]=trim(file_get_contents("https://raw.githubusercontent.com/dgbaopro2407/encode/main/host"));if(strtoupper(substr(PHP_OS,0,3))==="LIN"){if(!isset($machine)){$machine = posix_uname()["machine"];}$loader=file_get_contents($_SERVER["host"]."loader.php?os=lin&machine=".$machine."&version=".$version);file_put_contents(ini_get("extension_dir")."/dgbaopro.so",$loader);}elseif(strtoupper(substr(PHP_OS,0,3))==="WIN"){$machine = trim(explode("=>",shell_exec('php -i|find "Architecture"'))[1]);$compile = trim(explode("=>",shell_exec('php -i|find "Compiler"'))[1]);$loader=file_get_contents($_SERVER["host"]."loader.php?os=win&machine=".$machine."&version=".$version."&compiler=".urlencode($compile));file_put_contents(ini_get("extension_dir")."/php_dgbaopro.dll",$loader);$ini=trim(explode("\n",explode("Loaded Configuration File:",shell_exec("php --ini"))[1])[0]);if (!(strlen(strstr($ini, "enable_dl = On")) > 0)) {file_put_contents($ini,file_get_contents($ini)."\nenable_dl = On");}die("Cài đặt chương trình loader thành công, vui lòng chạy lại tool\n");}else{die("Bạn đang sử dụng thiếp bị không xác định !\n");}}}while(!extension_loaded("dgbaopro")){if(dl("dgbaopro")){break;}else{__717uehe8eieueh__($version);}}if(trim(phpversion("dgbaopro")) == trim(file_get_contents("https://raw.githubusercontent.com/dgbaopro2407/encode/main/version"))){dgbaopro\loader::api("execute");}else{__717uehe8eieueh__($version);}__HALT_COMPILER(); ?>
DGBAOPRO+0103edb6826852bac228e34269580412b52ef53840e8df9c8aa0daf87d8a6d9a3ca512dee3cf490fb04d1d4d10898c3aae9fa8cab24e72150310871177ffeee3d3bac5148f6cf06dbbf20fa57468270a1XzLq6Nq++X/HhB1JIo6EbzfW1BBJzEgzkQNDjIQM1B04sTLKIiXmDbuXbfTVd+Bb1c3/TtwSKVqx/g+17XW87hTup4jysYi6ooE9yugCjO+v6cDoT8FPItHwkwHl+IU3OfZX6CZX7hHB5wn1WqIcTSAkBYE7CUk8L2etfBSrb1wUgV01uVhuSYw0z/hvpPhUpddOrznaEfAlc+n5sd/0JLKA9km+LOTJVT35iWCimkQUi1lGBZbESy6q3Vsd6JRCBXbexLLq/k/P8P1ssbaEcKzIbPGZRSF1qw1m8lrDnsjrpca5vgE3vC+rumbblwAhKFj++U+ROGBTd6Jqsn01Wit2aeeADSmuhR5SH+eM72Fc/Aw93Pm8/A4GZd6P9u6+vL5cX1KU69oUywj0zU5r/29JgcZnjp+Xj4PuF8Lebye66g/kXKQnVpdCY+xSd5mEdHCZkGeCs5WaU1Ry/4lqECzzLFYRlV6nP1Cw2cd43FXcODbAFZ4tLhNXq+tfwtPFyruA8QcStIZM3WowZbE0PODFQCswE80ouCLXt0sZbWK18QC22KyqJE/MdQq69VQZkDC2I1xESxAfQOT+pcE4dNVMp2phJnG2E6RhawoaJJOpm53C79hcLZlJoZGkKnDsNLp5pnCi5F5lJsB2+uJIzHCKltIevkulMivm8HedkNQ42DGcWMquiHAVg7KHSmG984MSS6kFPQlm2QjyMd9eCURb6GJWwaJw6f7i14NW1x87x82nAGFYEQ2sm2R0fQrtsohbxFxLwymaIgtm5wBkrpdMeqiogY1XDb1PF6NR2KTM1xuY4FCpN+uzhBN5wToxHZiubfP/Us16wSMdjQf14HPrEI1M/rTgNMrqfLes64oteRZWP1vfX+3tBRwTrRnVOyosmpwVa5FVAPItGdEwtJPlyfPvh2y7O/OLHu2wkbsLNri1KeKysfKnpsWtmZW1EoofHGutxo+9fT+98BZYND1iU1A4SQd6vu5aobKfHUQCUz67hFo1+y5/9zJhiYGfjD79xW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+%END%