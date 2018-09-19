@extends('layouts.app')


@section('contet')

<form action="/materia/store" method="POST">
  <label for="materia">materia:</label>
  <input type="text" name="materia" value="{{ $id }}">
  
  <input type="submit" value="guardar">
</form>