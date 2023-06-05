<ul class="side-menu top">
    <li >
        <a href="{{ route('admin.main.index') }}">
            <i class='bx bxs-dashboard' ></i>
            <span class="text">Основна панель</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.Vacancy.index') }}">
            <i class='bx bxs-shopping-bag-alt' ></i>
            <span class="text">Вакансії</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.About_us.index') }}">
            <i class='bx bxs-doughnut-chart' ></i>
            <span class="text">Розділ "Про нас"</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.user.index') }}">
            <i class='bx bxs-group' ></i>
            <span class="text">Користувачі</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.Contact.index') }}">
            <i class='bx bxs-message-dots' ></i>
            <span class="text">Вхідні повідомлення</span>
        </a>
    </li>
</ul>
<ul class="side-menu">
    <li>
        <a href="#">
            <i class='bx bxs-cog' ></i>
            <span class="text">Налаштування</span>
        </a>
    </li>
    <li>

        <form href="#" class="logout" action="{{ route('logout') }}" style="margin-top: 400px" method="POST">
            @csrf
            <button class="button_logout" type="submit" value="Вийти">
                <i class='bx bxs-log-out-circle' style="vertical-align: middle; margin-right: 2px"></i> Вийти
            </button>
        </form>
    </li>
</ul>
