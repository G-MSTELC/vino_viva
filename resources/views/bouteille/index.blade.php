<!-- Toutes les bouteilles (scraper de la SAQ) -->
@extends('layouts.app')
@section('title', 'Recherche')
@section('content')
<header>
    ajouter une bouteille
</header>
<main>
    <section> <!-- encadré noir (formulaires, filtres et tris) --> 
        <div class="form-container">
            <form action="" method="" id="">
                @csrf
                <div class="form-input-container">
                    <label for="search">RECHERCHE</label>
                    <input type="text" id="search" name="search">
                </div>
            </form>
        </div>
        <div class="link">
            <a href="#">BOUTEILLE PERSONNALISÉE</a>
        </div>
        <hr>
        <div>
            <p>FILTRER</p>
            <img src="" alt="Fermeture du menu de filtrage">
        </div>
        <div class="form-container">
            <form action="" method="" id="">
                <div class="form-input-container">
                    <label for="color">Couleur</label>
                    <select name="color" id="color">
                        <option value="white">Blanc</option>
                    </select>
                </div>
                <div class="form-input-container">
                    <label for="format">Format</label>
                    <select name="format" id="format">
                        <option value="750">750ml</option>
                    </select>
                </div>
                <div class="form-input-container">
                    <label for="type">Prix</label>
                    <span>Erreur prix</span>
                    <div>
                        <div>
                            <label for="prix_min">Minimum</label>
                            <input id="prix_min" value>
                        </div>
                        <div>
                            <label for="prix_max">Maximum</label>
                            <input id="prix_max" value>
                        </div>
                    </div>
                </div>
                <div class="form-input-container">
                    <label for="country">Pays</label>
                    <select name="country" id="country">
                        <option value="canada">Canada</option>
                    </select>
                </div>
                <div class="form-input-container">
                    <label for="region">Région</label>
                    <select name="region" id="region">
                        <option value="quebec">Québec</option>
                    </select>
                </div>
                <div class="form-input-container">
                    <label for="year">Millésime</label>
                    <select name="year" id="year">
                        <option value="2001">2001</option>
                    </select>
                </div>
                <div class="form-input-container">
                    <label for="grape">Cépage</label>
                    <select name="grape" id="grape">
                        <option value="cabernet-sauv">Cabernet-Sauvignon</option>
                    </select>
                </div>
            </form>
        </div>
        <hr>
        <div class="form-container">
            <form action="" method="" id="">
                @csrf
                <div class="form-input-container">
                    <label for="sort">TRIER</label>
                    <select name="sort" id="sort">
                        <option value="name-asc">Nom du produit (A-Z)</option>
                        <option value="name-desc">Nom du produit (Z-A)</option>
                        <option value="price-asc">Prix ($-$$$)</option>
                        <option value="price-desc">Prix ($$$-$)</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    <section> <!-- liste des bouteilles de la SAQ --> 
        <p> 6 résultats : </p>
        <div> <!-- encadré noir - fiche --> 
            <picture>
                <img src="#" alt="Nom de la bouteille">
            </picture>
            <div>
                <h2>Nom de la bouteille</h2>
                <p>Vin blanc | 750ml | France</p>
                <a href="#"><button>+AJOUTER</button></a>
            </div>
        </div>
    </section>
</main>
@endsection