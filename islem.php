<?php 
    require_once('baglanti.php');
   
    if (isset($_GET['yorumlar_kaydet'])) {
        $kayitsorgu=$db->prepare("INSERT into yorumlar set
        yorumlar_yorum=:yorumlar_yorum
        
    ");

    $insert=$kayitsorgu->execute(array(
        'yorumlar_yorum'=>$_GET['yorumlar_yorum']
        
    ));
    }

//güncelleme
if (isset($_GET['yorumlar_guncelle'])) {
    $updatesorgu=$db->prepare("UPDATE yorumlar set
    yorumlar_yorum=:yorumlar_yorum,
    yorumlar_tarih=:yorumlar_tarih
    where yorumlar_id={$_GET['yorumlar_id']}
");
$update=$updatesorgu->execute(array(
    'yorumlar_yorum'=>$_GET['yorumlar_yorum'],
    'yorumlar_tarih'=>$_GET['yorumlar_tarih']
    
));

}
   
?>