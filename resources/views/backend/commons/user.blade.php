 
@foreach ($users as $dt)
    <tr>  
    <td>  <a href="/admin/deposits/{{ $dt->id }}" > {{ $dt->id }}</a></td>
    <td>   {{ $dt->name }}</td>
    <td>   {{ $dt->email }}</td> 
    
      <td>   {{ $dt->created_at }}</td>
    <td>   {{ $dt->updated_at }}</td>    
    
    </tr>
    
    
@endforeach