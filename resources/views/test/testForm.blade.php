
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/
          dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <title>TestsAjax</title>
</head>
<body>
    <form action="" id="getForm" method="get" style="border: brown dotted; margin-bottom: 20px " >
        @csrf
        <label for="name">Имя</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <button type="submit" id="form-submit">отправить</button>
    </form>

    <form action="" id="postForm" method="post" style="border: brown dotted; ">
        @csrf
        <label for="name">Имя</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <button type="submit" id="form-submit">отправить</button>
    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    getForm = $('#getForm')[0];
    postForm = $('#postForm')[0];
    getForm.on('click', '#form-submit', function (e){
      e.preventDefault();
        axios.get("{{route('forAjax')}}")
            .then(function (response) {
                document.body.append(response);
            });
    });

    postForm.on('click', '#form-submit', function (e){
        e.preventDefault();
        axios.post("{{route('forAjax')}}")
            .then(function (response) {

            });
    });
</script>
</html>
