@extends('layout.main')
@section('content')

    <div class="btn" style="max-width: 150px ; margin-left: 400px; margin-right: auto ">
        <button type="button" id="open-add-user" >Поздороваться</button>
    </div>
    <form action="" id="postForm" method="post" style="border: brown dotted; ">
        @csrf
        <label for="name">Имя</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <button type="submit" id="post-form-submit">отправить</button>
    </form>
@endsection

@section('script')
<script>
    modelButton = $('#open-add-user');
    postForm = $('#postForm');
    console.log("here1");
    modelButton.click(('click', function (e){
        e.preventDefault();
        console.log("here2");
        axios.get("{{route('forAjax')}}")
            .then(function (response){
                console.log(response);
                return  response.data;
            })
            .then(function (response) {
                document.body.insertAdjacentHTML('afterbegin', response);
            });
    }));
    postForm.submit((function (e){
        e.preventDefault();
        console.log("here3")
        let name = $('#name').val();
        let email = $('#email').val();
        let _token = $('#postForm [name="_token"]').val();
        axios.post("{{route('postAjax')}}", {
            name: name,
            email: email,
            _token: _token
        })
            .then(function (response) {
                console.log(response);
            })
    }));

</script>
@endsection

@php

@endphp
