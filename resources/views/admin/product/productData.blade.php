@php $current = $product->currentPage() * $product->perPage() - $product->perPage();
@endphp
@foreach($product as $key => $value)
<tr>
    <td>{{++$current}}</td>
    <td>{{$value->name}}</td>
    <td>{{$value->slug}}</td>
    <td>{{$value->category['name']}}</td>
    <td>{{$value->producer['name']}}</td>
    <td>{{$value->amount}}</td>
    <td><img src="data:image;base64,{{ $value->image }}" alt="{{ $value->name }}" width="80px" height="80px" /></td>
    <td><img src="data:image;base64,{{ $value->image1 }}" alt="{{ $value->name }}" width="80px" height="80px" /></td>
    <td><img src="data:image;base64,{{ $value->image2 }}" alt="{{ $value->name }}" width="80px" height="80px" /></td>
    <td>{{(number_format($value->price,0,".",","))}}</td>
    @if($value->new ==1)
    <td><label class="badge bg-green" style="color:green" for="">New</label></td>
    @else
    <td><label class="badge bg-black" style="color:red" for="">Old</label></td>
    @endif
    <td>{{$value->description}}</td>
    <td><a href="{{ route('admin.product.edit', $value->id) }}"
            class="btn btn-warning btn-sm" type="submit"><i class="fa fa-edit" title="Edit"></i>
        </a>
        <br/>
        <form action="{{ route('admin.product.destroy', $value->id) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"
                onclick="return confirm('Are you sure to delete?')"><i
                    class="fas fa-backspace"></i></button>
        </form>
    </td>
    {{-- <td>
        <a href={{route('admin.product.qtyGet', $value->id)}} class="btn btn-primary" type="submit"
            style="color:lightblue"><i class="fa fa-window-restore" title="ADD"></i></a>
    </td> --}}
</tr>
@endforeach
<tr>

    <td colspan="13">
        {!! $product->links() !!}
    </td>
   
</tr>