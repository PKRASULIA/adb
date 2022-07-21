<section class="font-1 py-5 background-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pr-lg-7 pb-5 pb-lg-0 color-9">
                <h6 class="color-9 text-uppercase">Мы принимаем</h6>
                <hr class="mt-3 short left color-8" align="left">
                <div class="mt-0 d-inline-block">
                    <img style="max-width: 198px;" src="../assets/images/logo3h4.png" alt="payments" title="payments">
                </div>
                <div class="color-9 mt-0 font-1">&nbsp;</div>
                <div class="mb-3 hidden-sm-up"></div>

                <div class="fs--1 mt-1 color-8">© year-year AdButton ™ Inc.</div>
            </div>
            <div class="col-lg-3 col-md-4 pb-5 pb-md-0 fs--1">
                <h6 class="color-9 text-uppercase">Компания</h6>
                <hr class="mt-3 short left color-8" align="left">
                <span class="color-8 d-block p-1 pl-0">companyName</span>
                <span class="color-8 d-block p-1 pl-0">ИНН: inn</span>
                <span class="color-8 d-block p-1 pl-0">КПП: kpp</span>
                <span class="color-8 d-block p-1 pl-0">ОГРН: ogrn</span>
                <span class="color-8 d-block p-1 pl-0">Адрес: address</span>
                <span class="color-8 d-block p-1 pl-0">Телефон: phone</span>
                <span class="color-8 d-block p-1 pl-0">Email: support@adbutton.pro</span>
            </div>
            <div class="col-lg-3 col-md-4 pb-5 pb-md-0 fs--1">
                <h6 class="color-9 text-uppercase">Информация</h6>
                <hr class="mt-3 short left color-8" align="left">
                <a class="color-8 d-block p-1 pl-0" href="./payment">Оплата</a>
                <a class="color-8 d-block p-1 pl-0" href="./terms-and-conditions">Оферта</a>
                <a class="color-8 d-block p-1 pl-0" href="./policy">Политика конфиденциальности</a>
            </div>

        </div>
    </div>
</section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
<script type="text/javascript" src="./assets/js/bundle_home.min.js"></script>

<div class="alert text-center cookiealert show" role="alert">
    <b>Мы используем файлы cookie.</b> 🍪 Продолжая использовать наш сайт, вы соглашаетесь с нашей <a href="/policy" target="_blank">Политикой конфиденциальности</a>
    <button type="button" class="btn btn-primary btn-sm acceptcookies c-pointer" aria-label="Close" data-cookie-string=".AspNet.Consent=yes; expires=Wed, 19 Jul 2023 17:21:00 GMT; path=/; secure; samesite=none">
        Я согласен
    </button>
</div>

<script>
    function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
</script>

<script>
    (function () {
        document.querySelector(".cookiealert").offsetHeight;
        document.querySelector(".acceptcookies").addEventListener("click", function (el) {
            document.cookie = "acceptCookie=true";
            document.cookie = el.target.dataset.cookieString;
            document.querySelector(".cookiealert").classList.remove("show");
        }, false);

        if(getCookie('acceptCookie') != undefined) {
            document.querySelector('div[role=\'alert\']').remove();
        }
    })();

    
</script>

</body>
</html>
