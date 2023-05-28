<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> TEST </title>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

  </head>

  <body>
    <input type="text" id="input">
    <input type="text" id="output" placeholder="output">
    <button onclick="ambil()">ambil</button>

    <script>

    function ambil() {
      let input = document.getElementById('input').value;
let output = document.getElementById('output').value;

fetch('http://127.0.0.1:8000/api/cementing')
  .then(response => response.json())
  .then(data => {
    const filterData = data.filter(obj => obj.jenisCord === "212");
    const latestData = filterData[filterData.length - 1];
    const lotCementing = latestData.lotCementing;

    output = lotCementing;

console.log(filterData);
  })
  .catch(error => {
    console.error('Error:', error);
  });
}
    </script>


  </body>
</html>