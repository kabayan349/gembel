<?php
date_default_timezone_set('Asia/Jakarta');
include "function2.php";
// echo color("white","Token: ");
// $token = trim(fgets(STDIN));

$myfile = fopen("sessions.txt", "r") or die("Unable to open file!");
$token = fread($myfile,filesize("sessions.txt"));

system('clear');
// system('sleep 2');

echo color("green","    __         __                          \n");
echo color("green","   / /______ _/ /_  ____ ___  ______ _____  \n");
echo color("green","  / //_/ __ `/ __ \/ __ `/ / / / __ `/ __ \ \n");
echo color("green"," / ,< / /_/ / /_/ / /_/ / /_/ / /_/ / / / / \n");
echo color("green","/_/|_|\__,_/_.___/\__,_/\__, /\__,_/_/ /_/  \n");
echo color("green","                       /____/      \n");
echo "\n";

echo "\e[93m      ╔══════════════════════════════════╗\n";
              echo "\e[91m      ║            Terimakasih           ║\n";
              echo "\e[91m      ║             THANKS TO            ║\n";
              echo "\e[91m      ║          Kabayan Managemen       ║\n";
              echo "\e[93m      ╚══════════════════════════════════╝\n";
   
echo color("green","           Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("green","                  Format Kode 62*** \n");



        echo color("white","▬▬▬▬▬▬▬▬▬▬▬▬CLAIM VOUCHER▬▬▬▬▬▬▬▬▬▬▬▬");
        echo "\n".color("white","Claim A..");
        echo "\n".color("white","Please wait");
        for($a=1;$a<=3;$a++){
        echo color("white",".");
        sleep(1);
        }
