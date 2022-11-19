<? if(isset($us['id'])){ header("location: /m/deposit"); } ?>
<main>
    <router-outlet></router-outlet>
    <app-authentication class="ng-star-inserted">
        <router-outlet></router-outlet>
        <app-signin class="ng-star-inserted">
            <div class="login-page">
                
                <form id="form" class="login-form clear" action="#" novalidate="">
                    <div class="loginSteps">
                        <div id="step_1">
                            
                            <div class="col-12 form-title text-center py-4">
                            <div class="t">HOŞGELDİNİZ.</div>
                            <div class="d">Lütfen hesabınıza giriş yapınız.</div>
                        </div>
                           
                            <div class="input-field ng-star-inserted">
                                <input class="inp-pri form-control" id="__BVID__219" name="field_first" type="text" id="username" placeholder="Kullanıcı adı">
                            </div>
                            <br>
                             
                            <div class="input-field password">
                                <input class="inp-pri form-control" id="__BVID__220" name="field_second" type="password" placeholder="Şifreniz">
                                
                            </div>
                        </div>
                        <div id="step_2" class="dnone">
                            <? if($main['phone_status']==1){ ?>
                            <div class="input-field ng-star-inserted">
                                <input class="browser-default" name="phone" type="text" placeholder="Telefon numaranız">
                            </div>
                            <? } ?>
                            <? if($main['passport_status']==1){ ?>
                            <div class="input-field ng-star-inserted">
                                <input class="browser-default" name="passport" type="text" placeholder="TC kimlik numaranız">
                            </div>
                            <? } ?>
                        </div>
                    </div>
                    <br>
                    <a href="/forgot-password" class="text-vio" target="_self">Parolanızı mı unuttunuz?</a>
                    <br>
                    <br>
                    <button class="btn btn-default btn-pri f-s-18 f-w-b py-3 text-uppercase w-100 " onclick="logIn()"> Giriş Yap </button>
                    <div class="col-12 mb-md text-center py-4 f-f-r f-s-16">
Üye değil misiniz ?
<a href="register.php" class="text-pri font-weight-bold" target="_self">HEMEN ÜYE OL</a></div>
                </form>
                
        </app-signin>
    </app-authentication>
</main>