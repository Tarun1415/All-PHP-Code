
<h1>User list</h1>
<a href="{{ route('addMember') }}">Insert</a>
<br><br>
<table border="1">

<tr>
       <td> ID </td>
       <td> Name </td>
       <td> Email </td>
       <td> Operations1 </td>
       <td> Operations2 </td>
       <!-- <td> Operations3 </td> -->
</tr>

      @foreach($member as $item)
<tr>

<td> {{$item['id']}} </td>
<td> {{$item['Name']}} </td>
       <td> {{$item['Email']}} </td>
       <td><a href={{ "delete/".$item['id']}} > Delete</a></td>
       <td><a href={{ "Update/".$item['id']}} > Edit</a></td>
       <!-- <td><a href={{ "addmember/".$item['id']}} > Insert</a></td> -->
   </td>
       </tr>
@endforeach
</table>