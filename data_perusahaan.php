<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh DataTables</title>

  <script src="https://releases.jquery.com/"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/" type="text/css">
  <script src="https://cdn.datatables.net/" type="text/javascript"></script>

</head>
<body>

  <h1>Contoh DataTables</h1>

  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Kota</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Budi</td>
        <td>budi@example.com</td>
        <td>Surabaya</td>
      </tr>
      <tr>
        <td>Ani</td>
        <td>ani@example.com</td>
        <td>Jakarta</td>
      </tr>
      <tr>
        <td>Cipto</td>
        <td>cipto@example.com</td>
        <td>Bandung</td>
      </tr>
    </tbody>
  </table>

  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

</body>
</html>