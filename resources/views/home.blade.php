@extends('layouts.master')
@section('title', '- Home')

@section('content')
<div class="bg-blocks">
    <div class="bg-ON first" id="0">
        <div class="description-ON" id="description">
            <div class="bordertop-ON" id="bordertop"></div>
            <div class="author-ON" id="author">
                Elizeu Dias • BRASIL
            </div>
            <div class="place-ON" id="place">
                <b>RIO DE JANEIRO</b>
            </div>
            <div class="discover" id="discover" style="display:flex;">
                <i class="fa-solid fa fa-bookmark"></i>
                <p>DISCOVER LOCATION</p>
            </div>
        </div>
    </div>

    <div class="bg-block second" id="1">
        <div class="description" id="description">
            <div class="bordertop" id="bordertop"></div>
            <div class="author" id="author">
                Portuguese Gravity • PORTUGAL
            </div>
            <div class="place" id="place">
                <b>PADRÃO DOS DESCOBRIMENTOS IN BELÉM</b>
            </div>
            <div class="discover" id="discover">
                <i class="fa-solid fa fa-bookmark"></i>
                <p>DISCOVER LOCATION</p>
            </div>
        </div>
    </div>

    <div class="bg-block third" id="2">
        <div class="description" id="description">
            <div class="bordertop" id="bordertop"></div>
            <div class="author" id="author">
                Nick Fewings • DUBIA
            </div>
            <div class="place" id="place">
                JUMEIRAH BEACH
            </div>
            <div class="discover" id="discover">
                <i class="fa-solid fa fa-bookmark"></i>
                <p>DISCOVER LOCATION</p>
            </div>
        </div>
    </div>

    <div class="bg-block fourth" id="3">
        <div class="description" id="description">
            <div class="bordertop" id="bordertop"></div>
            <div class="author" id="author">
                Izuddin Helmi Adnan • MALAYSIA
            </div>
            <div class="place" id="place">
                PENANG FISHERMAN JETTY
            </div>
            <div class="discover" id="discover">
                <i class="fa-solid fa fa-bookmark"></i>
                <p>DISCOVER LOCATION</p>
            </div>
        </div>
    </div>

    <div class="bg-block fifth last" id="4">
        <div class="description" id="description">
            <div class="bordertop" id="bordertop"></div>
            <div class="author" id="author">
                Jacob Creswick • WASHINGTON
            </div>
            <div class="place" id="place">
                WASHINGTON MONUMENT
            </div>
            <div class="discover" id="discover">
                <i class="fa-solid fa fa-bookmark"></i>
                <p>DISCOVER LOCATION</p>
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