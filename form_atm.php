<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_atm.php">
  <div class="form-group row">
    <label for="norek" class="col-4 col-form-label">Nomor Rekening</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="norek" name="norek" placeholder="Nomor Rekening" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="saldo" class="col-4 col-form-label">Saldo Awal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-cc"></i>
          </div>
        </div> 
        <input id="saldo" name="saldo" placeholder="Saldo Awal" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<table class="table table-success table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th><th>No.Rekening</th><th>Customer</th>
            <th>Saldo</th>
        </tr>
</thead>
<tbody>
             <tr>   
             <td>1</td>
             <td>C001</td>
             <td>Ahmad</td>
             <td>3987000</td>

        </tr>
             <tr>   
             <td>2</td>
             <td>C002</td>
             <td>Budi</td>
             <td>5850000</td>

        </tr>
             <tr>   
             <td>3</td>
             <td></td>
             <td></td>
             <td></td>

        </tr>
    
</tbody>
</table>
