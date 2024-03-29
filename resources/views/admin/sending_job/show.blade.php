@extends('admin.layouts.main')
<link rel="stylesheet" href="{{ asset('css/admin/info_post.css') }}">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
@section('content')
    <!-- MAIN -->
<main>
    <style>

    </style>
    <div class="head-title">
        <div class="left">
            <h1>Інформація про заявку</h1>
            <ul class="breadcrumb">
                <li>
                    <a class="active" href="{{ route('admin.sendingJob.index') }}">Отримані заявки</a>
                </li>
                <li>
                    <a href="#">-></a>
                </li>
                <li>
                    <a href="">Інформація про заявку</a>
                </li>
            </ul>
        </div>
    </div>


    <section>
        <div class="form-box">
            <div action="">

                <h2>Інформація про заявку</h2>
                <div class="formWrapper">

                    <div class="leftSide">
                        <img src="{{ asset('img/avatar.jpg') }}" class="imageStyle">

                    </div>

                    <div class="rightSide">
                        <div class="inputbox">
                            <input type="text" value="{{ $sendingJob->name . ' ' . $sendingJob->surname }}" class="placeholder-color" readonly>
                        </div>
                        <div class="inputbox">
                            <input type="text" value="{{ $sendingJob->title }}" class="placeholder-color" readonly>
                        </div>
                        <div class="inputbox">
                            <input type="text" value="{{ $sendingJob->number }}" class="placeholder-color" readonly>
                        </div>
                        <a href="{{ route('sending-jobs.download', ['id' => $sendingJob->id]) }}" class="button">Завантажити резюме</a>
                        <form id="deleteForm{{ $sendingJob->id }}" action="{{ route('admin.sendingJob.delete', $sendingJob->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>

                        <button type="button" style="margin-top: 20px;" class="button" onclick="confirmDelete({{ $sendingJob->id }})">
                            Видалити заявку
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
    <script>
        function confirmDelete(sendingJobsId) {
            Swal.fire({
                title: 'Ви впевнені?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Видалити',
                cancelButtonText: 'Відмінити',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Якщо користувач підтверджує видалення
                    // Надсилаємо запит на видалення форми
                    document.getElementById('deleteForm' + sendingJobsId).submit();
                }
            });
        }
    </script>
    <!-- MAIN -->
@endsection
