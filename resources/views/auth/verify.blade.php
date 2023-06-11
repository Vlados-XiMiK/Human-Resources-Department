@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Підтвердження електронної адреси</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            На вашу електронну адресу надіслано нове посилання для підтвердження.
                        </div>
                    @endif

                        Перш ніж продовжити, перевірте свою електронну пошту на наявність посилання для підтвердження.
                        Якщо ви не отримали електронний лист
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">натисніть тут, щоб надіслати інший запит</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
