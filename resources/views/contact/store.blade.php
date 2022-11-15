<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  @extends('layouts.default')
  @section('content')
  <div class="content">
    <div class="center">
      <h1 class="title">お問い合わせ</h1>
      <form method="POST" action="{{ route('contact.thanks') }}">
        @csrf
        <table class="contact__table">
          <tr class="contact__tr">
            <th class="contact__item">名前</th>
            <td class="contact__body">{{ $inputs['fullname'] }}</td>
          </tr>
          <tr>
            <th class="contact__item">メールアドレス</th>
            <td class="contact__body">{{ $inputs['email'] }}</td>
          </tr>
          <tr class="contact__tr">
            <th class="contact__item">郵便番号</th>
            <td class="contact__body">{{ $inputs['postcode'] }}</td>
          </tr>
          <tr class="contact__tr">
            <th class="contact__item">住所</th>
            <td class="contact__body">{{ $inputs['address'] }}</td>
          </tr>
          <tr class="contact__tr">
            <th class="contact__item">建物名</th>
            <td class="contact__body">{{ $inputs['building_name'] }}</td>
          </tr>
          <tr class="contact__tr">
            <th class="contact__item">内容</th>
            <td class="contact__body">{{ $inputs['opinion'] }}</td>
          </tr>
        </table>
        <button type="submit" class="btn">送信</button>
      </form>
    </div>
  </div>
</body>

</html>