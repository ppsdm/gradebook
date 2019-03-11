<html>
  <head>
    <style>
      body {
        font-family: 'Times New Roman', Times, serif
        text-align: justify;
      }
      .uraian {
        /* padding: 20px; */
      }

      .uraian p {
        font-size: 14px;
        text-align: justify;
        font-family: "Times New Roman", Times, serif;
      }
    </style>
  </head>
  <body>
    <div class="uraian">
      @foreach ($uraian as $item)
      <p>{{ $item }}</p>
      @endforeach
    </div>
  </body>
</html>
