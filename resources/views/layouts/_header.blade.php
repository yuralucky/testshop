<nav class="navbar">
    <a href="#" class="danger">Здравствуйте гость</a>
    <a class="navbar-brand mx-auto " href="#">IT
        <img src="{{asset('image/img1.png')}}" class="mb-2" alt="book" width="24" height="24"> books</a>
    <a href="#" class="margin-log">Войти</a>
    <a href="#" class="navbar-brand">Basket <span class="badge badge-dark">0</span></a>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link " href="#">Акции и предложения <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Новости</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Каталог
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Web</a>
                    <a class="dropdown-item" href="#">SQL</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Data science</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Условия доставки</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Введите название книги или автора"
                   aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Поиск книги</button>
        </form>

    </div>
</nav>

<!--End Navigation-->