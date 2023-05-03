$(document).ready(function(){
    $(".product_check").click(function(){
        $("#loader").show();
        var action = 'data';
        var brand = get_filter_text('brand');
        var ram= get_filter_text('ram');
        var hdd = get_filter_text('hdd');
        var processor = get_filter_text('processor');
        var screen = get_filter_text('screen_size');
        var os = get_filter_text('os');

        $.ajax({
            url:'action.php',
            method:'POST',
            data:{action:action,brand:brand,ram:ram,hdd:hdd,processor:processor,screen:screen,os:os},
            success:function(response){
                $("#result").html(response);
                $("#loader").hide();
                $("#textChange").text("Filtered Products");
            }

        });
    });
    function get_filter_text(text_id){
        var filterData = [];
        $('#'+text_id+':checked').each(function(){
            filterData.push($(this).val());
        });
        return filterData
    }
});