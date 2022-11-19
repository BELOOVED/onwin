<?php
include "updating.php";
exit;
include '../../inc/config.php';
?>
<div class="card payment-card">
  <div class="card-header font-weight-bolder">
    <a href="javascript:;" onclick="Route.push('main')" class="text-dark pr-2"><i class="ion-chevron-left"></i></a> Astropay <span class="font-weight-normal">ile yatırım yap</span>
  </div>
  <div class="card-body">
    <div class="alert alert-warning" role="alert">
      Astropay ile kolayca ve hızlıca para yatırabilirsiniz.
    </div>
    <hr/>
    <form onsubmit="setPayment('astropay')">
      <div class="row">
        <div class="col-12 col-sm-6">
          <label>Kart Numarası</label>
          <div class="input-group mb-3">
            <input type="text" name="astropay_card_number" class="form-control">
          </div>
          <label>Son Kullanım Tarihi</label>
          <div class="row mb-3">
            <div class="input-group">
              <div class="col-6">
                <select class="form-control" name="expmonth">
                  <option value="1">01</option>
                  <option value="2">02</option>
                  <option value="3">03</option>
                  <option value="4">04</option>
                  <option value="5">05</option>
                  <option value="6">06</option>
                  <option value="7">07</option>
                  <option value="8">08</option>
                  <option value="9">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>
              <div class="col-6">
                <select class="form-control" name="expyear">
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
                  <option value="2030">2030</option>
                  <option value="2031">2031</option>
                  <option value="2032">2032</option>
                  <option value="2033">2033</option>
                  <option value="2034">2034</option>
                  <option value="2035">2035</option>
                </select>
              </div>
            </div>
          </div>
          <label>CV2</label>
          <div class="input-group mb-3">
            <input type="text" name="astropay_cv2" class="form-control">
          </div>
          <label>Tutar</label>
          <div class="input-group mb-3">
            <input type="text" name="amount" onkeyup="numExp()" class="form-control" placeholder="0.00">
            <div class="input-group-append">
              <span class="input-group-text">TRY</span>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-block btn-primary">Para Yatır</button>
    </form>
  </div>
</div>
