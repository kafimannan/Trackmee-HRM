<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" type="text/css" href="{{asset('/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/frontend/trackMee.css')}}"/>

<!--       <script defer src="https://use.fontawsome.com/release/v5.0.8/js/all.js"> </script>-->
        <style>
            body{
                background-image: url("{{ asset('/photos/Night-Sky-Wallpaper-in-HD-Resolution-wpc2007362.jpg') }}") ;
                background-repeat: no-repeat;
                background-attachment:fixed;
                color:white;
                font-family: serif;
            }
            li{

            }

        </style>
    </head>
    <body>
        <div >
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:  #009933;border-color:  #1f7a1f;border:transparent;">

                <div class="container-fluid " >
                    <div class="navbar-header">
                        <a class="navbar-brand" href="javascript::void(0)" style="color: white;font-family:serifs"><span class="glyphicon glyphicon-eye-open"></span> TrackMee</a>
                    </div>
                    <div>
                        <ul id="nav-link" class="nav navbar-nav" style="text-align: right; ">

                            <li id="home" class=" active"><a   href="{{route('index')}}"  style="color: white;font-family:serifs">Home</a></li>
                            <li  id="about" onclick="changer("about")"><a  href="{{route('about')}}"  style="color: white;font-family:serifs">About</a></li>
                            <li id="contact" onclick="changer("contact")"><a  href="{{route('contact')}}"  style="color: white;font-family:serifs">Contact</a></li>
                        </ul>
                    </div>

                </div>



            </nav>
            @yield('content')
            <nav class="navbar navbar-inverse navbar-fixed-bottom" style="background-color:#009933 ;border-color:  #1f7a1f;border:transparent;">

                <div class="container-fluid " >


                    <div style="font-family: serif">
                        <br>

                        <h4><strong><p style="text-align: center;">Developed by Drubo, Minhaz, Kafi, Jahid</p></strong></h4>
                    </div>

                </div>



            </nav>
        </div>
        <script src="{{asset('/jQuery/jquery-3.3.1.js')}}"></script>
        <script src="{{asset('/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('/fontawesome-free-5.0.8/fontawesome-free-5.0.8/svg-with-js/js/fontawesome-all.js')}}"></script>ই


        <script type="text/javascript">
                                $(function(){
                                $('.nav a').filter(function(){return this.href == location.href}).parent().addClass('active').siblings().removeClass('active')
                                        $('.nav a').click(function(){
                                $(this).parent().addClass('active').siblings().removeClass('active')
                                })
                                })



        </script>
        <script>
//            $("#btnLogin").on('click',function(){
//                if($("#username").val()!=''&& $("#password").val()!='')
//                {
//                    $("#loginForm").submit();
//                }
//            });
        </script>
        <script>
                    $("#loginForm").on('submit', function(evt){//alert(2);
            evt.preventDefault();
            //Login();

            });
            // $("#btnLogin").submit({Login()});
            function Login(){
            $("#error").hide();
            if ($("#username").val() != '' && $("#password").val() != ''){

            var username = $("#username").val();
            //alert(username);
            var password = $("#password").val();
            // alert(password);
            $.ajaxSetup({
            headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
            });
            //alert("hello");
            $.ajax({
            type:'POST',
                    url:'/',
                    dataType:'json',
                    data:{
                    username:username,
                            password:password
                    },
                    success:function(response){
                    // alert("hello");
                    if (response.status == 'success')
                    {
                    window.location.href = response.url;
                    }
                    else{

                    $("#error").show();
                    $("#errMsg").html('<span class="glyphicon glyphicon-warning-sign"></span> ' + response.err);
                    }
                    }
            });
            }
            }
        </script>
<!--        <script>
            $("#branch_users_id").select2();
            $("#branch_track_id").select2();
            function clientBranch(id) {
            var users_track_id = id;
            if (users_track_id) {
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
            type: 'POST',
                    url: "/admin/getBranch/",
                    dataType: 'json',
                    data: {
                    users_track_id: users_track_id
                    },
                    success: function (response) {
                    var obj = response;
                    if (obj.output === "success") {
                    var html = '<select class="form-control" id="branch_track_id" name="branch_track_id">';
                    $.each(obj.branchList, function (key, Event) {
                    html += '<option value="' + Event.branch_track_id + '">' + Event.branch_name + '</option>';
                    });
                    html += '</select>';
                    $("#branch_track_id").html("error");
                    } else {
                    alert(obj.msg);
                    }
                    }
            });
            } else {
            alert('Please Choose Client First');
            }
            }
        </script>-->
    </body>
</html>