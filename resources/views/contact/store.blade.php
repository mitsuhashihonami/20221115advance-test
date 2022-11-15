<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  @section('content')
  <h1 class="title">お問い合わせ</h1>
  <form method="POST" action="{{ route('contact.thanks') }}">
    @csrf
    <table class="contact__table">
      <tr>
        <th>名前</th>
        <td>{{ $inputs['fullname'] }}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{ $inputs['email'] }}</td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>{{ $inputs['postcode'] }}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{ $inputs['address'] }}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{ $inputs['building_name'] }}</td>
      </tr>
      <tr>
        <th>内容</th>
        <td>{{ $inputs['opinion'] }}</td>
      </tr>
    </table>
    <button type="submit" class="btn">送信</button>
  </form>
</body>

</html>