<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index(): View {
    //
    $notes = Note::with('user')->get();
    $pinnedNotes = Note::where('is_pinned', true)->with('user')->get();
    return view('notes.index', compact(['notes', 'pinnedNotes']));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View {
    //
    return view('notes.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request): RedirectResponse {
    //
    return redirect()->back();
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id): View {
    //
    return view('notes.show');
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id): View {
    //
    return view('notes.edit');
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id): RedirectResponse {
    //
    return redirect()->back();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id): RedirectResponse {
    //
    return redirect()->back();
  }
}