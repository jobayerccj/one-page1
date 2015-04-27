;
(function ($) {
    var sections = ["mb_banner","mb_about","mb_feature","mb_fe_article","mb_clients", "mb_portfolio","mb_feedback","mb_team","mb_facts","mb_events","mb_projects","mb_twitter"];
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