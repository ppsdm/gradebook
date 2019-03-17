<html>
<head>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      text-align: justify;
    }
    .uraian p {
      font-size: 16px;
      text-align: justify;
      font-family: "Times New Roman", Times, serif;
    }
  </style>
</head>

<body>
  <div class="uraian">
    <table>
      <tr>
        <td style="width:70px;">NAMA</td>
        <td> : </td>
        <td style="min-width:200px;">{{ strtoupper($profile['firstname'] . ' ' . $profile['lastname']) }}</td>
        <td>PERUSAHAAN</td>
        <td> : </td>
        <td></td>
      </tr>
      <tr>
        <td style="width:70px;">No. Tes </td>
        <td> : </td>
        <td style="min-width:200px;"></td>
        <td></td>
        <td></td>
      </tr>
    </table>
    @foreach ($uraian as $item)
    <p>{{ $item }}</p>
    @endforeach
  </div>
</body>

</html>