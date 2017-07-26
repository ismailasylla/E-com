// validation script...................................


            $("form").submit(function(e){
    
                    var error = "";

                    if($("#email").val() == ""){

                        error += "The E-mail field is required<br>";


                    }


                    if($("#password").val() == ""){

                        error += "The subject field is required<br>";


                    }

                    // if($("#message").val() == ""){

                    //     error += "The message field is required<br>";


                    // }


                   if(error !=""){ 
                   $("#error").html('<div class="alert alert-danger" role="alert"><strong> There where arror(s) in the form: </strong> <br> ' + error + '</div>');


                            return false;

                 } else{

                            return true;
                          


                 }
    });

// End of the validation script...............................


