<style>
    .tree,
    .tree ul,
    .tree li {
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
    }

    .tree {
        text-align: center;
    }

    .tree,
    .tree ul {
        display: table;
    }

    .tree ul {
        width: 100%;
    }

    .tree li {
        display: table-cell;
        padding: 0.5em 0;
        vertical-align: top;
    }

    .tree li:before {
        outline: solid 1px #666;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
    }

    .tree li:first-child:before {
        left: 50%;
    }

    .tree li:last-child:before {
        right: 50%;
    }

    .tree code,
    .tree span {
        border: solid 0.1em #666;
        border-radius: 0.2em;
        display: inline-block;
        margin: 0 0.2em 0.5em;
        padding: 0.2em 0.5em;
        position: relative;
    }

    .tree ul:before,
    .tree code:before,
    .tree span:before {
        outline: solid 1px #666;
        content: "";
        height: 0.5em;
        left: 50%;
        position: absolute;
    }

    .tree ul:before {
        top: -0.5em;
    }

    .tree code:before,
    .tree span:before {
        top: -0.55em;
    }

    .tree>li {
        margin-top: 0;
    }

    .tree>li:before,
    .tree>li:after,
    .tree>li>code:before,
    .tree>li>span:before {
        outline: none;
    }
</style>

<ul class="tree mx-5">
    @foreach($jabatan_hierarchy as $nama_jabatan => $data)
    <li>
        <span>{{ $nama_jabatan }}</span>
        <div class="extra-data">
            <span>{{ $data['pegawai'] }}</span>
            <span>{{ $data['tp_total'] }}</span>
            <span>{{ $data['peg_total_diff'] }}</span>
        </div>
        @if(count($data['tree']) > 0)
        <ul>
            @include('admin.laporan.detail1peta_child', ['children' => $data['tree']])
        </ul>
        @endif
    </li>
    @endforeach
</ul>