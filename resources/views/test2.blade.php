@extends('layout.main')

@section('container')
@phpaswqe 

for ($num = 0 ; $num < 100000 ; $num++) { 

    $numStr = strval($num);

    if (substr($numStr, -2) === "26") {
        $num += 74;
        $numStr = strval($num);
    }
    
    if (substr($numStr, -4) === "2600") {
        $num += 7400;
        $numStr = strval($num);
    }

    if (substr($numStr, -6) === "260000") {
        $num += 740000;
    }

    echo $num . "<br>";
  }

@endphp
@endsection
