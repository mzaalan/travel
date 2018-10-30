<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('icon/roundbooking.css')}}">
    <link rel="stylesheet" href="{{asset('owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages.css')}}">
    @stack('styles')

</head>
<body>

    @include('shared.header')

    @yield('content')

    @include('shared.contact')

    @include('shared.footer')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{asset('owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b86393ef31d0f771d843d11/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    Tawk_API.onOfflineSubmit = function(data){
      let questions = data.questions;
      message = "";
      for(i=0;i<questions.length;i++){
        if(questions[i]["label"] && questions[i]["label"] == 'Message'){
          message = questions[i]["answer"];
          break;
        }
      }
      fdata = {'text' : message, 'email' : data.email, 'name' : data.name}
      console.log(fdata);
      $.ajax({
				url: '{{route("admin.contact")}}',
				type: 'POST',
				headers: {
					'X-CSRF-TOKEN': '{{csrf_token()}}'
				},
				data: fdata
			}).done( function(response) {


			}).fail( function(response) {

			});
    };
    </script>
    <!--End of Tawk.to Script-->
    @stack('scripts')
</body>
</html>
