<?php
    include "public_heading.php";
?>

<div class="allcontain">
    <div id="carousel-up" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " role="listbox">
            <div class="item active">
                <img src="image/oldcar.jpg" alt="oldcar">
                <div class="carousel-caption">
                    <h2>Porsche 356</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                        sed do eiusmod tempor incididunt ut labore </p>
                </div>
            </div>
            <div class="item">
                <img src="image/porche.jpg" alt="porche">
                <div class="carousel-caption">
                    <h2>Porche</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                        sed do eiusmod tempor incididunt ut labore </p>
                </div>
            </div>
            <div class="item">
                <img src="image/benz.jpg" alt="benz">
                <div class="carousel-caption">
                    <h2>Car</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                        sed do eiusmod tempor incididunt ut labore </p>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default midle-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
                    <h1>SEARCH TEXT</h1>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarmidle">
                <div class="searchtxt">
                    <h1>SEARCH TEXT</h1>
                </div>
                <form class="navbar-form navbar-left searchformmargin" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control searchform" placeholder="Enter Keyword">
                    </div>
                </form>
                <ul class="nav navbar-nav navbarborder">
                    <li class="li-category">
                        <a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                        <ul class="dropdown-menu" id="mydd">
                            <li><a href="#">Epic</a></li>
                            <li><a href="#">Old</a></li>
                            <li><a href="#">New</a></li>
                        </ul>
                    </li>
                    <li class="li-minyear"><a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Min Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                        <ul class="dropdown-menu" id="mydd2">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                    <li class="li-maxyear"><a class="btn dropdown-toggle btn-costume"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Max Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                        <ul class="dropdown-menu" id="mydd3">
                            <li><a href="#">1900</a></li>
                            <li><a href="#">2000</a></li>
                            <li><a href="#">2016</a></li>
                        </ul>
                    </li>
                    <li class="li-slideprice">
                        <p> <label class="slidertxt" for="amount">Price </label>
                            <input class="priceslider" type="text" id="amount" readonly="readonly">
                        </p>
                        <div id="slider-range"></div>

                    </li>
                    <li class="li-search"> <button class="searchbutton"><span class="glyphicon glyphicon-search "></span></button></li>
                </ul>

            </div>
        </nav>
    </div>
</div>

<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text-center"><span class="bdots">&bullet;</span>ELONDAGI<span class="carstxt">AVTOMOBILLAR</span>&bullet;</h1>
    </div>

    <div class="feturedimage">
        <div class="row firstrow">
            <div class="col-lg-6 costumcol colborder1">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                        <img src="image/featurporch.jpg" alt="porsche">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                            <div id="readmore">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                                </p>
                                <button id="btnRL">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="image/featurporch1.jpg" alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM2">READ MORE</button>
                            <div id="readmore2">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                                <button id="btnRL2">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 costumcol colborder1">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                        <img src="image/featurporch.jpg" alt="porsche">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                            <div id="readmore">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                                </p>
                                <button id="btnRL">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="image/featurporch1.jpg" alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM2">READ MORE</button>
                            <div id="readmore2">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                                <button id="btnRL2">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 costumcol colborder1">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                        <img src="image/featurporch.jpg" alt="porsche">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                            <div id="readmore">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                                </p>
                                <button id="btnRL">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="image/featurporch1.jpg" alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>LOREM IPSUM</h1>
                            <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt </p>
                            <h2>Price &euro;</h2>
                            <button id="btnRM2">READ MORE</button>
                            <div id="readmore2">
                                <h1>Car Name</h1>
                                <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                    sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                                <button id="btnRL2">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <ul class="pagination">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
            </ul>
        </div>
        <div class="col-md-4"></div>
    </div>



</div>

<?php
    include "public_footer.php";
?>
