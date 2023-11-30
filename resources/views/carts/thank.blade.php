@extends('main')

@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center p-t-160 p-b-50">
    <div>
        <div class="mb-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
        </div>
        <div class="text-center">
            <h1 style="color: black;">Thank You !</h1>
            <p class="m-t-16 ">Thank you for choosing! We appreciate your recent purchase and are delighted <br> to have you as our valued customer.
                If you have any questions or need assistance, feel free to reach out. </p>
            <button class="btn btn-outline-success m-t-16"><a href="/">Back Home</a></button>
        </div>
    </div>
</div>
@endsection