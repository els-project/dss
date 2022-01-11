<?php

    function GetHari($tanggal){

      $tgl = substr($tanggal,0,2);
      $bln = substr($tanggal,3,2);
      $thn = substr($tanggal,6,4);
   
      $info = date('w', mktime(0,0,0,$bln,$tgl,$thn));
      
      switch($info){
          case '0': return "Minggu"; break;
          case '1': return "Senin"; break;
          case '2': return "Selasa"; break;
          case '3': return "Rabu"; break;
          case '4': return "Kamis"; break;
          case '5': return "Jumat"; break;
          case '6': return "Sabtu"; break;
      };
        
    }