@extends('layouts.sss')
@section('content')
<div class="panel panel-primary">
    <div class="panel panel-heading">
        Add L.G.A 
    </div>
     <div class="panel panel-body">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lga_name">Country</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="country_name" name="country_id">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="state_name">State</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="state_id" placeholder="Select state">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="state_name">L.G.A</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="state_id" placeholder="Enter L.G.A">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
     </div>
 </div>
   
@endsection
