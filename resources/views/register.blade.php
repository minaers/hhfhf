<!DOCTYPE html>
         <html>
               <head>
                    <title>Register</title>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
                    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
                   <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

                    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                </head>
                <body>

                <div class="main">
                    <h1 class="w3layouts_head" style="font-family: 'Quicksand', sans-serif;">Sun Sea & <b style="font-weight: bold">SOUND</b></h1>
                    <div class="w3layouts_main_grid">


                        <div class="form-group">

                            <form name="add_name" id="add_name" action="{{url('addmorepost')}}" method="post" >

                                @csrf
                                {{ csrf_field() }}
                                <div id="review" class="alert alert-danger print-error-msg" style="display:none">
                                    <ul></ul>
                                </div>


                                <div class="alert alert-success print-success-msg" style="display:none">
                                    <ul></ul>
                                </div>
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
                                <select class="select" name="optone[]" id="djSelect" size="1">
                                    <option value="" selected="selected">Select your DJ</option>
                                </select>
                                <br>
                                <br>
                                <select class="select" name="opttwo[]" id="categorySelect" size="1">
                                    <option value="" selected="selected">Select Ticket Type </option>
                                </select>
                                <br>
                                <br>
                                <select class="select" name="optthree[]" id="daySelect" size="1">
                                    <option value="" selected="selected">Select Pass</option>
                                </select>
                                    </span>
                                    <div class="input-group col-md-10">
                                        <input name="price[]"  id="price" class="form-control name_list" style="background:rgba(125,125,125,0.5);color: white;text-align: center;font-weight: bold;width: 100% !important;" placeholder="Select Previous Details" disabled></input>
                                        <span class="input-group-btn">
                                             <input class="btn btn-default" type="button" value="EGP"
                                                    style="background:rgba(125,125,125,0.5);color: white;font-weight: bold;"/>
                                        </span>


                                    </div>
                                    <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><h2 id="limit" class="form-control name_list" style="background:rgba(125,125,125,0.5);color: white;text-align: center;font-weight: bold">Select Previous To Show Reservation Conditions</h2></span></div>
                                </div>
                                <div class="table-responsive">
                                    <table  id="dynamic_field">
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>First Name: </label><input type="text" name="fname[]" placeholder="First Name" class="form-control name_list" required=""></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Last Name: </label><input type="text" name="lname[]" placeholder="Last Name" class="form-control name_list" required=""></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Phone Number: </label><input type="text" name="phone[]" placeholder="Phone Number" class="form-control name_list" required /></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Email Address: </label><input type="text" name="email[]" placeholder="Email Address" class="form-control name_list" required /></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Gender: </label><select  name="gender[]" style=" text-align: center;text-align-last: center;">
                                        <option style="background-color:white" DISABLED>Gender</option>
                                        <option value="Male" style="background-color: dimgrey">Male</option>
                                        <option value="Female" style="background-color: dimgrey">Female</option>
                                        </select></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Age: </label><select  name="age[]" style=" text-align: center;text-align-last: center;"><option style="background-color:white" DISABLED>Age</option>@for ($i = 18; $i <= 100; $i++)<option value="{{ $i }}" style="background-color: dimgrey">{{ $i }}</option>@endfor</select></span></div>
                                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Facebook Link: </label><input type="text" name="link[]" placeholder="Link" class="form-control name_list" required /></span></div>

                                        <div class="w3_agileits_main_grid w3l_main_grid">
                                         <span class="agileits_grid">
                                         <button type="button" name="add" id="add" class="form-control btn btn-success" style="font-size: large"  >More Guests</button>
                                         </span>
                                        </div>

                                    </table>
                                    <input type="button" name="submit" id="submit" class="form-control btn btn-info " value="Submit" style="font-size: large" />
                                </div>


                            </form>
                        </div>
                    </div>

                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        var postURL = "<?php echo url('addmore'); ?>";
                        var i=1;



                        $('#add').click(function(){
                            i++;
                            $('#dynamic_field').append('<div id="row'+i+'"class="dynamic-added" ' +
                                '<h2 style="color:limegreen">Sub Guest</h2>'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>First Name: </label><input type="text" name="fname[]" placeholder="First Name" class="form-control name_list" required=""></span></div>\n' +
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Last Name: </label><input type="text" name="lname[]" placeholder="Last Name" class="form-control name_list" required=""></span></div>\n' +
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Phone Number: </label><input type="text" name="phone[]" placeholder="Phone Number" class="form-control name_list" required /></span></div>\n'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Email Address: </label><input type="text" name="email[]" placeholder="Email Address" class="form-control name_list" required /></span></div>\n'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Gender: </label><select  name="gender[]" style=" text-align: center;text-align-last: center;"><option style="background-color:white" DISABLED>Gender</option><option value="Male" style="background-color: dimgrey">Male</option><option value="Female" style="background-color: dimgrey">Female</option></select></span></div>\n'+
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Age: </label><select  name="age[]" style=" text-align: center;text-align-last: center;"><option style="background-color:white" DISABLED>Age</option>@for ($i = 18; $i <= 100; $i++)<option value="{{ $i }}" style="background-color: dimgrey">{{ $i }}</option>@endfor</select></span></div>\n' +
                                '                        <div class="w3_agileits_main_grid w3l_main_grid"><span class="agileits_grid"><label>Facebook Link: </label><input type="text" name="link[]" placeholder="Link" class="form-control name_list" required /></span></div>\n'+
                                '                        <button type="button" name="remove" id="'+i+'" class="form-control btn btn-danger btn_remove">X</button>\n<br><br>' +
                                '</div>');
                        });


                        $(document).on('click', '.btn_remove', function(){
                            var button_id = $(this).attr("id");
                            $('#row'+button_id+'').remove();
                        });


                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            }
                        });


                        $('#submit').click(function(){

                            $("#price").prop('disabled', false);
                            $.ajax({
                                url:postURL,
                                method:"POST",
                                data:$('#add_name').serialize(),
                                type:'POST',
                                success:function(data)
                                {
                                    if(data.error){
                                        printErrorMsg(data.error);
                                        location.href = "#";
                                        location.href = "#review";
                                    }else{
                                        i=1;
                                        $('.dynamic-added').remove();
                                        $('#add_name')[0].reset();
                                        $(".print-success-msg").find("ul").html('');
                                        $(".print-success-msg").css('display','block');
                                        $(".print-error-msg").css('display','none');
                                        $(".print-success-msg").find("ul").append('<li>Registered Successfully.</li>');
                                        location.href = "#";
                                        location.href = "#review";
                                    }
                                }
                            });
                            $("#price").prop('disabled', true);
                        });


                        function printErrorMsg (msg) {
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $(".print-success-msg").css('display','none');
                            $.each( msg, function( key, value ) {
                                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                    });
                </script>

                <script>

                    var stateObject = {
                        "Black Coffee": {
                            "VIP": ["1 Day Pass"],
                            "Backstage": ["1 Day Pass"]
                        },
                        "Black Coffee + Rodge Standing": {
                            "VIP": ["2 Day Pass"],
                            "Backstage": ["2 Day Pass", "2 Full Day Pass"],
                        }
                    }
                    window.onload = function () {
                        var stateSel = document.getElementById("djSelect"),
                            countySel = document.getElementById("categorySelect"),
                            citySel = document.getElementById("daySelect");
                        for (var state in stateObject) {
                            stateSel.options[stateSel.options.length] = new Option(state, state);
                        }
                        stateSel.onchange = function () {

                            document.getElementById("price").value="Select Previous Details";
                            document.getElementById("limit").innerHTML="Select Previous To Show Reservation Conditions";
                            countySel.length = 1; // remove all options bar first
                            citySel.length = 1; // remove all options bar first
                            if (this.selectedIndex < 1) {
                                countySel.options[0].text = "Please select DJ first"
                                citySel.options[0].text = "Please select Ticket Type first"

                                return; // done
                            }
                            countySel.options[0].text = "Please select Ticket Type"
                            for (var county in stateObject[this.value]) {
                                countySel.options[countySel.options.length] = new Option(county, county);
                            }

                            if (countySel.options.length==2) {
                                countySel.selectedIndex=1;
                                countySel.onchange();

                            }

                        }
                        stateSel.onchange(); // reset in case page is reloaded
                        countySel.onchange = function () {

                            document.getElementById("price").value="Select Previous Details";
                            document.getElementById("limit").innerHTML="Select Previous To Show Reservation Conditions";
                            citySel.length = 1; // remove all options bar first
                            if (this.selectedIndex < 1) {
                                citySel.options[0].text = "Please select ticket type first"

                                return; // done
                            }
                            citySel.options[0].text = "Please select pass"

                            var cities = stateObject[stateSel.value][this.value];
                            for (var i = 0; i < cities.length; i++) {
                                citySel.options[citySel.options.length] = new Option(cities[i], cities[i]);
                            }

                            if (citySel.options.length==2) {
                                citySel.selectedIndex=1;
                                citySel.onchange();

                            }


                        }
                        citySel.onchange= function () {

                            var op1 = stateSel.options[stateSel.selectedIndex].text;
                            var op2 = countySel.options[countySel.selectedIndex].text;
                            var op3 = citySel.options[citySel   .selectedIndex].text;

                            if(op1=="Black Coffee" && op2=="VIP" && op3=="1 Day Pass"){
                                document.getElementById("price").value="2500";
                                document.getElementById("limit").innerHTML="(min 10 pax – max 20 pax)";
                                return;
                            }
                            if(op1=="Black Coffee" && op2=="Backstage" && op3=="1 Day Pass"){
                                document.getElementById("price").value="3500";
                                document.getElementById("limit").innerHTML="(min 15 pax – max 20 pax)";
                                return;
                            }
                            if(op1=="Black Coffee + Rodge Standing" && op2=="VIP" && op3=="2 Day Pass"){
                                document.getElementById("price").value="3000";
                                document.getElementById("limit").innerHTML="(min 10 pax – max 20 pax)";
                                return;
                            }
                            if(op1=="Black Coffee + Rodge Standing" && op2=="Backstage" && op3=="2 Day Pass"){
                                document.getElementById("price").value="4000";
                                document.getElementById("limit").innerHTML="(min 15 pax – max 20 pax)";
                                return;
                            }
                            if(op1=="Black Coffee + Rodge Standing" && op2=="Backstage" && op3=="2 Full Day Pass"){
                                document.getElementById("price").value="4500";
                                document.getElementById("limit").innerHTML="(min 15 pax – max 20 pax)";
                                return;
                            }
                            document.getElementById("price").value="Select Previous Details";
                            document.getElementById("limit").innerHTML="Select Previous To Show Reservation Conditions";


                        }
                    }

                </script>
                </body>
                </html>