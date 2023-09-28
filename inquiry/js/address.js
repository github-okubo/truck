$(function(){
    $('#rtnBtn').on('click',function(){
        $("form").attr("action","index.php");
        $("form").submit();
        return false;     
    });
});