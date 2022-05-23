{{-- <div>
    {{-- @dd($model , $rows) --}}
    {{-- <table class="table table-striped  table-responsive">
        <thead class="thead-inverse">
            <tr>
                @foreach ($rows as $key => $value)
                    <td>{{ $key }}</td>
                @endforeach
            </tr>
        </thead>
        <tr>

            @foreach ($model as $singleModel)
        <tr>
            @foreach ($rows as $key => $value)
                @if ($key == 'option')
                    <td>
                        @forelse ($value as $key2213132 => $value2 )
                        <a href="{{ $value2['route'] }}"
                            class="btn btn-sm {{ $value2['class']  ?? '-'}} "> 
                            <i class="{{ $value2['icon']  ?? 'bi bi-apple'}} "></i>
                        </a>
                        @empty
                        @endforelse
                        
                    </td>
                    @continue
                @endif

                @if (str_contains($value, '->'))
                    @php
                        $ArrayExploded = explode('->', $value);
                    @endphp
                    {{-- @dd($ArrayExploded[0]) --}}
                    <td>{{ $singleModel->{$ArrayExploded[0]}->toArray()[$ArrayExploded[1]] }}</td>
                    @continue
                @endif
                <td>{{ $singleModel->$value }}</td>
            @endforeach
        </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                @foreach ($rows as $key => $value)
                    <td>{{ $key }}</td>
                @endforeach
            </tr>
        </tfoot>
    </table>
    <tr>

    </tr>
    </>
</div>  --}}
