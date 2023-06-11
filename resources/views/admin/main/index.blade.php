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
                <li>
                    <a href="">-></a>
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
                <i id="filterIcon" class='bx bx-filter' ></i>
            </div>
            <div style="overflow-y: scroll; max-height: 370px;">
            <table>
                <thead>
                <tr>
                    <th>Імя та прізвище</th>
                    <th>Дата</th>
                    <th>Статус</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sendingJobs as $sendingJob)
                <tr>
                    <td>
                        <img src="{{ asset('img/avatar.jpg') }}">

                        <p>{{ $sendingJob->name . ' ' . $sendingJob->surname }}</p>
                    </td>
                    <td>{{ $sendingJob->created_at->format('Y-m-d H:i:s') }}</td>
                    <td><span class="status completed">Отримано заявку</span></td>

                </tr>

                @endforeach
                </tbody>

            </table>
                </div>
        </div>

    </div>
    <div style="margin-bottom: 200px;"></div>
</main>

    <script>
        var filterIcon = document.getElementById('filterIcon');
        var tableBody = document.querySelector('.order table tbody');
        var rows = Array.from(tableBody.rows);
        var ascending = true; // По умолчанию сортировка по возрастанию

        filterIcon.addEventListener('click', function() {
            rows.sort(function(a, b) {
                var dateA = new Date(a.cells[1].innerText);
                var dateB = new Date(b.cells[1].innerText);

                if (ascending) {
                    return dateA - dateB; // Сортировка по возрастанию
                } else {
                    return dateB - dateA; // Сортировка по убыванию
                }
            });

            while (tableBody.firstChild) {
                tableBody.removeChild(tableBody.firstChild);
            }

            rows.forEach(function(row) {
                tableBody.appendChild(row);
            });

            ascending = !ascending; // Изменение порядка сортировки при каждом клике
        });
    </script>
    <!-- MAIN -->
@endsection
