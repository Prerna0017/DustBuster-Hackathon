@extends('layouts.admin')
@section('title','Bus Registration')
@section('content')

<section class="home-section" style="background-color:#F2F6F8;">
    <br>
    <br>
    <br>
    <div class="container">
        <div class="title">BUS REGISTRATION</div>
        <div class="content">
            <form class="form" method="post" action="bus_submit">
                <br/>
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Registration Plate Number</span>
                        <input type="text" name="reg_plate" class="input" value="{{ old('reg_plate') }}"
                            placeholder="Enter the Registration Plate Number here" required>
                        <br>
                        <span style="color:red">@error('reg_plate'){{$message}}@enderror</span>
                        <br>
                    </div>

                    <div class="input-box">
                        <span class="details">Bus Model</span>
                        <select required name="model">
                            <option value="">Select</option>
                            <option value="Model 1">Model 1</option>
                            <option value="Model 2">Model 2</option>
                        </select>
                        <br>
                        <!-- <span style = "color:red">@error('name'){{$message}}@enderror</span> -->
                        <br>
                    </div> 
                    
                </div>
                
                <div style="display:inline-flex;">
                    <div class="button" style="justify-content:center;">
                        <a href="bus_show">
                            <input type="button" value="BACK">
                        </a>
                    </div>
                    <div class="button">
                        <input type="submit" value="SUBMIT">
                    </div>

                </div>
            </form>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</section>


@endsection