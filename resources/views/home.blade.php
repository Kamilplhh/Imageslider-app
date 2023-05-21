@extends('layouts.master')
@section('title', '- Home')

@section('content')
<div class="bg-blocks">
    <div class="bg-block bg-black bg-ON" id="first">
        <div class="description">
            <div class="bordertop"></div>
            <div class="author">
                Elizeu Dias • BRASIL
            </div>
            <div class="place">
                RIO DE JANEIRO
            </div>
        </div>
    </div>

    <div class="bg-block bg-black" id="second">
        <div class="description">
            <div class="bordertop"></div>
            <div class="author">
                Portuguese Gravity • PORTUGAL
            </div>
            <div class="place">
                PADRÃO DOS DESCOBRIMENTOS IN BELÉM
            </div>
        </div>

    </div>

    <div class="bg-block bg-black" id="third">
        <div class="description">
            <div class="bordertop"></div>
            <div class="author">
                Nick Fewings • DUBIA
            </div>
            <div class="place">
                JUMEIRAH BEACH
            </div>
        </div>
    </div>

    <div class="bg-block bg-black" id="fourth">
        <div class="description">
            <div class="bordertop"></div>
            <div class="author">
                Izuddin Helmi Adnan • MALAYSIA
            </div>
            <div class="place">
                PENANG FISHERMAN JETTY
            </div>
        </div>
    </div>

    <div class="bg-block last bg-black" id="fifth">
        <div class="description">
            <div class="bordertop"></div>
            <div class="author">
                Jacob Creswick • WASHINGTON
            </div>
            <div class="place">
                WASHINGTON MONUMENT
            </div>
        </div>
    </div>
</div>


@stop