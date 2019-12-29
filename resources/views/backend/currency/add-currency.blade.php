
       <h3>  Currency Table </h3>
       
       
       
       <form action="/admin/addcurrency" method="post">@csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Currency Name</label>
    <input type="text" class="form-control" name="currency" id="formGroupExampleInput" placeholder="currency">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Currency Symbols</label>
    <input type="text" class="form-control" name="symbol" id="formGroupExampleInput2" placeholder="symbol">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Master wallet</label>
    <input type="text" class="form-control" name="masterwallet" id="formGroupExampleInput2" placeholder="Master wallet">
  </div>
  
  <div class="form-group">
  
    <button type="submit" class="btn btn-primary">Add Currency</button>
</div>
  

</form>

