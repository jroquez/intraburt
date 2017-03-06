 <!-- jQuery -->
    <script src="<?=URL?>/src/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=URL?>/src/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?=URL?>/src/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?=URL?>/src/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?=URL?>/src/js/waves.js"></script>
    <!--Counter js -->
    <script src="<?=URL?>/src/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="<?=URL?>/src/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="<?=URL?>/src/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="<?=URL?>/src/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?=URL?>/src/js/custom.min.js"></script>
    <script src="<?=URL?>/src/js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?=URL?>/src/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=URL?>/src/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?=URL?>/src/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Welcome to Rox - Debt Collection'
                , text: 'Get to know your tools.'
                , position: 'top-right'
                , loaderBg: '#ff6849'
                , icon: 'info'
                , hideAfter: 3500
                , stack: 6
            })
        });
        window.onload = function() {
        if ($("body").hasClass("content-wrapper")) {
            $("body").trigger("resize");
            $(".sidebar-nav, .slimScrollDiv").css("overflow", "hidden").parent().css("overflow", "visible");
            $("body").removeClass("content-wrapper");
            $(".open-close i").addClass("icon-arrow-left-circle");
            $(".logo span").show();
        }
        else {
            $("body").trigger("resize");
            $(".sidebar-nav, .slimScrollDiv").css("overflow-x", "visible").parent().css("overflow", "visible");
            $("body").addClass("content-wrapper");
            $(".open-close i").removeClass("icon-arrow-left-circle");
            $(".logo span").hide();
        }
    };   
    </script>
    <!--Style Switcher -->
    <script src="<?=URL?>/src/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="<?=URL?>/src/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>