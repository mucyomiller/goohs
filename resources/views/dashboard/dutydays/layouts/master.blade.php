 <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable();
            $('.timepicker').timepicki({
                increase_direction:'up',
                show_meridian:false,
                start_time: ["08", "00"],
                min_hour_value:0,
                max_hour_value:24
            });

            $('#regForm').submit(function(e){
               if($("#sunday").is(':checked') || $("#monday").is(':checked') || $("#tuesday").is(':checked') || $("#wednesday").is(':checked') || $("#thursday").is(':checked') || $("#friday").is(':checked') || $("#saturday").is(':checked')){
                    if($("#sunday").is(':checked')){
                        if($("#sun_start_time").val() == ''){
                            $('#sun_start_time').prop('required',true);
                            e.preventDefault();
                        }

                        if($("#sun_end_time").val() == ''){
                            $('#sun_end_time').prop('required',true);
                            e.preventDefault();
                        }
                    }

                    if($("#monday").is(':checked')){
                       if($("#mon_start_time").val() == ''){
                           $('#mon_start_time').prop('required',true);
                           e.preventDefault();
                       }

                       if($("#mon_end_time").val() == ''){
                           $('#mon_end_time').prop('required',true);
                           e.preventDefault();
                       }
                    }

                    if($("#tuesday").is(':checked')){
                       if($("#tue_start_time").val() == ''){
                            $('#tue_start_time').prop('required',true);
                            e.preventDefault();
                       }

                       if($("#tue_end_time").val() == ''){
                            $('#tue_end_time').prop('required',true);
                            e.preventDefault();
                       }
                    }

                    if($("#wednesday").is(':checked')){
                       if($("#wed_start_time").val() == ''){
                           $('#wed_start_time').prop('required',true);
                           e.preventDefault();
                       }

                      if($("#wed_end_time").val() == ''){
                           $('#wed_end_time').prop('required',true);
                           e.preventDefault();
                      }
                    }

                    if($("#thursday").is(':checked')){
                       if($("#thu_start_time").val() == ''){
                          $('#thu_start_time').prop('required',true);
                          e.preventDefault();
                       }

                       if($("#thu_end_time").val() == ''){
                          $('#thu_end_time').prop('required',true);
                          e.preventDefault();
                       }
                    }

                    if($("#friday").is(':checked')){
                       if($("#fri_start_time").val() == ''){
                         $('#fri_start_time').prop('required',true);
                         e.preventDefault();
                       }

                       if($("#fri_end_time").val() == ''){
                         $('#fri_end_time').prop('required',true);
                         e.preventDefault();
                       }
                    }

                    if($("#saturday").is(':checked')){
                      if($("#sat_start_time").val() == ''){
                           $('#sat_start_time').prop('required',true);
                           e.preventDefault();
                      }

                      if($("#sat_end_time").val() == ''){
                           $('#sat_end_time').prop('required',true);
                           e.preventDefault();
                      }
                    }
               }else{
                   alert('Please Select at least one day!')
                   e.preventDefault();
               }

            });
        } );
    </script>