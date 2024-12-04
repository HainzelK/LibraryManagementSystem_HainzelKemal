<?php

namespace App\Http\Controllers;

use App\Models\CollectionUpdate;
use Illuminate\Http\Request;

class CollectionUpdateController extends Controller
{
    /**
     * Show the list of collection updates for admin.
     */
    public function index()
    {
        $updates = CollectionUpdate::with(['librarian', 'book', 'cd', 'newspaper', 'journal'])->get();
        return view('admin.collection-updates.index', compact('updates'));
    }
}
