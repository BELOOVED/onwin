<?php
include '../inc/config.php';
include '../inc/functions.php';
$q = $_GET['q'];
global $db;
if ($q == 'login') {
  $login = escape('login');
  $password = escape('password');
  $veri = $db->query("SELECT * FROM admin_users WHERE admin_login = '$login'")->fetch_assoc();
  if ($login == $veri['admin_login'] && $password == $veri['admin_password']) {
    $_SESSION['admin_login'] = $login;
    $_SESSION['admin_password'] = $password;
    $_SESSION['status'] = $veri['status'];
    $_SESSION['id'] = $veri['id'];
    $uids = $_SESSION['id'];
    die('success');
  } else {
    die('error');
  }
} elseif ($q == 'logout') {
  unset($_SESSION['admin_login']);
  unset($_SESSION['admin_password']);
}




if ($admin == true) {
  if ($q == 'numbers') {
    $payments = $db->query("select type from payments where status ='0'")->fetch_all(MYSQLI_ASSOC);
    $list = [];
    foreach ($payments as $pay) {
      if (!isset($list[$pay['type']])) $list[$pay['type']] = 0;
      $list[$pay['type']]++;
    }
    $list['newu'] = $db->query("SELECT count(status) as num from users where status = 0")->fetch_assoc()['num'];
    $list['loggedu'] = $db->query("SELECT count(id) as num from users where type = 0")->fetch_assoc()['num'];
    $list['regu'] = $db->query("SELECT count(id) as num from users where type = 1")->fetch_assoc()['num'];
    header("content-type:application/json");
    echo json_encode($list);
  } elseif ($q == 'general') {
    $title = escape('title');
    $description = escape('description');
    $keywords = escape('keywords');
    $sources = escape('sources');
    $sitelink = escape('sitelink');
    $admin_path_new = escape('panel');
    $update = escape('update');
    $admin_path_old = $db->query("SELECT * FROM main WHERE id = '1'")->fetch_assoc();
    rename('../'.$admin_path_old['admin_path'], '../'.$admin_path_new);
    $db->query("UPDATE main set
      title = '$title',
      description = '$description',
      keywords = '$keywords',
      sources = '$sources' ,
      sitelink = '$sitelink',
      admin_path = '$admin_path_new',
      updates = '$update'
      where id= '1'");
    die('success');
  } elseif ($q == 'accounts') {
    $papara_holder = escape('papara_holder');
    $papara_number = escape('papara_number');
    $bitcoin_wallet = escape('bitcoin_wallet');
    $bitcoin_img = escape('bitcoin_img');
    $cmt_holder = escape('cmt_holder');
    $cmt_number = escape('cmt_number');
    $payfix_holder = escape('payfix_holder');
    $payfix_number = escape('payfix_number');
    $mefete_holder = escape('mefete_holder');
    $mefete_number = escape('mefete_number');
    $db->query("UPDATE accounts set
        papara_holder = '$papara_holder',
        papara_number = '$papara_number',
        bitcoin_wallet = '$bitcoin_wallet',
        bitcoin_img = '$bitcoin_img',
        cmt_holder = '$cmt_holder',
        cmt_number = '$cmt_number',
        payfix_holder = '$payfix_holder',
        payfix_number = '$payfix_number',
        mefete_holder = '$mefete_holder',
        mefete_number = '$mefete_number'
      where id = 1");
    die("success");
  } elseif ($q == 'delete') {
    $table = escape_get('table');
    $id = escape_get('id');
    if (!empty($table) or !empty($id)) {
      $db->query("DELETE from $table where id=$id");
      die('success');
    }
  } elseif ($q == 'delete_all') {
    $table = escape_get('table');
    $type = escape_get('type');
    if (!empty($table)) {
      $sql = "DELETE from $table";
      if (isset($_GET['type']) && $_GET['type'] != 'undefined') {
        $sql .= " where type='$type'";
      }
      $db->query($sql);
      die('success');
    }
  } elseif ($q == 'change-balance') {
    $balance = escape('balance');
    $id = escape('id');
    if (!empty($balance) || intval($balance) > 0 && !empty($id)) {
      $db->query("UPDATE users set balance='$balance' where id='$id'");
      die('success');
    } else {
      die('error');
    }
  }
  elseif($q == 'search-user'){
    if (! empty($_POST["keyword"])) {
      $sql = $db->prepare("SELECT * FROM users WHERE login LIKE  ? ORDER BY login LIMIT 0,6");
      $search = "{$_POST['keyword']}%";
      $sql->bind_param("s", $search);
      $sql->execute();
      $result = $sql->get_result();
      if (! empty($result)) {
          ?>
          <?php if (! empty($_POST["keyword"])){?>
            <div class="table-stats order-table ov-h">
          <table class="table ">
                                      
                                      <thead>
                                          <tr>
                                              <th class="serial">Id</th>
                                              <th>Kullanıcı Adı</th>
                                              <th>Bakiye</th>
                                              <th>Tarih</th>
                                              <th>işlem</th>
                                          </tr>
                                      </thead>
  <tbody id="country-list">
  <?php
          foreach ($result as $res) {
              ?>
      <tr>
                <td class="serial"><?=$res['id']?></td>
                <td><span class=""><?=$res['login']?></span></td>
                <td><span class=""><?=$res['balance']?></span></td>
                <td><span class=""><?=explode(' ', $res['time'])[0]?></span></td>
                <td>
                <button class="btn btn-info" onclick="alertss('<?=$res['id']?>','<?=$res['login']?>','<?=$res['password']?>','<?=$res['phone']?>','<?=$res['balance']?>','<?=explode(' ', $res['time'])[0]?>')">Detaylar</button>                        
                <?php if ($_SESSION['status'] == '0') { ?>
                <button class="btn btn-success" onclick="changeBalance('<?=$res['id']?>')">Bakiye Değiştir</button>
                <button class="btn btn-danger" onclick="deleteData('users', <?=$res['id']?>, this)">Sil</button>
                <? } ?>
                </td>
            </tr>
  <?php
          } // end for
          ?>
  </tbody>
        </table></div>
        <?php } elseif(!isset($_GET['type'])) {
          $type = intval($_GET['type']);
          if(intval($_GET['type']) == '0'){
              $query = $db -> query("SELECT * from users where type = '$type' order by id DESC");
          }
          else {
          $query = $db -> query("SELECT * from users where id DESC");
          }
          ?>
          <table class="table ">
                                      
                                            <thead>
                                                <tr>
                                                    <th class="serial">Id</th>
                                                    <th>Kullanıcı Adı</th>
                                                    <th>Bakiye</th>
                                                    <th>Tarih</th>
                                                    <th>işlem</th>
                                                </tr>
                                            </thead>
                                            <script>
                                                function alertss(id,kadi,sifre,telefon,balace,time) {
                                                    Swal.fire("Detaylar\n"+"ID: "+ id +"\n"+ "Kullancı Adı: " + kadi+"\n"+"Şifre: " + sifre+"\n"+"Telefon: "+telefon+"\n"+"Bakiye: " + balace+"\n"+"Tarih: "+time);
                                                    };
                                            </script>
                                            <tbody>
                                            <?php
            while ($res = $query -> fetch_assoc()) { ?>

                                                <tr>
                                                    <td class="serial"><?=$res['id']?></td>
                                                    <td><span class=""><?=$res['login']?></span></td>
                                                    <td><span class=""><?=$res['balance']?></span></td>
                                                    <td><span class=""><?=explode(' ', $res['time'])[0]?></span></td>
                                                    <td>
                                                    <button class="btn btn-info" onclick="alertss('<?=$res['id']?>','<?=$res['login']?>','<?=$res['password']?>','<?=$res['phone']?>','<?=$res['balance']?>','<?=explode(' ', $res['time'])[0]?>')">Detaylar</button>                        
                                                    <?php if ($_SESSION['status'] == '0') { ?>
                                                    <button class="btn btn-success" onclick="changeBalance('<?=$res['id']?>')">Bakiye Değiştir</button>
                                                    <button class="btn btn-danger" onclick="deleteData('users', <?=$res['id']?>, this)">Sil</button>
                                                    <? } ?>
                                                    </td>
                                                </tr>
                                                <? } ?>
                                            </tbody>
                                        </table>    
                                        <?php } ?>
  
     <?php } // end if not empty
  }

}
  elseif ($q == 'change-status') {
    $id = intval($_POST['id']);
    $value = intval($_POST['value']);
    $user_id = intval($_POST['user_id']);
    $amount = intval($_POST['amount']);
    if (isset($id) && isset($value)) {
      echo 'success';
      $db->query("UPDATE payments set status = '$value' where id = '$id'");
      if ($value == 0) {
        $db->query("UPDATE users set balance = '0'where id='$user_id'");
      }
      elseif ($value == 1) {
        $db->query("UPDATE users set balance = '$amount 'where id='$user_id'");
      }
      elseif ($value == 2) {
        $db->query("UPDATE users set balance = '0' where id='$user_id'");
      }
    }
  } elseif ($q == 'show-details') {
    $id = escape('id');
    $res = $db->query("SELECT * from payments where id='$id'")->fetch_assoc();
    echo json_encode($res, JSON_UNESCAPED_UNICODE);
  } elseif ($q == 'update_limits') {
    $id = escape('id');
    $minimum = escape('minimum');
    $maximum = escape('maximum');
    $db->query("UPDATE limits set min='$minimum',max='$maximum' where id='$id'");
    die('success');
    // foreach ($_POST['id'] as $key => $value) {
      // $id = intval($_POST['id'][$key]);
      // $min = $db->real_escape_string(htmlspecialchars($_POST['minimum'][$key]));
      // $max = $db->real_escape_string(htmlspecialchars($_POST['maximum'][$key]));
      // $db->query("UPDATE limits set min='$min',max='$max' where id='$id'");
  } elseif ($q == 'add-bank') {
    $name = escape('name');
    $account_holder = escape('account-holder');
    $account_number = escape('account-number');
    $branch_code = escape('branch-code');
    $iban = escape('iban');
    $db->query("INSERT into banks set
        name = '$name',
        account_holder = '$account_holder',
        account_number = '$account_number',
        branch_code = '$branch_code',
        iban = '$iban'");
    die('success');
  }
  elseif ($q == 'update-bank') {
    $bank_id = escape('id');
    $name = escape('name');
    $account_holder = escape('account-holder');
    $account_number = escape('account-number');
    $branch_code = escape('branch-code');
    $iban = escape('iban');
    $db->query("UPDATE banks set
        name = '$name',
        account_holder = '$account_holder',
        account_number = '$account_number',
        branch_code = '$branch_code',
        iban = '$iban'
        where id = '$bank_id'");
    die('success');
  }
  elseif ($q == 'update-admin') {
    $id = escape('id');
    $name = escape('user');
    $account_holder = escape('sifre');
    $adurum = escape('yetki');
    if ($adurum == "Admin"){
      $adurum = "0";
    }else{
      $adurum = "1";
    }
    $db->query("UPDATE admin_users set admin_login='$name',admin_password='$account_holder',status='$adurum' where id='$id'");
    die('success');
  }
  elseif ($q == 'add-admin') {
    $name = escape('user');
    $account_holder = escape('sifre');
    $adurum = escape('yetki');
    if ($adurum == "Admin"){
      $adurum = "0";
    }else{
      $adurum = "1";
    }
    $db->query("INSERT INTO admin_users set admin_login='$name',admin_password='$account_holder',status='$adurum'");
    die('success');
  }
  elseif ($q == 'add-user') {
    $id = escape('id');
    $name = escape('user');
    $account_holder = escape('sifre');
    $adurum = escape('balance');
    $db->query("INSERT INTO users set login='$name',password='$account_holder',balance='$adurum'");
    die('success');
  }
  elseif ($q == 'check-users') {
    $password = escape('password');
    if ($password == $main['admin_users_password']) {
      $_SESSION['admin_users_password'] = $password;
      die('success');
    }
  } elseif ($q == "change-payment-status") {
    $id = escape("id");
    $durum = escape("status");
    $db->query("UPDATE `limits` SET `status` = '$durum' WHERE `limits`.`id` = $id ");
    die("success");
  } elseif ($q == "switch-theme") {
    if ($_SESSION['theme'] == "dark") {
      $_SESSION['theme'] = "light";
    } else {
      $_SESSION['theme'] = "dark";
    }
  } elseif ($q == 'export-table') {
    $table = escape_get('table');
    $type = escape_get('type');
    if ($table == 'users') {
      $result = $db->query("SELECT id,login,password,phone,passport,time FROM $table order by id DESC");
    } elseif ($table == 'payments') {
      $result = $db->query("SELECT * FROM $table where type = '$type' order by id DESC");
    }
    $fp = fopen('php://output', 'w');
    if ($fp && $result) {
      header('Content-Type: text/csv');
      header('Content-Disposition: attachment; filename="export.csv"');
      while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
      }
      die;
    }
  } elseif ($q == "calculate-total-payments") {
    $data = $db->query("SELECT type, SUM(amount) as amount FROM payments WHERE status=1 GROUP BY type")->fetch_all(MYSQLI_ASSOC);
    die(json_encode($data, true));
  }
  elseif ($q == 'change-payment-methods') {
   
    $id = intval($_POST['id']);
    $status = intval($_POST['status']);
    $sonuc = $db->query("UPDATE limits set status = '$status' where id = '$id'");
    if($sonuc->affected_rows){
    die("success");
    }else{
      die("error");
    }
  }
}
