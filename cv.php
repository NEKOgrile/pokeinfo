<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<meta charset="UTF-8" />

<title>cv en ligne</title>


<link rel="stylesheet" media="screen" type="text/css" href="main.css" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<html>

<body>

    <div class="controlleur">
        <div class="letout">
            <div class="moving-zone">
                <div class="popup">
                    <div class="popup-content">
                        <div class="popup-text">


                            ce <b>popup</b> est ici pour que vous prenez.<br />
                            consiance qu'il y a des <b>cokkies</b> sur ce site !<br />
                            <input type="button" id="boutoncolli" value="j'accept les cookies" onclick="boutoncookie()" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="controlleur2">
        <div class="letout2">
            <div class="moving-zone2">
                <div class="popup2">
                    <div class="popup-content2">
                        <div class="popup-text2">


                            ce <b>popup</b> est ici pour que vous dire.<br />
                            que la taile de l' <b>écrant</b> est trop peutit !<br />
                            <input type="button" value="j'accept le risque" onclick="boutontaille()" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div id="parchment"></div>
        <div id="contain">
            <p class="inkTitle">CURRICULUM
                VITAE</p>
            <p id="labarum2"><img src="image/active.png"></p>


            <input type="checkbox" id="checkboxmode" class="chekbox">

            <label for="checkboxmode">
                <p><img src="image/on_off_rotation.png" class="labarum1" id="image"></p>
            </label>

            <p id="labarum3"><img src="image/desactive.png"></p>

            <div class="conteneurinfomoi">
                <p><img id="photo" src="image/photo.png"></p>
            </div>
            <div class="conteneurinfomoi">
                <p id="labarum"><img src="image/maison.png"></p>
                <p class="inkTitle2">adresse : 101 chemain matens Gaillac</p>
            </div>


            <div class="conteneurinfomoi">
                <p id="labarum"><img src="image/contact.png"></p>
                <p class="inkTitle2">Mail : willemcornil@gmail.com</p>
            </div>

            <div class="conteneurinfomoi">
                <p id="labarum"><img src="image/tel.png"></p>
                <p class="inkTitle2">Tel : 07 86 77 36 14</p>
            </div>


            <div class="textexplicatife">

                </p>

                <p>Formation Universitaire<br><br>
                <p class="nomal" onclick="detectsurp1('parchemin1')">• CFG (certification de formation générale) Naucelle 2017<br></p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d451.62135121032765!2d2.345616646612161!3d44.19514115900643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ad8f057ebeb375%3A0x774f06ae645674a!2sColl%C3%A8ge%20priv%C3%A9%20Saint-Martin!5e1!3m2!1sfr!2sfr!4v1655648307490!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "St martin naucelle.jpg", "parchemin1");

                ?>
                <p class="nomal" onclick="detectsurp1('parchemin2')"> • Certificat du PSC1 (ancien certificat de secourisme)<br></p>


                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.1894530238897!2d1.901051915505569!3d43.8933427791139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12add22c3465f211%3A0xe757d3073c8ebd3c!2sUnit%C3%A9%20Locale%20De%20Gaillac%20-%20Croix%20Rouge%20fran%C3%A7aise!5e0!3m2!1sfr!2sfr!4v1655651706854!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "crois rouge.jpg", "parchemin2");

                ?>


                <p class="nomal" onclick="detectsurp1('parchemin3')"> • 2nd Pro SN au lycée De La Salle (Castres) 2017-2018<br></p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3850083194734!2d2.2333828431436675!3d43.607485942016034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae11e51470dfa1%3A0x616ca64eb0e26ae9!2sDe%20La%20Salle%20-%20Castres!5e1!3m2!1sfr!2sfr!4v1655664954519!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "de la salle.jpg", "parchemin3");

                ?>
                <p class="nomal" onclick="detectsurp1('parchemin4')"> • 1 ère Pro SN option RISC au lycée De La Salle (Castres) 2018-2019<br></p>


                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3850083194734!2d2.2333828431436675!3d43.607485942016034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae11e51470dfa1%3A0x616ca64eb0e26ae9!2sDe%20La%20Salle%20-%20Castres!5e1!3m2!1sfr!2sfr!4v1655664954519!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "de la salle.jpg", "parchemin4");

                ?>

                <p class="nomal" onclick="detectsurp1('parchemin5')"> • CCF (formation contrôle continu) (2018-2019)<br></p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3850083194734!2d2.2333828431436675!3d43.607485942016034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae11e51470dfa1%3A0x616ca64eb0e26ae9!2sDe%20La%20Salle%20-%20Castres!5e1!3m2!1sfr!2sfr!4v1655664954519!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "de la salle.jpg", "parchemin5");

                ?>


                <p class="nomal" onclick="detectsurp1('parchemin6')"> • BEP de système numérique (2018-2019)<br></p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3850083194734!2d2.2333828431436675!3d43.607485942016034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae11e51470dfa1%3A0x616ca64eb0e26ae9!2sDe%20La%20Salle%20-%20Castres!5e1!3m2!1sfr!2sfr!4v1655664954519!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "de la salle.jpg", "parchemin6");

                ?>


                <p class="nomal" onclick="detectsurp1('parchemin7')"> • BAC PRO SNIR (2019-2020) mention AB</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3850083194734!2d2.2333828431436675!3d43.607485942016034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ae11e51470dfa1%3A0x616ca64eb0e26ae9!2sDe%20La%20Salle%20-%20Castres!5e1!3m2!1sfr!2sfr!4v1655664954519!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "de la salle.jpg", "parchemin7");

                ?>


                <p class="detail" onclick="detectsurp1('parchemin8')">• BTS SNIR (2020-2022) Rascol Albi</p>


                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.0707462684613!2d2.1461848329774353!3d43.92993237571016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ade8046effe6e5%3A0x3a35d03a37ef03e4!2sRascol!5e1!3m2!1sfr!2sfr!4v1655665094050!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "rascol.jpg", "parchemin8");

                ?>





                <p><br><br><br>EXPÉRIENCE PROFESSIONNELLE<br><br>


                <p class="nomal" onclick="detectsurp1('parchemin9')">• Aide chez un vigneron pendant 1 semaine (stage de troisième) 2016</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d892.3802345854291!2d1.7916593292558152!3d43.98899046358347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ac339fcfa8064b%3A0xc672699b6fdc41cd!2s81140%20Castelnau-de-Montmiral!5e1!3m2!1sfr!2sfr!4v1657023865763!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "pasdispo.png", "parchemin9");

                ?>




                <p class="nomal" onclick="detectsurp1('parchemin10')"> • 2 semaines en formation chez un réparateur de téléphone et
                    d’ordinateur</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d893.7361237001096!2d1.8979919292556937!3d43.898733365049715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12add2306e218307%3A0x941e67e88448c46d!2s34-38%20Rue%20Jean%20Jaur%C3%A8s%2C%2081600%20Gaillac!5e1!3m2!1sfr!2sfr!4v1657024299341!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "ferme.jpg", "parchemin10");

                ?>


                <p class="nomal" onclick="detectsurp1('parchemin11')"> • 3 semaines chez EMAUS pour réparer et revendre des ordinateurs
                    (formatage) 2018</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.9316834680435!2d1.7858953155041009!3d43.84895837911501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ac2b6491d5b323%3A0xac46f68c0fbf565a!2sEmmaus%20Lisle%20Sur%20Tarn!5e1!3m2!1sfr!2sfr!4v1657024530136!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "emaus.jpg", "parchemin11");

                ?>



                <p class="nomal" onclick="detectsurp1('parchemin12')"> • 4 semaines chez Accord Informatique (Gaillac) 2018</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d315.9803760077476!2d1.887259169957043!3d43.89931504223943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12add24629c52781%3A0xb2ea5ce9fa98d1ab!2sAccord%20Informatique!5e1!3m2!1sfr!2sfr!4v1657024666394!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "pasimg.png", "parchemin12");

                ?>




                <p class="nomal" onclick="detectsurp1('parchemin13')"> • 4 semaines : programmation ARDUINO UNO (plaquette électronique)</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d892.8532824869261!2d1.8314868292557793!3d43.95751796409505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf4d5b100490f946!2zNDPCsDU3JzI3LjEiTiAxwrA0OSc1NS4zIkU!5e1!3m2!1sfr!2sfr!4v1657025169644!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "maisoncastel.png", "parchemin13");

                ?>




                <p class="nomal" onclick="detectsurp1('parchemin14')"> • 5 semaines : QUATRYS Castres : création de site internet</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d898.1811584471808!2d2.252325829255254!3d43.60179896985648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6757eb8cc7712c19!2zNDPCsDM2JzA2LjUiTiAywrAxNScxMC4zIkU!5e1!3m2!1sfr!2sfr!4v1657043185014!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "quatris.png", "parchemin14");

                ?>





                <p class="nomal" onclick="detectsurp1('parchemin15')"> • 6 semaines chez ARIANNE NETWORKS (câble et réseau informatique) Albi</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2873.9344609749737!2d2.1803828157602587!3d43.91933094319817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ade7d4ff38020d%3A0x8ff8b7402ef77705!2sCELESTE%20Agence%20OCCITANIE!5e0!3m2!1sfr!2sfr!4v1657053548065!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "arian.png", "parchemin15");

                ?>




                <p class="nomal" onclick="detectsurp1('parchemin16')"> • Projet Robotique Arduino/raspberry</p>

                <?php

                echo cartsimple("je sais pas encors a voir avec le temps", "arian.png", "parchemin16");

                ?>

                <p class="nomal" onclick="detectsurp1('parchemin17')"> • Projet Home Cinéma + sous réseau</p>

                <?php

                echo cartsimple("je sais pas encors a voir avec le temps", "arian.png", "parchemin17");

                ?>

                <p class="nomal" onclick="detectsurp1('parchemin18')"> • 5 semaines chez Leclerc</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2417.816832222987!2d1.8809096942888057!3d43.891371509784875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12add230b8e988db%3A0xb3ded1c0f0d46cac!2sE.Leclerc%20Man%C3%A8ge%20%C3%80%20Bijoux!5e0!3m2!1sfr!2sfr!4v1657054706474!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "leclaire.jpg", "parchemin18");

                ?>



                <p class="nomal" onclick="detectsurp1('parchemin19')"> • Bénévole dans une association pour personne âgées</p>

                <?php

                echo cart("https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223.1160180101743!2d1.911023949017014!3d43.98341395347101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12adced8f4540a1d%3A0x2c0537f594f9ff5d!2sDomaine%20Salvy!5e1!3m2!1sfr!2sfr!4v1657055011351!5m2!1sfr!2sfr", "je sais pas encors a voir avec le temps", "cahusac.png", "parchemin19");

                ?>

                </p><br><br><br>
                <p>COMPÉTENCES<br><br>


                <p class="nomal" onclick="detectsurp1('parchemin20')">• Formatage d’ordinateur</p>

                <?php

                echo cartsimple("je sais pas encors a voir avec le temps", "pasimg.png", "parchemin20");

                ?>


                <p class="nomal" onclick="detectsurp1('parchemin21')"> • Informatique: Word, Excel , Power Point , IDE</p>

                <?php

                echo cartsimpletableau("je sais pas encors a voir avec le temps", "table1", "tdtableau1", "parchemin21", "world.png", "exel.png", "powerpont.png", "visualstudio.png", "vide.png", "vide.png");

                ?>


                <p class="nomal" onclick="detectsurp1('parchemin22')"> • Utilisation du langage JAVA, PYTHON, C++, HTML, CSS, PHP</p>

                <?php

                echo cartsimpletableau("je sais pas encors a voir avec le temps", "table2", "tdtableau1", "parchemin22", "HTML.png", "css.png", "java.png", "PHP.png", "python.png", "c++.png");

                ?>



                <p class="nomal" onclick="detectsurp1('parchemin23')"> • Compréhension des bases de la programmation</p>

                <?php

                echo carttext("je sais pas encors a voir avec le temps", "parchemin23");

                ?>





                <p class="nomal" onclick="detectsurp1('parchemin24')"> • Maintenance informatique</p>

                <?php

                echo cartlien("je sais pas encors a voir avec le temps", "parchemin24", "#", "#", "#", "#", "rapport de stage Émaus", "rapport de stage accord informatique", "", "", "lienpart1_1", "lienpart1_2", "liennone", "liennone");

                ?>





                <!-------------------------------------a modifier 3-------------------------------------->

                <p class="nomal" onclick="detectsurp1('parchemin25')"> • Mise en place et service d’un réseau</p>

                <?php

                echo cartsimpletableau("je sais pas encors a voir avec le temps", "table1", "tdtableau1", "parchemin25", "world.png", "exel.png", "powerpont.png", "visualstudio.png", "vide.png", "vide.png");

                ?>

                <!--------------------------------------------------------------------------------------->

                <!--prendre le project cu lycéé car je n ai plus mes robot et j ai pas fait de conte rendu -->



                • Création robotique avec la carte Arduino/raspberry<br>

                <!--------------------------------------------------------------------------------------->



                • Création de site internet<br>


                • Création de bot en python<br>



                • Gestion des API<br><br><br>

                </p>
                <p>CENTRES D’INTERETS / DIVERS<br><br>

                    • Permis vouture 2021<br>
                    • Pratiques de plusieurs sports (judo, natation, hand, basket,
                    athlétisme, plongée)<br>
                    • Manga, jeux vidéo, codage, robotisation , réseau et home cinéma<br>


                </p>

            </div>
            <p class="cachet"><img src="https://i.postimg.cc/4NBYNqCR/22.png"></p>
            <div id="signature">Willem cornil web développer<br />fait en 2022 le 18/06/2002</div>
        </div>
    </main>

    <svg>
        <filter id="wavy2">
            <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="1" />
            <feDisplacementMap in="SourceGraphic" scale="20" />
        </filter>
    </svg>





    <div id="popUp">
        <div id="close" class="close"><i class="fa fa-times"></i></div>
        <div id="new"><span>NEW!</span></div>
        <h2>si la page ce charge mal c est une erreur de js il faut simplement le rechager.</h2>

        <h2>appuyez sur :F5
        </h2>

    </div>
    <div id="plus"><span>NEW<br>&nbsp;&nbsp;<i class="fa fa-plus"></i></span></div>


</body>

</html>







<?php
function cart($map, $text, $image, $id)
{
    return <<<HTML
    
    <div class="parcheminvierge" id="$id">
                    <img class="image" src="image/parchemin_vierge.png">
                    <p class="textdanscart">{$text}</p>
                       
                   
                   
                    <img class="image2" src="image/$image">
                    
                    
                    <iframe class="map" src="$map" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
    
    
HTML;
}


function cartsimple($text, $image, $id)
{
    return <<<HTML
    
    <div class="parcheminvierge" id="$id">
                    <img class="image" src="image/parchemin_vierge.png">
                    <p class="textdanscartsimpletable">{$text}</p>
                    <img class="image2simple" src="image/$image">
                    
                    
                    

                </div>
    
    
HTML;
}




function cartsimpletableau($text, $class1, $class2, $id, $img1, $img2, $img3, $img4, $img5, $img6)
{
    return <<<HTML
    
    <div class="parcheminvierge" id="$id">
                    <img class="image" src="image/parchemin_vierge.png">
                    <p class="textdanscartsimpletable">{$text}</p>
                    <table class="$class1">
                        <tr>
                            <td class="$class2">
                                <img class="imagetableau"  src="image/$img1" />
                            </td>
                            <td class="$class2">
                                <img class="imagetableau" src="image/$img2" />
                            </td>
                            <td class="$class2">
                                <img class="imagetableau" src="image/$img3" />
                            </td>
                            <td class="$class2">
                                <img class="imagetableau" src="image/$img4" />
                            </td>
                        </tr>
                        <tr>
                            
                            <td class="$class2">
                                <img class="imagetableau" src="image/$img5" />
                            </td>
                            <td class="$class2">
                                <img class="imagetableau" src="image/$img6" />
                            </td>
                        </tr>
                    </table>
                    
                    
                    

                </div>
    
    
HTML;
}


function carttext($text, $id)
{
    return <<<HTML
    
    <div class="parcheminvierge" id="$id">
                    <img class="image" src="image/parchemin_vierge.png">
                    <p class="textdanscartsimpletable">{$text}</p>
                    
                    
                </div>
    
    
HTML;
}

function cartlien($text, $id, $lien1, $lien2, $lien3, $lien4, $textlien1, $textlien2, $textlien3, $textlien4, $classlien1, $classlien2, $classlien3, $classlien4)
{
    return <<<HTML
    
    <div class="parcheminvierge" id="$id">
                    <img class="image" src="image/parchemin_vierge.png">
                    <p class="textdanscartsimpletable">{$text}</p>
                    <p class="$classlien1"> <a href="$lien1" target="_blank">{$textlien1}</a>
                    <p class="$classlien2"> <a href="$lien2" target="_blank">{$textlien2}</a>
                    <p class="$classlien3"> <a href="$lien3" target="_blank">{$textlien3}</a>
                    <p class="$classlien4"> <a href="$lien4" target="_blank">{$textlien4}</a>
                    
                    
                </div>
    
    
HTML;
}


?>



<script type="text/javascript" src="main.js"></script>