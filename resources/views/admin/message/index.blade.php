@extends('admin.layouts.main')

@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Вхідні повідомлення</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Вхідні повідомлення</a>
                </li>
                <li><i class='bx bx-chevron-right' ></i></li>
                <li>
                    <a class="active" href="{{ route('admin.main.index') }}">Головна</a>
                </li>
            </ul>
        </div>


    </div>
    <div class="row">
        <div class="col-20">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ім'я</th>
                        <th>Номер телефону</th>
                        <th>Електронна пошта</th>
                        <th>Тема</th>
                        <th colspan="2">Дія</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->number }}</td>
                            <td>{{ $contact->mail }}</td>
                            <td>{{ $contact->title }}</td>
                            <td><a href="{{ route('admin.Contact.show', $contact->id) }}"><i class="fa-solid fa-eye" style="color: #024bca;"></i></a></td>
                            <td>
                                <form id="deleteForm{{ $contact->id }}" action="{{ route('admin.Contact.delete', $contact->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" style="border-radius: 0; border-color: transparent" onclick="confirmDelete({{ $contact->id }})">
                                        <i class="fa-solid fa-trash-can" style="color: red"></i>
                                    </button>

                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div style="margin-bottom: 200px;"></div>

</main>

    <!-- Доданий JavaScript-код -->
    <script>
        function confirmDelete(contactId) {
            Swal.fire({
                title: 'Ви впевнені?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText:'Видалити',
                cancelButtonText:'Відмінити',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Якщо користувач підтверджує видалення
                    // Надсилаємо запит на видалення форми
                    document.getElementById('deleteForm' + contactId).submit();
                }
            });
        }
    </script>
@endsection
