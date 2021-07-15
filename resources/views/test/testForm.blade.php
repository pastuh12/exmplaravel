
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        @csrf
        <label for="name">Имя</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <button type="submit" id="form-submit">отправить</button>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
{{--<script>$(document).on('click', '#form-submit', function (e){--}}
{{--        e.preventDefault();--}}
{{--        let form = e.currentTarget;--}}
{{--        console.log(e);--}}
{{--        axios({--}}
{{--            method: 'post',--}}
{{--            url: '/ajax',--}}
{{--            data: {--}}
{{--                name: form.form[2].value,--}}
{{--                lastName: form.form[1].value--}}
{{--            }--}}
{{--        });--}}

{{--    } )</script>--}}
<script>
    $(document).on('click', '#form-submit', function (e){
      e.preventDefault();
        axios.get('/ajax')
            .then(function (response) {

            });
    });
</script>
</html>
