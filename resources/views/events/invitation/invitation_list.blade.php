<!DOCTYPE html>

<table>
    <tr>
        <th>Card</th>
    
    </tr>
        @foreach($iid as $key =>$id)
    <tr>
    <td>
        {{$id->Invitation_id}}
    </td>
    <td>
        <a href="/go-to-card-send/{{$id->Invitation_id}}">Go to this card</a>
    </td>
        @endforeach
</tr>
</table>