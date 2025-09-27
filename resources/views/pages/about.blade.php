@extends('layouts.app')

@section('content')
    <div style="display: flex; align-items: flex-start; justify-content: space-between; max-width: 1000px; margin: 5rem auto; padding: 0 2rem; font-family: sans-serif;">

        {{-- Left: Title --}}
        <div style="flex: 1;">
            <h1 style="font-size: 3rem; font-weight: bold; line-height: 1;">ABOUT</h1>
            <h1 style="font-size: 3rem; font-weight: bold; line-height: 1;">US</h1>
        </div>

        {{-- Right: Paragraph --}}
        <div style="flex: 2; font-size: 1rem; color: #333; line-height: 1.6;">
            <p>
                THELANE is redefining modern essentials with timeless pieces that blend everyday comfort with elevated style. Our curated collections focus on clean silhouettes, soft textures, and versatile designs that effortlessly transition from day to night.

                Rooted in simplicity and sophistication.
            </p>
            <p style="margin-top: 1rem;">
                THELANE brings together elevated basics, modest scarves, structured outerwear, and effortlessly chic footwear — all designed to reflect quiet luxury and modern femininity.

                Whether you're dressing for ease or impact, THELANE is your destination for refined wardrobe staples that speak to the now.
            </p>
        </div>

    </div>
@endsection
