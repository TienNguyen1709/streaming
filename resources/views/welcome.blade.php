<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/b525f34fd2.js" crossorigin="anonymous"></script>
        <title>Đồ Án 1 - Thiết kế website</title>
        <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    </head>
    <body>
        <div class="container">

 <!----------------------------------- Header ------------------------------------------------------->           
            <header>
                <div class="logo">
                    <img src="{{asset('assets/frontend/img/logo.jpg')}}" width="30%">
                </div>
            <nav>
                <div class="menu">              
                <ul>
                    <li><a href="{{ URL::to('/') }}">Trang chủ</a></li>
                    <li class="socials">
                        <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
                        <a href="https://www.instagram.com/" target="_blank" class="fab fa-instagram"></a>
                        <a href="https://www.youtube.com/" target="_blank" class="fab fa-youtube"></a>
                    </li>
                </ul>
                </div>
            </nav>
            </header>

<!------------------------------------ Body content -------------------------------------------------->
            @yield('content')

<!------------------------------------------ Footer ------------------------------------------------->
            <footer>
               <p>2023 - Bản quyền thuộc về Nhóm đồ án 1 - ĐTVT - K67 - ĐHBKHN <br>
                Phạm Quang Tiến - MSSV: 20221121P <br>
                Nguyễn Minh Tiến - MSSV: 20221120P
               </p> 
            </footer>
        </div>
        <script src="{{asset('assets/frontend/js/script.js')}}"></script>
    </body>
</html>