@extends('admin.layouts.main')
@section('content')
    <!-- MAIN -->
<main>
    <style>
        #content main{
            background-image:url({{ asset ('img/bg-footer.jpg')}});
        }
    </style>
    <div class="head-title">
        <div class="left">
            <h1>Основа панель</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="">Основна панель</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>

    </div>

    <ul class="box-info">
        <li>
            <i  class='bx bxs-calendar-check' ></i>
            <span class="text">
						<h3>1020</h3>
						<p>Прийнято заявок</p>
					</span>
        </li>
        <li>
            <i class='bx bxs-group' ></i>
            <span class="text">
						<h3>{{ $messageCount }}</h3>
						<p>Кількість вхідних повідомлень</p>
					</span>
        </li>

    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Отримані заявки</h3>
                <i class='bx bx-search' ></i>
                <i class='bx bx-filter' ></i>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Імя</th>
                    <th>Дата</th>
                    <th>Статус</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img src="{{ asset('img/people.png') }}">
                        <p>Максим Батрак</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status completed">Розглянуто</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/people.png') }}">
                        <p>Ілля Долбня</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status pending">Очікування</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/people.png') }}">
                        <p>Олександр Ткаченко</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status process">Обробка</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/people.png') }}">
                        <p>Рома Збутевич</p>
                    </td>
                    <td>01-10-2021</td>
                    <td><span class="status pending">Очікування</span></td>
                </tr>

                </tbody>

            </table>
        </div>

    </div>
    <div style="margin-bottom: 200px;"></div>
</main>
    <!-- MAIN -->
@endsection
