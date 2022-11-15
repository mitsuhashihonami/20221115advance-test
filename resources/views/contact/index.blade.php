<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
</head>

<body>

  @extends('layouts.default')
  @section('content')
  <div class="content">
    <div class="center">
    <h1 class="title">お問い合わせ</h1>
    <form method="POST" action="{{ route('contact.store') }}">
      @csrf
      <table class="contact__table">
        <tr class="contact__tr">
          <th class="contact__item">名前<span class="red">※</span></th>
          <td class="contact__body">
            <input type="text" name="fullname" value="{{ old('fullname') }}">
          </td>
        </tr>
        @error('fullname')
        <tr>
          <th></th>
          <td>{{$message}}</td>
        </tr>
        @enderror

        <tr>
          <th class="contact__item">メールアドレス<span class="red">※</span></th>
          <td class="contact__body">
            <input type="text" name="email" value="{{ old('email') }}">
          </td>
        </tr>
        <tr>
          <th class="contact__item">郵便番号<span class="red">※</span></th>
          <td class="contact__body">
            〒<input type="text" name="postcode" minlength="8" maxlength="8" autocomplete="postal-code" value="{{ old('postcode') }}">
          </td>
        </tr>
        <tr>
          <th class="contact__item">住所<span class="red">※</span></th>
          <td class="contact__body">
            <input type="text" name="address" value="{{ old('address') }}">
          </td>
        </tr>
        <tr>
          <th class="contact__item">建物名</th>
          <td class="contact__body">
            <input type="text" name="building_name" value="{{ old('building_name') }}">
          </td>
        </tr>
        <tr>
          <th class="contact__item">ご意見<span class="red">※</span></th>
          <td class="contact__body">
            <textarea name="opinion" id="" cols="40" rows="4"></textarea>
          </td>
        </tr>

      </table>

      <button type="submit" class="btn">確認</button>
    </div>
  </div>
  </form>

</body>

</html>