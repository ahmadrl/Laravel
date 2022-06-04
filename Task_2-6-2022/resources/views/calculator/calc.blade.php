@extends('calculator.layout')

@section('header')
<h1 style="background-color:aliceblue;height:100px;">Simple Calculator</h1> 
<hr> 
@endsection

@section('formCalc')
<form style="background-color:lightsteelblue;font-size:20px;width:400px;height:250px;border: 2px solid" action="operations" method="post">
    @csrf
    <label for="num1">First number:</label><br>
    <input type="number" name="firstnumber"  placeholder="Enter first number" required=""><br><br>

    <label for="num1">Second number:</label><br>
    <input  type="number" name="secondnumber"  placeholder="Enter second number" required=""><br><br>
    <input type="submit" name="sub" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="sub" value="*">
    <input type="submit" name="sub" value="/">
</form>
@endsection
@section('result')
<div>
    @if(session('message'))
    <div>
        <h2>{{ session('message') }}</h2>
    </div>
    @endif
</div>
    
@endsection

