
<button class="IB-nav-toggle">
	<div class="IB-icon-menu" >
		<span class="IB-line IB-line-1"></span>
		<span class="IB-line IB-line-2"></span>
		<span class="IB-line IB-line-3"></span>
	</div>
	<span class="text-white text-center" style="font-size: .8rem;">به فروشگاه ایران باگت خوش آمدید</span>
</button>

<script>
	let nav = document.getElementsByClassName('IB-nav-toggle')[0];
	window.onscroll = function(){
		if(document.documentElement.scrollTop >= 49 || document.body.scrollTop >= 49)
		{
			nav.style.position = "fixed";
			nav.style.opacity = "0.8";
		}
		else
		{
			nav.style.position = "relative";
			nav.style.opacity = "1";
		}
	}
</script>

<header>

	<div class="IB-HeaderTop" style="  background: linear-gradient(to right, #f2994a, #f2c94c);">
	    <div class="IB-container">
	        <div class="IB-BoxSocial container-fluid">
	            <div class="IB-Social">

	              <div class="IB-Item IB-fade">
	                    <a href="{{($cyberspace[1]['url']) ?? '#'}}">
	                        <img class="IB-ItemImage" src="{{ asset('img/ss2.png') }}" alt="Instagram">
	                    </a>
	              </div>

	              <div class="IB-Item IB-fade">
					  <a href="{{$cyberspace[0]['url'] ?? '#'}}">
	                        <img class="IB-ItemImage" src="{{ asset('img/ss3.png') }}" alt="Telegram">
	                    </a>
	              </div>

	            </div>

				<div class="text-logo d-lg-flex mt-3 text-bold justify-content-between flex-lg-row" style="font-size: 1.5rem;">
					<span class="ml-lg-2 m-0 text-light" id="sefaresh">به فروشگاه ایران باگت خوش آمدید</span>

					<a class="logo2 mx-auto">
						<img class="img-fluid col-10" src="{{ asset('img/logoiran_s.png') }}">
					</a>

					<div class="ib-social-2 my-2" style="position: absolute;top: 10px;left: 10px;">
						<a href="#">
							<img class="IB-ItemImage" src="{{ asset('img/ss2.png') }}" alt="Instagram">
						</a>
						<a href="#">
							<img class="IB-ItemImage" src="{{ asset('img/ss3.png') }}" alt="Telegram">
						</a>
					</div>

					<div class="row">

						<div class="position-relative basket-top">
							<span class="position-absolute badge badge-success" style="top: 30%;right: 15px;font-size: 0.8rem">@php echo session('count'); @endphp</span>
							<a href="{{ url('basket') }}" class="mr-5"><img src="{{ asset('img/shopping-bag.png') }}" class="img-fluid" style="height: 35px;"></a>
						</div>

						<span id="search">
							<form class="d-none d-lg-flex" method="get" action="{{route('search')}}">
                                @csrf
							  <div class="input-group mr-lg-2 m-0">
								<div class="input-group-prepend">
									  <input type="submit" class="btn btn-secondary IB-input" value="جستجو"></input>
								</div>
								<input type="text" name="keyword" class="text-white text-left form-control IB-input bg-dark">
							  </div>

							</form>
						</span>
					</div>
				</div>

			</div>


			<div class="IB-Row IB-HeaderMenuBox">
				<div class="IB-navDiv">
					<div class="IB-navFull">
						<div class="IB-container IB-LogoFixed" style="display: none;">
						</div>
						<ul id="IB-nav" style="display: inline-table;">

							<li class="IB-menu-item"><a class="IB-menu-link" href="{{ url('') }}">صـفحـه نخست</a></li>
							<li class="IB-menu-item">

									<div class="dropdown">
										<a onclick="myFunction()" class="dropbtna">همکاری با ما</a>
									</div>

							</li>

							<div id="myDropdown" class="dropdown-content">
								<a class="IB-menu-link" href="{{ url('collaborate-with-game-developers') }}">همکاری با بازیسازان</a>
								<a class="IB-menu-link" href="{{ url('make-game-for-us') }}">برا ی ما بازی بسازید</a>
                                <a class="IB-menu-link" href="{{ url('collaborate-with-fastFood-maker') }}">همکاری با فست فودی ها</a>
                            </div>

							<li class="IB-menu-item"><a class="IB-menu-link" href="{{ url('games-page') }}"> بازی ها</a></li>
							<li class="IB-menu-item"><a class="IB-menu-link" href="{{ url('how-to-order') }}">نحوه سفارش</a></li>
							<li class="IB-menu-item"><a class="IB-menu-link" href="{{ url('contact-us') }}">ارتباط با ما</a></li>
                            <li class="IB-menu-item"><a class="IB-menu-link" href="{{ url('benefits') }}">مزایای عضویت</a></li>

                            @if(auth()->check())
                                @if(auth()->user()->hasRole('any'))
                                    <li class="IB-menu-item text-bold text-info"><a class="IB-menu-link" href="{{ route('admin.home') }}">مدیریت</a></li>
                                @else
                                    <li class="IB-menu-item text-bold text-info"><a class="IB-menu-link" href="{{ route('user.dashboard') }}">مدیریت</a></li>
                                @endif
                            @endif


						</ul>

	                </div>

	            </div>

				<div id="nav-login">
					@if(!auth()->check())
						<a href="{{ url('login') }}">ورود</a>
						<a href="{{ url('register') }}">ثبت نام</a>
					@else
						<a href="{{ url('logout') }}">خروج</a>
					@endif
				</div>

	            <div class="IB-wrapper IB-wrapper-flush">
	                <div class="IB-nav-container">
	                    <ul class="IB-nav-menu IB-menu">

							<li class="IB-menu-item"><a class="IB-menu-link" href="/">صـفحـه نخست</a></li>

							<li class="IB-menu-item">
								<a class="IB-menu-link" onclick="myFunction2()">همکاری با ما</a>
								<div class="p-2" id="dp" style="display: none;">
									<a class="d-block p-3 hover2" href="">همکاری با بازیسازان</a>
									<a class="d-block p-3 hover2" href="">برا ی ما بازی بسازید</a>
									<a class="d-block p-3 hover2" href="">مزایای عضویت</a>
								</div>
							</li>

							<li class="IB-menu-item"><a class="IB-menu-link" href="#">ارتباط با ما</a></li>
							<li class="IB-menu-item"><a class="IB-menu-link" href="#">مزایای عضویت</a></li>
							@if(auth()->check())
								<li class="IB-menu-item"><a class="IB-menu-link" href="{{ url('edit') }}">ویرایش اطلاعات</a></li>
								<li class="IB-menu-item"><a class="IB-menu-link" href="{{ url('status') }}">سفارشات</a></li>
                                @if(auth()->user()->hasRole('any'))
                                    <li class="IB-menu-item bg-info"><a class="IB-menu-link" href="{{ url('status') }}">سفارشات</a></li>
                                @endif
                            @endif

                            <form class="d-none d-lg-flex" method="get" action="{{route('search')}}">
                                @csrf
                                <div class="input-group mr-lg-2 m-0">
                                    <div class="input-group-prepend">
                                        <input type="submit" class="btn btn-secondary IB-input" value="جستجو"></input>
                                    </div>
                                    <input type="text" name="keyword" class="text-white text-left form-control IB-input bg-dark">
                                </div>

                            </form>

							</li>

	                    </ul>
	                </div>
	            </div>

				<a class="ml-2 logo">
					<img src="{{ asset('img/logoiran_s.png') }}" style="height:5rem;">
				</a>
				<div class="position-relative basket-bottom mt-3">
					<span class="position-absolute badge badge-success" style="top: 30%;right: 15px;font-size: 0.8rem">@php echo Cookie::get('count'); @endphp</span>
					<a href="{{ url('basket') }}" class="mr-5"><img src="{{ asset('img/shopping-bag.png') }}" class="img-fluid" style="height: 35px;"></a>
				</div>

	        </div>

	    </div>
	</div>
    @if(isset($game_event))
    <div class="countdown" style="background: linear-gradient(to right, #c31432, #240b36);
">
        <a class="timer" style="font-size: xx-large;font-family: 'vaziri'" href=" {{route("event")}} ">
        <div style="color: white; display: block; font-size: larger">
            <span>رويداد شروع شد! </span>
            <span>{{$game_event->name}} </span>
{{--            <span>{{$game_event->description}} </span>--}}


        </div>


            <span id="seconds"></span>
            <span id="minutes"></span>
            <span id="hours"></span>
            <span id="days"></span>
        </a>

    </div>
    @endif
</header>
<script>
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("showa");
	}

	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
		if (!event.target.matches('.dropbtna')) {
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('showa')) {
					openDropdown.classList.remove('showa');
				}
			}
		}
	}

	function myFunction2() {
		if (dp.style.display === "block") {
			dp.style.display = "none";
		} else {
			dp.style.display = "block";
		}
	}
</script>

@if(isset($game_event))

<script type="text/javascript">function countdown(dateEnd) {
        var timer, days, hours, minutes, seconds;

        dateEnd = new Date(dateEnd);
        dateEnd = dateEnd.getTime();

        if ( isNaN(dateEnd) ) {
            return;
        }

        timer = setInterval(calculate, 1000);

        function calculate() {
            var dateStart = new Date();
            var dateStart = new Date(dateStart.getUTCFullYear(),
                dateStart.getUTCMonth(),
                dateStart.getUTCDate(),
                dateStart.getUTCHours(),
                dateStart.getUTCMinutes(),
                dateStart.getUTCSeconds());
            var timeRemaining = parseInt((dateEnd - dateStart.getTime()) / 1000)

            if ( timeRemaining >= 0 ) {
                days    = parseInt(timeRemaining / 86400);
                timeRemaining   = (timeRemaining % 86400);
                hours   = parseInt(timeRemaining / 3600);
                timeRemaining   = (timeRemaining % 3600);
                minutes = parseInt(timeRemaining / 60);
                timeRemaining   = (timeRemaining % 60);
                seconds = parseInt(timeRemaining);

                document.getElementById("days").innerHTML    = parseInt(days, 10);
                document.getElementById("hours").innerHTML   = ("0" + hours).slice(-2);
                document.getElementById("minutes").innerHTML = ("0" + minutes).slice(-2);
                document.getElementById("seconds").innerHTML = ("0" + seconds).slice(-2);
            } else {
                return;
            }
        }

        function display(days, hours, minutes, seconds) {}
    }



    // countdown('01/19/2021 03:14:07 AM');
    countdown('{{$event->end_time}}');
</script>
@endif
