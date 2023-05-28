<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td colspan="7" align="center">
                    <h4>Peta Jabatan</h4>
                    
                </td>
               
            </tr>
        </thead>
    </table>
    
        <ul class="tree">
          @foreach($jabatan_hierarchy as $nama_jabatan => $children)
          <li>
            <span>{{ $nama_jabatan }}</span>
            @if(count($children) > 0)
            <ul>
              @include('admin.laporan.detail1peta_child', ['children' => $children])
            </ul>
            @endif
          </li>
          @endforeach
        </ul>
        
      
</body>

</html>