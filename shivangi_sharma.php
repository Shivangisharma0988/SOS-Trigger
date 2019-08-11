<html>
<style>
    html, body 
    {
    position: relative;
    background-image:url("https://images.unsplash.com/photo-1416169607655-0c2b3ce2e1cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80");
    font-size: 18px;
    line-height: 2;
    }
  .tax
  {
    width: 380px;
    margin: 60px auto 30px;
    padding: 15px;
    position: relative;
    background-color:white;
    border-radius: 3px;
    box-shadow:
        0 2px 2px rgba(0,0,0,0.2),        
        0 1px 6px rgba(0,0,0,0.2),        
        0 0 0 12px rgba(255,255,255,0.4);
  }
.btn
{
  border-radius:20px;
  background-color:blue;
}
</style>
<body>
<div class="container">
<div class="tax">
<form action="sms.php" method="post">
  <fieldset>
    <legend>FEED THE DATA</legend>  
      <label>Source Latitude</label><br/>
         <input type="text" name="source_lat" placeholder="Source Latitude">
          <br/>
          <label>Source Longitude</label><br/>
         <input type="text" name="source_lng" placeholder="Source Longitude">
         <br/>
           <label>Destination</label><br/>
         <input type="text" name="Destination" placeholder="Destination">
         <br/>
          <label>Mobile No</label><br/>
         <input type="text" name="phone_no" placeholder="Mobile No">
         <br/>
         <button class="btn btn-primary" name="sub">SUBMIT</button>
         <button class="btn btn-primary">Reset</button>
  </fieldset>
</form>
</div>
</div>
 
