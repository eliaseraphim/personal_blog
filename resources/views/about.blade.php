@extends('layouts.app')
@section('title')
    Elia | Personal Blog
@endsection

@section('content')
    <div id='about-content'>
        <!-- Personal Information (limited of course) -->
        <h1 id=section-one-header'>about</h1>
        <h2 id=name'>elia deppe</h2>
        <h3 id=occupation'>teacher / <a href='https://www.codeintheschools.org/'>code in the schools</a></h3>
        <p id='description'>
            my name is elia deppe.<br><br>

            i am a non-profit educator, programmer, and web designer. be kind to one another ^_^<br><br>
            location | baltimore<br>
            image credit | SAPGOON (<a href='https://picrew.me/image_maker/27852'>picrew</a>)
        </p>

        <!-- Work Information (limited again! gotcha) -->
        <h2 id='section-two-header'>work</h2>
        <p>
            i am a lead instructor for the non-profit code in the schools, based in baltimore, maryland.<br><br>

            i teach digital literacy, computer science, and python for a variety of in-school and out-of-school programs.
        </p>

        <!-- Development -->
        <h2 id='section-three-header'>development</h2>
        <ul class='list-group-flush' >
            <li class='list-group-item development-project'>
                <h3>chess</h3>
                <h4>github / <a href='https://github.com/eliaseraphim/chess'>https://github.com/eliaseraphim/chess</a></h4>
                <h4>language(s) / python</h4>
                <ul class='list-inline'>
                    <li class='list-inline-item license-type'>
                        <h5 class='border-right'>MIT</h5>
                    </li>
                    <li class='list-inline-item app-type'>
                        <h5 class='border-right'>application type / terminal</h5>
                    </li>
                    <li class='list-inline-item dev-status'>
                        <h5>status / <span class=''>in development</span></h5>
                    </li>
                </ul>
            </li>
            <li class='list-group-item development-project'>
                <h3><a href='https://eliaseraphim.github.io/'>elia.seraphim.io</a></h3>
                <h4>github / <a href='https://github.com/eliaseraphim/eliaseraphim.github.io'>https://github.com/eliaseraphim/eliaseraphim.github.io</a></h4>
                <h4>language(s) / hmtl, css, javascript</h4>
                <ul class='list-inline'>
                    <li class='list-inline-item license-type'>
                        <h5 class='border-right'>MIT</h5>
                    </li>
                    <li class='list-inline-item app-type'>
                        <h5 class='border-right'>application type / web application</h5>
                    </li>
                    <li class='list-inline-item'>
                        <h5>status / <span class=''>in development</span></h5>
                    </li>
                </ul>
            </li>
            <li class='list-group-item development-project'>
                <h3><a href='https://twitter.com/eliaCITS_bot'>@eliaCITS_bot</a></h3>
                <h4>github / <a href='https://github.com/eliaseraphim/gradient_bot'>https://github.com/eliaseraphim/gradient_bot</a></h4>
                <h4>language(s) / python</h4>
                <ul class='list-inline'>
                    <li class='list-inline-item license-type'>
                        <h5 class='border-right'>MIT</h5>
                    </li>
                    <li class='list-inline-item app-type'>
                        <h5 class='border-right'>application type / twitter bot</h5>
                    </li>
                    <li class='list-inline-item dev-status'>
                        <h5>status / <span class=''>in development (working)</span></h5>
                    </li>
                </ul>
            </li>
            <li class='list-group-item development-project'>
                <h3>Ligeia</h3>
                <h4>github / <a href='https://github.com/eliaseraphim/Ligeia'>https://github.com/eliaseraphim/Ligeia</a></h4>
                <h4>language / java</h4>
                <ul class='list-inline'>
                    <li class='list-inline-item license-type'>
                        <h5 class='border-right'>MIT</h5>
                    </li>
                    <li class='list-inline-item app-type'>
                        <h5 class='border-right'>application type / android application</h5>
                    </li>
                    <li class='list-inline-item dev-status'>
                        <h5>status / <span class=''>in development</span></h5>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
@endsection
