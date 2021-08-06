@extends('layouts.base')
@section('title', 'Cart')

@section('content')
    
    <div class="row">
        <div class="col-8">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Qty</td>
                    <td>Action</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4">
            <div class="jumbotron">
                    <form>
                        <div class="form-group">
                            <label for="sub_total">Sub Total</label>
                            <input type="number" name="sub_total" class="form-control" id="sub_total" readonly>
                        </div>
                        <div class="form-group">
                            <label for="shipping_fee">Shipping Fee</label>
                            <input type="number" name="shipping_fee" class="form-control" id="shipping_fee">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Total</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">CHECKOUT</button>
                    </form>
            </div>
        </div>
    </div>

@endsection

