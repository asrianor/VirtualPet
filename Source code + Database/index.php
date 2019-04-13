<?php
require_once __DIR__ . '/koneksi.php';
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();

$text = $bot->getMessageText();

$userid = $bot->getUserId();

 $glog = mysqli_query($conn, "SELECT kondisi FROM State WHERE id=1");
   if (mysqli_num_rows($glog)>0){
   while($row=mysqli_fetch_row($glog))
  {
    $kondisi=$row[0];
  }}
   
if($userid=='Ufe9a81dd472229dec8ebb01abb934520'){
if (strtolower($text) == 'cek'){
    $balas='Meow meow';
    $bot->replya($balas,$kondisi);
    
}
if (strtolower($text) == 'userid'){
    $balas=$userid;
    $bot->reply2($balas);
    
}
if (strtolower($text) == 'main'){
    if($kondisi=='senang'){
       mysqli_query($conn,"UPDATE State SET kondisi='lapar' WHERE id=1");
        
        $balas='Meow senang bermain, meow lapar setelah bermain';
        $kondisi='lapar';
    }else 
    if($kondisi=='bosan'){
       mysqli_query($conn,"UPDATE State SET kondisi='lapar' WHERE id=1");
        
        $balas='Meow sedang bosan, meow merasa lapar';
        $kondisi='lapar';
    }else 
    if($kondisi=='tidur'){
       mysqli_query($conn,"UPDATE State SET kondisi='marah' WHERE id=1");
        
        $balas='Meow sedang tidur, meow marah diajak main';
        $kondisi='marah';
    }
    else 
    if($kondisi=='lapar'){
       mysqli_query($conn,"UPDATE State SET kondisi='sakit' WHERE id=1");
        
        $balas='Meow lapar, meow sakit jika diajak main';
        $kondisi='sakit';
    }
    else 
    if($kondisi=='marah'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow sedang marah, meow tidur setelah main';
        $kondisi='tidur';
    }
    else 
    if($kondisi=='sakit'){
       mysqli_query($conn,"UPDATE State SET kondisi='sakit' WHERE id=1");
        
        $balas='Meow sedang sakit, meow tambah sakit jika bermain';
        $kondisi='sakit';
    }
    
    
    $bot->replya($balas,$kondisi);
    
}
else if (strtolower($text) == 'makan'){
    if($kondisi=='senang'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow senang makan, meow ngantuk lalu tidur';
        $kondisi='tidur';
    }else 
    if($kondisi=='bosan'){
       mysqli_query($conn,"UPDATE State SET kondisi='bosan' WHERE id=1");
        
        $balas='Meow sedang bosan, gak mau makan';
        $kondisi='bosan';
    }else 
    if($kondisi=='tidur'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow habis makan tidur lagi';
        $kondisi='tidur';
    }
    else 
    if($kondisi=='lapar'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Habis makan meow tidur';
        $kondisi='tidur';
    }
    else 
    if($kondisi=='marah'){
       mysqli_query($conn,"UPDATE State SET kondisi='bosan' WHERE id=1");
        
        $balas='Meow bosan gak mau makan';
        $kondisi='bosan';
    }
    else 
    if($kondisi=='sakit'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow tidur semoga cepat sembuh';
        $kondisi='tidur';
    }
    
    
    $bot->replya($balas,$kondisi);
    
}
else if (strtolower($text) == 'elus'){
    if($kondisi=='senang'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow senang dielus, meow ngantuk lalu tidur';
        $kondisi='tidur';
    }else 
    if($kondisi=='bosan'){
       mysqli_query($conn,"UPDATE State SET kondisi='senang' WHERE id=1");
        
        $balas='Meow senang dielus';
        $kondisi='senang';
    }else 
    if($kondisi=='tidur'){
       mysqli_query($conn,"UPDATE State SET kondisi='marah' WHERE id=1");
        
        $balas='Meow sedang tidur, marah karna dielus';
        $kondisi='marah';
    }
    else 
    if($kondisi=='lapar'){
       mysqli_query($conn,"UPDATE State SET kondisi='lapar' WHERE id=1");
        
        $balas='Meow lapar';
        $kondisi='lapar';
    }
    else 
    if($kondisi=='marah'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow tidur karna dielus';
        $kondisi='tidur';
    }
    else 
    if($kondisi=='sakit'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow tidur karna dielus';
        $kondisi='tidur';
    }
    
    
    $bot->replya($balas,$kondisi);
    
}
else if (strtolower($text) == 'elus'){
    if($kondisi=='senang'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow senang dielus, meow ngantuk lalu tidur';
        $kondisi='tidur';
    }else 
    if($kondisi=='bosan'){
       mysqli_query($conn,"UPDATE State SET kondisi='senang' WHERE id=1");
        
        $balas='Meow senang dielus';
        $kondisi='senang';
    }else 
    if($kondisi=='tidur'){
       mysqli_query($conn,"UPDATE State SET kondisi='marah' WHERE id=1");
        
        $balas='Meow sedang tidur, marah karna dielus';
        $kondisi='marah';
    }
    else 
    if($kondisi=='lapar'){
       mysqli_query($conn,"UPDATE State SET kondisi='lapar' WHERE id=1");
        
        $balas='Meow lapar';
        $kondisi='lapar';
    }
    else 
    if($kondisi=='marah'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow tidur karna dielus';
        $kondisi='tidur';
    }
    else 
    if($kondisi=='sakit'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow tidur karna dielus';
        $kondisi='tidur';
    }
    
    
    $bot->replya($balas,$kondisi);
    
}
else if (strtolower($text) == 'abaikan'){
    if($kondisi=='senang'){
       mysqli_query($conn,"UPDATE State SET kondisi='bosan' WHERE id=1");
        
        $balas='Meow bosan karna diabaikan';
        $kondisi='bosan';
    }else 
    if($kondisi=='bosan'){
       mysqli_query($conn,"UPDATE State SET kondisi='tidur' WHERE id=1");
        
        $balas='Meow tidur karna diabaikan';
        $kondisi='tidur';
    }else 
    if($kondisi=='tidur'){
       mysqli_query($conn,"UPDATE State SET kondisi='bosan' WHERE id=1");
        
        $balas='Meow bosan karna diabaikan';
        $kondisi='bosan';
    }
    else 
    if($kondisi=='lapar'){
       mysqli_query($conn,"UPDATE State SET kondisi='sakit' WHERE id=1");
        
        $balas='Meow sakit karna diabaikan';
        $kondisi='sakit';
    }
    else 
    if($kondisi=='marah'){
       mysqli_query($conn,"UPDATE State SET kondisi='marah' WHERE id=1");
        
        $balas='Meow marah karna diabaikan';
        $kondisi='marah';
    }
    else 
    if($kondisi=='sakit'){
       mysqli_query($conn,"UPDATE State SET kondisi='sakit' WHERE id=1");
        
        $balas='Meow sakit karna diabaikan';
        $kondisi='sakit';
    }
    
    
    $bot->replya($balas,$kondisi);
    
}}else{$bot->reply2('Anda bukan pemilik pet');}

?>