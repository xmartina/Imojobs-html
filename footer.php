<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
<script src="asset/js/extention/choices.js"></script>
<script src="asset/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".acd-1-output").hide();
        $(".acd-2-output").hide();
        $(".acd-3-output").hide();
        $(".acd-4-output").hide();
    });
    $(".accdi-wrp").click(function(){
        $(".acd-1-output").toggle(100)
    });
    $(".accdi-wrp-2").click(function(){
        $(".acd-2-output").toggle(100)
    });
    $(".accdi-wrp-3").click(function(){
        $(".acd-3-output").toggle(100)
    });
    $(".accdi-wrp-4").click(function(){
        $(".acd-4-output").toggle(100)
    });

    function rotateAcd1(){
        var angle = ($('#acd-rotate').data('angle') + 45) || 45;
        $('#acd-rotate').css({'transform': 'rotate(' + angle + 'deg)'});
        $('#acd-rotate').data('angle', angle);
    }
    function rotateAcd2(){
        var angle = ($('#acd-rotate2').data('angle') + 45) || 45;
        $('#acd-rotate2').css({'transform': 'rotate(' + angle + 'deg)'});
        $('#acd-rotate2').data('angle', angle);
    }
    function rotateAcd3(){
        var angle = ($('#acd-rotate3').data('angle') + 45) || 45;
        $('#acd-rotate3').css({'transform': 'rotate(' + angle + 'deg)'});
        $('#acd-rotate3').data('angle', angle);
    }
    function rotateAcd4(){
        var angle = ($('#acd-rotate-4').data('angle') + 45) || 45;
        $('#acd-rotate-4').css({'transform': 'rotate(' + angle + 'deg)'});
        $('#acd-rotate-4').data('angle', angle);
    }
</script>