<footer>
    <div class="footer_wrapper">
        <div class="float-left">
            <div class="logo float-left">
                <center><img src="img/logo_footer.png" alt="автоюрист32_logo"/></center>
                <p class="posit-txt">ООО «Стройбетон»</p>
                <p>Все права защищены</p>
            </div>
            <div class="menu float-left">
                <ul>
                    <li><a href="index.html">О предприятии</a></li>
                    <li><a href="concrete-and-mortar.html">Бетон и раствор</a></li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="float-left">
            <a href="#" class="call_button float-right">Заказать звонок</a>
            <p class="float-right footer_wrapper__contacts">
                <span class="icon phone"></span>
                8 (4832) 92 13 82, 8 (4832) 92 15 76,<br/>
                8 (4832) 92 28 74 (факс),<br/>
                E-mail:sb-br@yandex.ru,<br/>
                Брянск, пер. Комсомольский, д.13
            </p>
        </div>
    </div>
</footer>
<div class="modal" id="modal">
    <div id="img-auto" class="float-left auto"></div>
        <span>Заполните форму ниже и мы свяжемся с вами для бесплатной консультации</span>
        <div class="form">
            <?php include "../feedback/form.html";?>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
<script src="js/vendor/jquery.simplemodal.1.4.4.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/feedback.js"></script>
<script>
    $(function() {
        var url=document.location.href;
        $.each($('.header_info__menu.float-left li a '),function(){
            if(this.href==url){
                $(this).addClass('active');
            };
        }); 
    });  
    $(function() {
        var url=document.location.href;
        $.each($('.menu.float-left li a'),function(){
            if(this.href==url){
                $(this).addClass('active');
            };
        }); 
    });     
</script>