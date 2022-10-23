@if($_SERVER["REQUEST_URI"] === "/")
<div class="container pol-cont">
    <img class="header-polygon" src="{{ asset("assets/img/header-polygon.png") }}">
</div>
@endif
<header id="header">
    <div class="container header">
        <div class="test">
            <div class="header__logo">
                <img class="logo" src="{{ asset("assets/img/logo.png") }}">
            </div>
            <nav class="nav" role="navigation">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ route("index") }}#aboutAs" class="nav__link">О нас</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route("index") }}#services" class="nav__link">Услуги</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route("news") }}#services" class="nav__link">Статьи</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route("index") }}#questions" class="nav__link">F&Q</a>
                    </li>
                    <li class="nav__item">
                        <a href="{{ route("index") }}#form" class="nav__link">Контакты</a>
                    </li>
                </ul>
            </nav>
            <div class="header__contacts">
                <a href="tel:+7 (495) 123 38-93" class="btn btn-primary header-contact-btn">+7 (495) 123 38-93</a>
            </div>
        </div>

        <div class="burger">
                    <span>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect class="burger-span burger-span-top" width="40" height="5" rx="2.5" fill="#001F43"/>
                            <rect class="burger-span burger-span-center" y="10" width="40" height="5" rx="2.5" fill="#001F43"/>
                            <rect class="burger-span burger-span-bottom" y="20" width="40" height="5" rx="2.5" fill="#001F43"/>
                        </svg>
                    </span>
        </div>
    </div>
</header>
