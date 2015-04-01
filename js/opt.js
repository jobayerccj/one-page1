;
(function ($) {
    var sections = ["mb_banner","mb_feature","mb_testimonial"];
    $(document).ready(function () {
        $(".cmb2-id--cmb2-stb li").on("click", "input", function () {

            var st = $(this).val();
            $(sections).each(function (i, item) {
                $("#" + item).hide();
            });
            
            //alert('test');
            $("#mb_" + st).show();
        });

        $(sections).each(function (i, item) {
            $("#" + item).hide();
        });

        displayDefaultMetabox();

        $("#_cmb2_display2ndpart").on("click",function(e){
            if(!$(this).prop("checked")){
                $("#_cmb2_buttontext, #_cmb2_buttonurl").parents(".cmb-row").hide();
            }else{
                $("#_cmb2_buttontext, #_cmb2_buttonurl").parents(".cmb-row").show();

            }
        })



    });

    function displayDefaultMetabox(){
        var st = $(".cmb2-id--cmb2-stb li input:checked").val();
        if(st){
            $("#mb_" + st).show();
        }
    }


    /**
     * visibility check
     */


})(jQuery);