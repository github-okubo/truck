$(function(){


        $('#rtnBtn').click(function() {
            //return button
            prevPage = $('#prevPage').val();
            $('form').attr('action', prevPage);
            if (! $('form')[0].reportValidity()) return false;
            $('form').submit();
            return false;
        });
    
        $('#subBtn').click(function() {
            //submit button
            if (! $('form')[0].reportValidity()) return false;
            $('form').submit();
            return false;
        });
    });