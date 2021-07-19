
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>TestsAjax</title>
</head>
<body style="min-height: 500px">

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
</body>

<script>
    modelButton = $('#open-add-user');
    postForm = $('#postForm');

    modelButton.click(('click', function (e){
        e.preventDefault();
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
        let name = $('#name').val();
        let email = $('#email').val();
        axios.post("{{route('postAjax')}}", {
            name: name,
            email: email
        })
            .then(function (response) {
                console.log(response);
            })
    }));
</script>
</html>
