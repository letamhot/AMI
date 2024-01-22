@foreach($billDetail as $key => $value)
<tr>
    <td>{{++$key}}</td>
    <td>{{$value->bills['id']}}</td>
    <td>{{$value->products['name']}}</td>
    <td>{{$value->size}}</td>
    <td>{{$value->quantity}}</td>
    <td>{{$value->unit_price}}</td>
    <td>
        <form action="{{ route('admin.bill.destroybillDetail', $value->id_bill) }}"
            method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit"
                onclick="return confirm('Are you sure to delete?')"><i
                    class="fas fa-backspace"></i></button>
        </form>
    </td>
</tr>
@endforeach
<tr>
    <td colspan="7">
        {!! $billDetail->links() !!}
    </td>
</tr>