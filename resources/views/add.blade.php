@extends('layout')
<h1>Add product</h1>
<div>
    <label for="smt" class="form-label">Type Switcher</label>
    <select name="Type" class="form-select" required="" onchange="onclick_link(this.value)">
        <option value="">-Any-</option>
        <option>DVD</option>
        <option>Furniture</option>
        <option>Book</option>
    </select><br>
    <a href="/" class="btn btn-secondary my-2">Back</a>
</div>

<script>
    function  onclick_link(val){
        if(val=='DVD'){
            window.location.href = '/add/dvd';
        }
        else if (val=='Book'){
            window.location.href = '/add/book';
        }
        else if(val=='Furniture'){
            window.location.href = '/add/furniture';
        }
    }
</script>

