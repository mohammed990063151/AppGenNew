<div>
    @dd($rows['edit'=>'ticket.create']);
    {{-- @dd($model , $rows) --}}
    <table class="table table-striped  table-responsive">
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
                    @if (array_key_exists('edit', $value))
                        <td> <a href="{{$edit[0]}}" class="btn btn-primary btn-sm" type="button">{{ 'edit' }}</a></span></td>
                    @endif

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
</div>
