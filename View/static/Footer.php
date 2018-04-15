 <div class="clearfix"></div>
<footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>&copy; Copyright 2018 Cristhian A. Hernández Moreno</li>
               <li>Design by Cristhian</a></li>   
            </ul>

         </div>

      </div>

   </footer> <!-- Footer End-->
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery-3.2.1.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/bootstrap/bootstrap.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/Swiper/swiper.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery.lazyload.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/greensock.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/kl-animate.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/<?=$page_title?>.js?<?=$elapsed_time?>"></script>
<script>
    $(document).ready(function(){
       $("img.lazy").lazyload({
            threshold : 200,
            effect : "fadeIn"
        });
       $("#botonmenu, #cerrar").click(function (){
            $(".menu-hidden-show").toggleClass("esconder-menu-hiden-show");
        });
       $.klAnimate();
    });
</script>
</body>
</html>