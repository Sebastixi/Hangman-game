<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hangman Game</title>
        <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="jquery.js"></script>
        <script>
            $(document).ready(function(){ 
                $("#btnA").click(function(){
                     $(this).hide();
                });
                $("#btnB").click(function(){
                     $(this).hide();
                });
                $("#btnC").click(function(){
                     $(this).hide();
                });
                $("#btnD").click(function(){
                     $(this).hide();
                });
                $("#btnE").click(function(){
                     $(this).hide();
                });
                $("#btnF").click(function(){
                     $(this).hide();
                });
                $("#btnG").click(function(){
                     $(this).hide();
                });
                $("#btnH").click(function(){
                     $(this).hide();
                });
                $("#btnI").click(function(){
                     $(this).hide();
                });
                $("#btnJ").click(function(){
                     $(this).hide();
                });
                $("#btnK").click(function(){
                     $(this).hide();
                });
                $("#btnL").click(function(){
                     $(this).hide();
                });
                $("#btnM").click(function(){
                     $(this).hide();
                });
                $("#btnN").click(function(){
                     $(this).hide();
                });
                $("#btnO").click(function(){
                     $(this).hide();
                });
                $("#btnP").click(function(){
                     $(this).hide();
                });
                $("#btnQ").click(function(){
                     $(this).hide();
                });
                $("#btnR").click(function(){
                     $(this).hide();
                });
                $("#btnS").click(function(){
                     $(this).hide();
                });
                $("#btnT").click(function(){
                     $(this).hide();
                });
                $("#btnU").click(function(){
                     $(this).hide();
                });
                $("#btnV").click(function(){
                     $(this).hide();
                });
                $("#btnW").click(function(){
                     $(this).hide();
                });
                $("#btnX").click(function(){
                     $(this).hide();
                });
                $("#btnY").click(function(){
                     $(this).hide();
                });
                $("#btnZ").click(function(){
                     $(this).hide();
                });
            });
        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="start.php">Return Start Page</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link">Next Word</a></li>
                        <li class="nav-item"><a class="nav-link">End The game</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Hangman Game</h2>
                        <img src="assets/hangman0.png" class="img-fluid" alt="Responsive image" width="250" height="300" id="hangmanImg">
                        <br>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <td>A</td>
                                    <td>R</td>
                                    <td>B</td>
                                    <td>O</td>
                                    <td>L</td>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <table class="table table-striped table-dark">
                            <tbody>
                                <tr>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnA">A</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnB">B</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnC">C</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnD">D</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnE">E</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnF">F</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnG">G</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnH">H</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnI">I</button></td>
                                </tr>
                                <tr>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnJ">J</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnK">K</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnL">L</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnM">M</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnN">N</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnO">O</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnP">P</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnQ">Q</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnR">R</button></td>
                                </tr>
                                <tr>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnS">S</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnT">T</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnU">U</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnV">V</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnW">W</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnX">X</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnY">Y</button></td>
                                    <td><button type="button" class="btn btn-secondary btn-sm" id="btnZ">Z</button></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br>
                        <button type="button" class="btn btn-success" id="btnContinue">Continue to the Next Word</button>
                        
                    </div>
                </div>
                <br>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">&copy; Sebastixi 2022</div>
            <div class="container px-4 px-lg-5">Github <a href="https://github.com/Sebastixi" target="_blank">Sebastixi</a></div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
