@extends('pos.layout.app')

@section('content')
<div class="p-6 max-w-3xl mx-auto">
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="h-48 bg-gradient-to-r from-purple-400 to-primary flex items-center justify-center">
            @if($perfume->profile_pic)
                <img src="{{ asset('storage/'.$perfume->profile_pic) }}" class="h-full w-full object-cover">
            @else
                <i class="fas fa-spray-can text-white text-5xl"></i>
            @endif
        </div>
        <div class="p-6">
            <h2 class="text-2xl font-bold">{{ $perfume->name }}</h2>
            <p class="text-gray-600 mt-2">{{ $perfume->description }}</p>

            <div class="mt-4 grid grid-cols-2 gap-4 text-sm">
                <p><strong>Category:</strong> {{ $perfume->category->name ?? '-' }}</p>
                <p><strong>Supplier:</strong> {{ $perfume->supplier->name ?? '-' }}</p>
                <p><strong>Stock:</strong> {{ $perfume->stock_quantity }}</p>
                <p><strong>Buying Date:</strong> {{ $perfume->buying_date?->format('d M Y') }}</p>
                <p><strong>Expire Date:</strong> {{ $perfume->expire_date?->format('d M Y') }}</p>
                <p><strong>Buying Price:</strong> ksh {{ number_format($perfume->buying_price, 2) }}</p>
                <p><strong>Retail Price:</strong> ksh {{ number_format($perfume->retail_price, 2) }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
