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
						<h3>{{ $jobsCount }}</h3>
						<p>Отримано заявок</p>
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

            </div>
            <table>
                <thead>
                <tr>
                    <th>Імя та прізвище</th>
                    <th>Дата</th>
                    <th>Статус</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <img src="{{ asset('img/avatar.jpg') }}">
                        @foreach($sendingJobs as $sendingJob)
                        <p>{{ $sendingJob->name . ' ' . $sendingJob->surname }}</p>
                    </td>
                    <td>{{ $sendingJob->created_at }}</td>
                    <td><span class="status completed">Отримано заявку</span></td>
                    @endforeach
                </tr>


                </tbody>

            </table>
        </div>

    </div>
    <div style="margin-bottom: 200px;"></div>
</main>
    <!-- MAIN -->
@endsection
