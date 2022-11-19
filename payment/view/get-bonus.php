<?php include '../../inc/config.php'; ?>
<div class="card payment-card">
  <div class="card-body">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bonus Talep</h4>
        <form action="javascript:;" onsubmit="Swal.fire('','Talep işleme alındı','info')" method="POST">
          <div class="form-group">
            <label for="username">Kullanıcı Adınız</label>
            <input type="text" name="username" value="" class="form-control" required="">
          </div>
          <input type="submit" value="Talep Et" class="form-control btn btn-primary">
        </form>
      </div>
    </div>
    <div class="card mt-3">
      <div class="card-body" style="background-color: #000;">
        <div>
          <div><font color="#efefef"><span style="background-color: rgb(0, 0, 0);"><b>JEST BONUSU NEDİR ?<br><br>Bu bonus HAFTALIK NET KAYIP ÜZERİNDEN aktarılır .&nbsp;</b></span></font></div>
          <div><font color="#efefef"><span style="background-color: rgb(0, 0, 0);"><b><br></b></span></font></div>
          <div><font color="#efefef"><span style="background-color: rgb(0, 0, 0);"><b>Bu Buton SADECE Pazar günleri 23:45 ile Pazartesi günleri 23:59 arası aktif edilir .&nbsp;</b></span></font></div>
          <div><font color="#efefef"><span style="background-color: rgb(0, 0, 0);"><b><br></b></span></font></div>
          <div><font color="#efefef"><span style="background-color: rgb(0, 0, 0);"><b>İlgili gün ve saatler arasında verdiğiniz talepler dikkate alınarak KOŞULA UYGUN ZARARINIZ ve HAK EDİŞİNİZ VARSA ortalama 30 dk içinde hesabınıza aktarılır . 30 dakika içerisinde aktarılmamış ise CANLI DESTEK hattımıza bağlanarak bilgi alabilirsiniz</b></span></font></div>
        </div>
        <div><br></div>
      </div>
    </div>
  </div>
</div>
