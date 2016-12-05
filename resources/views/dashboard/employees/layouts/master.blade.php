 <script type="text/javascript">
        $(document).ready(function() {
        $('#example').dataTable();
         $("#cnic").mask("99999-9999999-9");
         $("#phone").mask("(9999) 999-9999999");
        } );

        //////////////// Password Matching ////////////////////////////
        $(document).ready(function() {
        $('#confirm_password').on('keyup', function () {
        if($(this).val() != '' || $('#password').val() != ''){
            if ($(this).val() == $('#password').val()) {
                $('#message').html('Password Match!').addClass('success').removeClass('error').css('margin-bottom', '10px');
            } else{
             $('#message').html('Password not Matched!').addClass('error').removeClass('success').css('margin-bottom', '10px');
             }
        }else{
        $('#message').addClass('error').removeClass('success');
        }
        });
        $('#password').on('keyup', function () {
                    if($(this).val() != '' || $('#confirm_password').val() != ''){
                        if ($(this).val() == $('#confirm_password').val()) {
                            $('#message').html('Password Match!').addClass('success').removeClass('error').css('margin-bottom', '10px');
                        } else{
                         $('#message').html('Password not Matched!').addClass('error').removeClass('success').css('margin-bottom', '10px');
                         }
                    }else{
                    $('#message').addClass('error').removeClass('success');
                    }
                    });
         } );

        function checkForm()
        {
            $( "#create" ).prop( "disabled", true );
            $( "#create" ).val('Please wait...');
        }
    </script>