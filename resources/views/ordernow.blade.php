@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-6">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{ $total }}</td>
              </tr>
              <tr>
                <td>Delivery fee</td>
                <td>$ {{ $delivery }}</td>
              </tr>
              <tr>
                <td>Total before tax</td>
                <td>$ {{$total + $delivery }}</td>
              </tr>
              <tr>
                <td>+ Tax (%10)</td>
                <td>+ $ {{ ($total + $delivery) * 0.1 }}</td>
              </tr>
              <tr>
                <td><b>Total Amount (Includes 10% tax)</b></td>
                <td><b>$ {{ ($total + $delivery) * 1.1 }} </b></td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Credit card</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Debit card</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 