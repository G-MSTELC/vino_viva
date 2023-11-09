<!-- Index de tous les celliers -->

@extends('layouts.app')
@section('content')
    <main class="nav-margin">
        <a href="#" class="btn-round btn-action">+ ajouter un cellier</a>
        <h1>Vos celliers</h1>
        @forelse($celliers as $cellier)
            <section class="card-cellier">
                <a href="#">
                    <div>
                        <h2>{{ $cellier->nom }}</h2>
                        <div class="card-container-stats">
                            <div class="card-container-total">
                                <div>
                                    <span>{{ number_format($cellier->prixTotal, 2) }} $</span>
                                </div>
                            </div>
                            <div class="card-container-qt">
                                <div>
                                    <span>{{ $cellier->bouteilles_celliers_count }} x
                                        <svg width="12" height="30" viewBox="0 0 12 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.64 1.25C6.38 1.25 6.94 1.33 7.29 1.4V11.01C7.29 11.26 7.45 11.47 7.68 11.54C7.78 11.57 7.89 11.61 7.99 11.65C8.16 11.72 8.33 11.81 8.49 11.91C8.65 12.01 8.79 12.12 8.93 12.25C9.61 12.86 10.03 13.75 10.03 14.71V24.65C10.03 25.5 9.69 26.33 9.09 26.93C9.04 26.98 8.99 27.03 8.93 27.07C8.79 27.2 8.64 27.31 8.48 27.4C8.32 27.5 8.14 27.59 7.95 27.65C7.59 27.8 7.2 27.87 6.81 27.87H4.47C3.61 27.87 2.8 27.54 2.19 26.93C1.58 26.32 1.25 25.5 1.25 24.65V14.71C1.25 13.26 2.22 11.96 3.6 11.54C3.84 11.47 4 11.26 4 11.01V1.4C4.34 1.33 4.91 1.25 5.64 1.25ZM5.64 0C4.74 0 4.07 0.11 3.75 0.18L2.75 0.39V10.52C1.1 11.24 0 12.89 0 14.71V24.65C0 25.83 0.48 26.98 1.31 27.81C2.15 28.65 3.28 29.12 4.47 29.12H6.81C7.36 29.12 7.89 29.02 8.38 28.82C8.63 28.74 8.88 28.62 9.12 28.47C9.33 28.35 9.53 28.2 9.72 28.04C9.83 27.95 9.92 27.87 9.97 27.81C10.8 26.98 11.28 25.83 11.28 24.65V14.71C11.28 13.42 10.73 12.18 9.76 11.32C9.57 11.15 9.37 10.99 9.15 10.85C8.95 10.72 8.74 10.61 8.54 10.53V0.37L7.54 0.17C7.14 0.0900001 6.49 0 5.64 0Z" fill="white"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <svg class="card-arrow-icon" width="17" height="32" viewBox="0 0 17 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L16 16L1 31" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>
            </section>
        @empty 
            <p>Aucun cellier</p>
        @endforelse
    </main>
@endsection