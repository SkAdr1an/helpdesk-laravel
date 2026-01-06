<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('user_id', Auth::id())->latest()->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Ticket::create([
            'user_id' => Auth::id(),
            'title' => $data['title'],
            'description' => $data['description'],
            'status' => 'open',
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket criado com sucesso!');
    }

    public function show(Ticket $ticket)
    {
        abort_if($ticket->user_id !== Auth::id(), 403);
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        abort_if($ticket->user_id !== Auth::id(), 403);
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        abort_if($ticket->user_id !== Auth::id(), 403);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:open,closed',
        ]);

        $ticket->update($data);

        return redirect()->route('tickets.show', $ticket)->with('success', 'Ticket atualizado com sucesso!');
    }

    public function destroy(Ticket $ticket)
    {
        abort_if($ticket->user_id !== Auth::id(), 403);

        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket removido com sucesso!');
    }
}
