@extends('layouts.master')
@section('title', '- Home')

@section('content')
<div class="bg-blocks">
    <div class="bg-ON" id="first">
        <div class="description-ON">
            <div class="bordertop-ON"></div>
            <div class="author-ON">
                Elizeu Dias • BRASIL
            </div>
            <div class="place-ON">
                <b>RIO DE JANEIRO</b>
            </div>
            <div class="discover">
                <i class="fa-solid fa fa-bookmark"></i>
                <p>DISCOVER LOCATION</p>
            </div>
        </div>
    </div>

    <div class="bg-block" id="second">
        <div class="description">
            <div class="bordertop"></div>
            <div class="author">
                Portuguese Gravity • PORTUGAL
            </div>
            <div class="place">
                <b>PADRÃO DOS DESCOBRIMENTOS IN BELÉM</b>
            </div>
        </div>
    </div>

    <div class="bg-block" id="third">
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

    <div class="bg-block" id="fourth">
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

    <div class="bg-block last" id="fifth">
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

    <div class="navigation">
        <div class="circle">
            <i class="fa-solid fa-xl fa-less-than"></i>
        </div>
        <div class="circle">
            <i class="fa-solid fa-xl fa-greater-than"></i>
        </div>
        <div class="line"></div>
        <div class="text">
            01
        </div>
    </div>
</div>


@stop