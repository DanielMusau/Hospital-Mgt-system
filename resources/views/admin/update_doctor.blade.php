<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <base href="/public">
    
    <style text="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
      
        <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" style="padding-top: 20px;">
            @if(session()->has('message'))

            <div class="alert alert-success" style="position: absolute; top:5em;">   
                <button type="button" class="close" data-dismiss="alert"> x </button>   
                {{session()->get('message')}}
            </div>
            @endif
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label>Doctor Name</label>
                    <input type="text" style="color: black;" name="name" value="{{$data->name}}">
                </div>

                <div style="padding: 15px;">
                    <label>Phone</label>
                    <input type="number" style="color: black;" name="number" value="{{$data->phone}}">
                </div>

                <div style="padding: 15px;">
                    <label>Speciality</label>
                    <select name="speciality" style="color: black; width: 200px;" value="{{$data->speciality}}">                          
                        <option value="skin">skin</option>
                        <option value="orthopaedic">orthopaedic</option>
                        <option value="paedeatric">paedeatric</option>
                        <option value="heart">heart</option>
                        <option value="optician">optician</option>
                    </select>
                </div>

                <div style="padding: 15px;">
                    <label>Room Number</label>
                    <input type="text" style="color: black;" name="room" value="{{$data->room}}">
                </div>
                
                <div style="padding: 15px;">
                    <label>Old Image</label>
                    <img height="150" width="150" src="doctorimage/{{$data->image}}">
                </div>
                
                <div style="padding: 15px;">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>
                
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>

            </div>
            
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>