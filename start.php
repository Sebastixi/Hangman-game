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
                $("#btnSuccess").click(function(){
                    $inputText = $("#inputWords").val();
                    $.post("ajax.php",{
                        option: "enterWord",
                        word: $inputText
                    },
                    function(data, status){ 
                        alert(data);
                    });
                    location.reload();
                });
                $(".wordList").click(function(){
                    alert("Function in develop wait for updates to do it");
                });
                $("#btnErase").click(function(){
                    $.post("ajax.php",{
                        option: "eraseWords"
                    },
                    function(data, status){ 
                        alert(data);
                    });
                    location.reload();
                });
                $("#btnStart").click(function(){
                    window.open("game.php");
                    window.close();
                });
            });
        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Return Main Page</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#page-top">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Start The game</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Put a word and confirm it</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputWords" aria-describedby="textHelp" placeholder="Enter a Word">
                            <small id="textHelp" class="form-text text-muted">you need to press Enter to confirm the word.</small>
                        </div>
                        <br>
                        <button type="button" class="btn btn-success" id="btnSuccess">Enter</button>
                        
                    </div>
                </div>
                <br>
            </div>
        </section>
        <!--Words-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <h2 class="text-black mb-5">Words Confirmed!</h2>
                        <h2 class="text-white mb-5">!! If you want to delete a word for the list press it</h2>
                        <div class="list-group" id = "ListWords">
                            <?php 
                                //Inclusion of the list with the elements of the session
                                include_once("Lists-Tables.php");
                                echo (showWords());
                            ?>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center">
                <button type="button" class="btn btn-danger" id="btnErase">Press this button to delete all the words!</button>
            </div>
            <br>
            <div class="text-center">
                <button type="button" class="btn btn-info" id="btnStart">Start the Game With the Words of the List!</button>
            </div>
            <br>
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
