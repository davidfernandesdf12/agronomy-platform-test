<nav class="navbar">
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
</nav>
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
            <div class="background">
                <img src="{{asset('/img/background-login.jpg')}}">
            </div>
            <a href="#"><img class="circle" src="{{asset('/img/user.png')}}"></a>
            <a href="#user"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>
    <li class="li-test" data-uri="/"><a href="/">Home</a></li>
    <li data-uri="videos"><a href="{{route('admin.videos')}}">Vídeos</a></li>
</ul>
