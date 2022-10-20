@extends('user.userdash')
@section('purchase') 

<div class="purchase-cart">
  <h1>Purchase your food </h1>
</div>

<!-- Nav -->
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row" >
        <div class="col" id="nav">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart"><img  class="icon" src="https://image.flaticon.com/icons/png/512/833/833314.png" >Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button>
        </div>
    </div>
</nav>


<!-- Main -->
<div class="container">
    <div class="rowed">
      <div class="column">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="images/menu-image1.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">American Breakfast</h4>
            <p class="card-text">Price: $0.5</p>
            <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="images/menu-image4.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Corean soupe</h4>
            <p class="card-text">Price: $1.22</p>
            <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="images/menu-image5.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Royal Burger</h4>
            <p class="card-text">Price: $5</p>
            <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
    </div>
    <div class="rowed">
      <div class="column">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="images/menu-image6.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Tagliatelle</h4>
            <p class="card-text">Price: $0.5</p>
            <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="images/pizza.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Pizza Pepperoni</h4>
            <p class="card-text">Price: $1.22</p>
            <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="images/steak.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Beef Steak</h4>
            <p class="card-text">Price: $5</p>
            <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
    </div>
    
    
</div>

  
 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
    ,      
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Order now</button>
      </div>
    </div>
  </div>
</div> 



@endsection