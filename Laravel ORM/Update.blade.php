<h1>Update Data</h1>


<form action="/Update" method="post">
@csrf
<input type="hidden" Name='id' value={{$data['id']}}>
<input type="text" Name = "Name" value="{{$data['Name']}}">
<Br><Br>
<input type="text" Name ="Email" value="{{$data['Email']}}">
<br><br>
<button type="submit">Update</button>
</form>