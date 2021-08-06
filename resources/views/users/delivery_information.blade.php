@extends('layouts.base')
@section('title', 'Deliver-infomration')

@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-8 mt-5 pt-5 jumbotron rounded">
                <form class="">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="number" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="number" name="address" class="form-control" id="address">
                    </div>
                    <div class="form-group">
                        <label for="contact#">Contact #</label>
                        <input type="text" class="form-control" name="contact#" id="contact#">
                    </div>
                    <button type="submit" class="btn btn-secondary">SAVE</button>
                </form>
            </div>
            <div class="col-4">
                <div class="mt-5 pt-5  jumbotron rounded">
                        <form>
                            <div class="form-group">
                                <label for="sub_total">Sub Total</label>
                                <input type="number" name="sub_total" class="form-control" id="sub_total" readonly>
                            </div>
                            <div class="form-group">
                                <label for="shipping_fee">Shipping Fee</label>
                                <input type="number" name="shipping_fee" class="form-control" id="shipping_fee" readonly>
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input type="text" class="form-control" name="total" id="total" readonly>
                            </div>
                            <button type="submit" class="btn btn-secondary btn-block">CHECKOUT</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection

