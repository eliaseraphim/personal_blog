@extends('layouts.app')
@section('title')
    Elia | Personal Blog
@endsection

@section('content')
    <div id='about-content'>
        <!-- personal information (limited of course) -->
        <h2 id='name'><mark class='highlight-color-text blue-bg'>elia deppe</mark></h2>
        <!-- info container -->
        <div class='mt-3 mx-4 content-container'>
            <h3 id=occupation'>teacher / <a href='https://www.codeintheschools.org/'>code in the schools</a></h3>
            <p id='description'>
                my name is elia deppe.<br>
                i am a non-profit educator, programmer, and web designer. be kind to one another ^_^<br>
            </p>
        </div>

        <h2 id='contact'><mark class='highlight-color-text cyan-bg'>contact</mark></h2>
        <!-- contact container -->
        <div class='mt-3 mx-4 content-container' id='section-two-info'>
            <!-- contact information -->
            <!-- utilizing list styling so that spacing is consistent for identifiers and details-->
            <ul class='list-group-flush list-unstyled' id='contact-info'>
                <!-- location -->
                <li class='list-group-item m-0 p-0 border-0'>
                    <ul class='list-inline'>
                        <li class='list-inline-item border-right about-identifier'>
                            <p class='m-0'>location</p>
                        </li>
                        <li class='list-inline-item'>
                            <p class='m-0'>baltimore</p>
                        </li>
                    </ul>
                </li>

                <!-- phone -->
                <li class='list-group-item m-0 p-0 border-0'>
                    <ul class='list-inline'>
                        <li class='list-inline-item border-right about-identifier'>
                            <p class='m-0'>phone number</p>
                        </li>
                        <li class='list-inline-item'>
                            <p class='m-0'>(443) 614 - 9263</p>
                        </li>
                    </ul>
                </li>

                <!-- personal email -->
                <li class='list-group-item m-0 p-0 border-0'>
                    <ul class='list-inline'>
                        <li class='list-inline-item border-right about-identifier'>
                            <p class='m-0'>email</p>
                        </li>
                        <li class='list-inline-item'>
                            <p class='m-0'>elia.deppe7@gmail.com</p>
                        </li>
                    </ul>
                </li>

                <!-- work email -->
                <li class='list-group-item m-0 p-0 border-0'>
                    <ul class='list-inline'>
                        <li class='list-inline-item border-right about-identifier'>
                            <p class='m-0'>work email</p>
                        </li>
                        <li class='list-inline-item'>
                            <p class='m-0'>elia@codeintheschools.org</p>
                        </li>
                    </ul>
                </li>

                <!-- image credit -->
                <!-- currently, i am not using an image, but in case i do -->
                <li class='list-group-item m-0 p-0 border-0'>
                    <ul class='list-inline'>
                        <li class='list-inline-item border-right about-identifier'>
                            <p class='m-0'>image credit</p>
                        </li>
                        <li class='list-inline-item'>
                            <p class='m-0'>SAPGOON (<a href='https://picrew.me/image_maker/27852'>picrew</a>)</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- about this site -->
        <h2 id='section-three-header'><mark class='highlight-color-text green-bg'>about this</mark></h2>
        <p class='mt-3 mx-4 content-container' id='section-three-info'>
            this is a blogging site for my various hobbies. this is mostly for me to practice working with and using
            the languages: html, css, and php and the frameworks: bootstrap and laravel. i also plan on practicing
            implementing various front end designs.
        </p>

        <!-- work information (limited again! gotcha) -->
        <h2 id='section-four-header'><mark class='highlight-color-text light-yellow-bg'>work</mark></h2>
        <p class='mt-3 mx-4 content-container' id='section-four-info'>
            i am a lead instructor for the non-profit code in the schools, based in baltimore, maryland.<br><br>
            i teach digital literacy, computer science, and python for a variety of in-school and out-of-school programs.
        </p>

        <!-- hobbies -->
        <h2 id='section-five-header'><mark class='highlight-color-text dark-yellow-bg'>hobbies</mark></h2>
        <p class='mt-3 mx-4 content-container' id='section-five-info'>
            i engage in a few hobbies; mainly coding, writing, and creating visual artwork.
        </p>

        <!-- development projects -->
        <h2 id='section-six-header'><mark class='highlight-color-text light-red-bg'>development</mark></h2>
        <ul class='list-group ml-4 development-projects'>
            <!-- chess -->
            <li class='list-group-item development-project'>
                <!-- project name -->
                <h3>chess</h3>

                <!-- project info -->
                <div class='ml-4'>
                    <!-- repository link -->
                    <h4>github / <a href='https://github.com/eliaseraphim/chess'>https://github.com/eliaseraphim/chess</a></h4>

                    <!-- languages used -->
                    <h5>language(s) / python</h5>

                    <!-- license, application type, and development status -->
                    <ul class='list-inline'>
                        <li class='list-inline-item license-type'>
                            <h6 class='border-right'>MIT</h6>
                        </li>
                        <li class='list-inline-item app-type'>
                            <h6 class='border-right'>application type / terminal</h6>
                        </li>
                        <li class='list-inline-item dev-status'>
                            <h6>status / <span class=''>in development</span></h6>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- personal website -->
            <li class='list-group-item development-project'>
                <!-- project name -->
                <h3><a href='https://eliaseraphim.github.io/'>eliaseraphim.github.io</a></h3>

                <!-- project description -->
                <div class='ml-4'>
                    <!-- repository link -->
                    <h4>github / <a href='https://github.com/eliaseraphim/eliaseraphim.github.io'>https://github.com/eliaseraphim/eliaseraphim.github.io</a></h4>

                    <!-- languages used -->
                    <h5>language(s) / hmtl, css, javascript</h5>

                    <!-- license, application type, and development status -->
                    <ul class='list-inline'>
                        <li class='list-inline-item license-type'>
                            <h6 class='border-right'>MIT</h6>
                        </li>
                        <li class='list-inline-item app-type'>
                            <h6 class='border-right'>application type / web application</h6>
                        </li>
                        <li class='list-inline-item'>
                            <h6>status / <span class=''>in development</span></h6>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- personal blog -->
            <li class='list-group-item development-project'>
                <!-- project name -->
                <h3>personal blog</h3>

                <!-- project description -->
                <div class='ml-4'>
                    <!-- repository link -->
                    <h4>github / <a href='https://github.com/eliaseraphim/personal_blog'>https://github.com/eliaseraphim/personal_blog</a></h4>

                    <!-- languages used -->
                    <h5>language(s) / html, css, javascript, php</h5>

                    <!-- frameworks used -->
                    <h5>framework(s) / laravel</h5>

                    <!-- license, application type, and development status -->
                    <ul class='list-inline'>
                        <li class='list-inline-item license-type'>
                            <h6 class='border-right'>MIT</h6>
                        </li>
                        <li class='list-inline-item app-type'>
                            <h6 class='border-right'>application type / web application</h6>
                        </li>
                        <li class='list-inline-item dev-status'>
                            <h6>status / <span class=''>in development</span></h6>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- twitter bot -->
            <li class='list-group-item development-project'>
                <!-- project name -->
                <h3><a href='https://twitter.com/eliaCITS_bot'>@eliaCITS_bot</a></h3>

                <!-- project description -->
                <div class='ml-4'>
                    <!-- repository link -->
                    <h4>github / <a href='https://github.com/eliaseraphim/gradient_bot'>https://github.com/eliaseraphim/gradient_bot</a></h4>

                    <!-- languages used -->
                    <h5>language(s) / python</h5>

                    <!-- license, application type, and development status -->
                    <ul class='list-inline'>
                        <li class='list-inline-item license-type'>
                            <h6 class='border-right'>MIT</h6>
                        </li>
                        <li class='list-inline-item app-type'>
                            <h6 class='border-right'>application type / twitter bot</h6>
                        </li>
                        <li class='list-inline-item dev-status'>
                            <h6>status / <span class=''>in development (working)</span></h6>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- android music app -->
            <li class='list-group-item development-project'>
                <!-- project name -->
                <h3>ligeia</h3>

                <!-- project description -->
                <div class='ml-4'>
                    <!-- repository link -->
                    <h4>github / <a href='https://github.com/eliaseraphim/Ligeia'>https://github.com/eliaseraphim/Ligeia</a></h4>

                    <!-- languages used -->
                    <h5>language / java</h5>

                    <!-- license, application type, and development status -->
                    <ul class='list-inline'>
                        <li class='list-inline-item license-type'>
                            <h6 class='border-right'>MIT</h6>
                        </li>
                        <li class='list-inline-item app-type'>
                            <h6 class='border-right'>application type / android application</h6>
                        </li>
                        <li class='list-inline-item dev-status'>
                            <h6>status / <span class=''>in development</span></h6>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
@endsection
