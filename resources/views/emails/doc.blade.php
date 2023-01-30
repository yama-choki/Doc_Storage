<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
  <style>
    body {
      background-color: #f0f0f0;
    }

    .mail{
      margin: 0 auto;
      width: 95%;
      max-width: 600px;
    }

    .content {
      background: white;
      border-radius: 0.375rem;
      margin-top: 16px;
      padding: 12px;
      filter: drop-shadow(0 1px 2px rgb(0 0 0 / 0.1)) drop-shadow(0 1px 1px rgb(0 0 0 / 0.06));
      font: bold;
    }

    .doc{
      display: flex;
      justify-content:center;
    } 

    .text{
      white-space: pre-line;
      overflow-wrap: break-word;
    }

    .btn{
      border-radius: 4px;
      padding: 16px;
      color: #fff;
      display: inline-block;
      overflow: hidden;
      background-color: #2d3748;
      width: 128px;
      margin: 4px auto;
    }

    .url{
      display: block;
      white-space: pre-line;
      overflow-wrap: break-word;
    }
  </style>
<body>
  <div class="mail">
    <h2 class="">
      {{ $user->name }}から以下の資料を受け取りました。
    </h2>
    <div class="content">
      <h3>{{ $title }}</h3>
      <div class="text">{{ $text }}</div>
      <div class="doc">
          <a href="{{ $url }}" class="" target="_blank">
              <button class="btn">
                  Document
              </button>
          </a>
      </div>
      <p>"Documentボタン"をクリックできない場合は、以下のURLをコピーしてブラウザに貼り付けてください。</p>
      <a href="{{ $url }}" target="_blank" class="url">{{ $url }}</a>
    </div>
  </div>
</body>
</html>