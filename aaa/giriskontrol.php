<html>
    <head>

    </head>

<body style="background-color:darkgray;">
 <div >
   <p>
       <?php
         $adsoyad =$_POST["Username"];
         $sifre =$_POST["Password"];
         if($adsoyad && $sifre) // veriler boş değilse buradan devam eder
         {
            if($adsoyad == "g231210371@sakarya.edu.tr" && $sifre=="g231210371")
            {  
                echo "HOŞGELDİN ". $adsoyad;
        
            }
            else
            {
                header("location:giriş.html"); 
        
            }
         } 
         else 
         {
          header("location:giris.html"); // veriler boşsa sayfaya geri gönderir
         }
       ?>
   </p>

 </div>


</body>
</html>
