@foreach($children as $nama_jabatan => $child)
    <li>
        <span>{{ is_array($child) ? $nama_jabatan : $child }}</span>
        @if(is_array($child) && count($child) > 0)
            <ul>
                @include('admin.laporan.detail1peta_child', ['children' => $child])
            </ul>
        @endif
    </li>
@endforeach
