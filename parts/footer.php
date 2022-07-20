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
                <span class="color-8 d-block p-1 pl-0" href="./ru/contact">companyName</span>
                <span class="color-8 d-block p-1 pl-0" href="./ru/contact">ИНН: inn</span>
                <span class="color-8 d-block p-1 pl-0" href="./ru/contact">КПП: kpp</span>
                <span class="color-8 d-block p-1 pl-0" href="./ru/contact">ОГРН: ogrn</span>
                <span class="color-8 d-block p-1 pl-0" href="./ru/contact">Адрес: address</span>
                <span class="color-8 d-block p-1 pl-0" href="./ru/contact">Телефон: phone</span>
                <span class="color-8 d-block p-1 pl-0" href="./ru/contact">Email: support@adbutton.pro</span>
            </div>
            <div class="col-lg-3 col-md-4 pb-5 pb-md-0 fs--1">
                <h6 class="color-9 text-uppercase">Информация</h6>
                <hr class="mt-3 short left color-8" align="left">
                <a class="color-8 d-block p-1 pl-0" href="./payment.php">Оплата</a>
                <a class="color-8 d-block p-1 pl-0" href="./terms-and-conditions.php">Оферта</a>
                <a class="color-8 d-block p-1 pl-0" href="./policy.php">Политика конфиденциальности</a>
            </div>

        </div>
    </div>
</section>
</main>
<script type="text/javascript" src="./assets/js/bundle_home.min.js"></script>

<div class="alert text-center cookiealert show" role="alert">
    <b>Мы используем файлы cookie.</b> 🍪 Продолжая использовать наш сайт, вы соглашаетесь с нашей <a href="./ru/policy" target="_blank">Политикой конфиденциальности</a>
    <button type="button" class="btn btn-primary btn-sm acceptcookies c-pointer" aria-label="Close" data-cookie-string=".AspNet.Consent=yes; expires=Wed, 19 Jul 2023 17:21:00 GMT; path=/; secure; samesite=none">
        Я согласен
    </button>
</div>
<script>
    (function () {
        document.querySelector(".cookiealert").offsetHeight;
        document.querySelector(".acceptcookies").addEventListener("click", function (el) {
            document.cookie = el.target.dataset.cookieString;
            document.querySelector(".cookiealert").classList.remove("show");
        }, false);
    })();
</script>

</body>
</html>
