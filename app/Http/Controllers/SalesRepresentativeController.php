<?php

namespace App\Http\Controllers;

use App\Models\SalesRepresentative;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SalesRepresentativeController extends Controller
{
    public function index(Request $request): View
    {
        $salesRepresentatives = SalesRepresentative::query()
            ->paginate(10);

        return view(
            'sales-representatives.index',
            compact('salesRepresentatives')
        );
    }

    public function create(): View
    {
        return view('sales-representatives.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateSalesRepresentative();


        SalesRepresentative::query()->create($validated);

        return redirect(route('sales-representatives.index'));
    }

    public function show(SalesRepresentative $salesRepresentative): View
    {
        return view('sales-representatives.show', compact('salesRepresentative'));
    }


    public function edit(SalesRepresentative $salesRepresentative): View
    {
        return view('sales-representatives.edit', compact('salesRepresentative'));
    }


    public function update(Request $request, SalesRepresentative $salesRepresentative): RedirectResponse
    {
        $validated = $this->validateSalesRepresentative();

        $salesRepresentative->first_name = $validated['first_name'];
        $salesRepresentative->last_name = $validated['last_name'];
        $salesRepresentative->email = $validated['email'];
        $salesRepresentative->telephone = $validated['telephone'];
        $salesRepresentative->joined_at = $validated['joined_at'];
        $salesRepresentative->current_route = $validated['current_route'];
        $salesRepresentative->comments = $validated['comments'];
        $salesRepresentative->save();

        return redirect(route('sales-representatives.index'));
    }

    public function destroy(SalesRepresentative $salesRepresentative): RedirectResponse
    {
        $salesRepresentative->delete();

        return redirect(route('sales-representatives.index'));
    }


    protected function validateSalesRepresentative(){

        return request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'joined_at' => 'required|date',
            'current_route' => 'required',
            'comments' => 'nullable',
        ]);
    }
}
