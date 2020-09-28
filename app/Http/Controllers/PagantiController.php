<?php

namespace App\Http\Controllers;

use App\Pagante;
use Illuminate\Http\Request;

class PagantiController extends Controller
{
  public function index() {

    $paganti = Pagante::all();

    return view('paganti', compact('paganti'));
  }

  public function destroy($id) {

    $paganti = Pagante::findOrFail($id);
    $paganti -> delete();

    return redirect() -> route('paganti.index');
  }

  public function edit($id) {

    $pagante = Pagante::findOrFail($id);

    return view('paganti-edit', compact('pagante'));
  }

  public function update(Request $request, $id) {

    $data = $request -> all();
    $pagante = Pagante::findOrFail($id);
    $pagante -> update($data);

    return redirect() -> route('paganti.index');
  }
}
