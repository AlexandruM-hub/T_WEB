<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="css/main_style.css">
    <title>Minerale</title>

  </head>

  <body>
    <header>
      <main>

      <nav class="navbar">
        <div class="EmblemaLeft">
            <div class="ImgEmblema">
                  <a href="main_page.html"><img src="img/emblema.png" alt="Minerale" class="EmblemaImg"></a>
              </div>
              <div class="TxtEmblema">
                  <a class="TextMinerale" href="main_page.html">Minerale.md</a>
              </div>
              <div class="menu-toggle" id = "mobile-menu">
                  <span class="bar"></span>
                  <span class="bar"></span>
                  <span class="bar"></span>
                </div>
          </div>
          <div>
        <ul class="MenuOptions">
          <li><button id="registerID" class="nav-links" onclick="document.getElementById('id02').style.display='block'">Register</button></li>
          <li><button id="loginID" class="nav-links" onclick="document.getElementById('id01').style.display='block'">Login</button></li>
          <li><a href="aur.html" class ="nav-links">Aur</a></li>
          <li><a href="argint.html" class ="nav-links">Argint</a></li>
          <li><a href="platina.html" class ="nav-links">Platina</a></li>
          <li><a href="main_page.html" class ="nav-links">Home</a></li>
        </ul>
      </div>
    </nav>
  </main>
  </header>

  <!--- Login modul --->
  <div id="id01" class="modal">
    <!--- Button pentru a inchide fereastra --->
    <span onclick="document.getElementById('id01').style.display='none'"
  class="close" title="Close Modal">&times;</span>

    <form class="modal-content animate"  id="loginForm">
      <div class="imgcontainer">
        <img src="img/welcome.png" alt="Avatar" class="avatar" id='welcomeImgLogin'>
      </div>

      <div class="wrongLogin">
        <img src="img/Wrong.png" alt="Wrong password or username" id="wrongLogin">
      </div>

      <div class="container">
        <div class="boxesIn">
          <div class="boxIn">
            <label for="unameLogin"><b>Username</b></label>
            <input id="usernames" type="text" placeholder="Enter Username" name="usernames" required>
            <h5  id="usercheck" style="color: red;" ></h5>
          </div>

          <div class="boxIn">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id= "password" required>
            <h5 id="passcheck" style="color: red;"></h5>

            <div class="forgot_password">
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>

          </div>
        </div>

        <div class="socialMedia_Container">

          <span class="logInWith">Log in with</span>

          <div class="social_box">
            <a href="#"><img src = "img/google.png" alt ="google"></a>
            <a href="#"><img src = "img/facebook.png" alt ="google"></a>
            <a href="#"><img src = "img/instagram.png" alt ="google"></a>

          </div>
        </div>
      </div>

      <div class="LogContainer" style="background-color: inherit">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn">Cancel</button>
        <div class="loginButton">

          <button  id ="submitbtn" class="btn" type="submit">Login</button>


          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

      </div>
    </form>
  </div>

  <!--- Register modul --->

  <div id="id02" class="modal">
    <!--- Button pentru a inchide fereastra --->
    <span onclick="document.getElementById('id02').style.display='none'"
  class="close" title="Close Modal">&times;</span>

    <form class="modal-content animate">
      <div class="imgcontainer">
        <img src="img/welcome.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <div class="boxesRegister" action = "php/register.php">

          <div class="boxIn">
            <label for="uname"><b>Name</b></label>
            <div class="inputs">
              <input id="usernamesRegister" type="text" placeholder="Enter Username" name="usernamesRegister" required>
            </div>
            <h5 id="usercheckRegister" style="color: red;" ></h5>
          </div>

          <div class="boxIn">
            <label for="psw"><b>Password</b></label>
            <div class="inputs">
              <input id="passwordRegister" type="password" placeholder="Enter Password" name="passwordRegister" required>
              <h5 id="passcheckRegister" style="color: red;"></h5>
            </div>
          </div>

          <div class="boxIn">
            <label for="psw"><b>Confirm Password</b></label>
            <div class="inputs">
              <input id="conpassword" type="password" placeholder="Enter Password" name="psw" required>
                <h5 id="conpasscheck" style="color: red;"></h5>
            </div>
          </div>

          <div class="boxIn">
            <label for="psw"><b>Country</b></label>
            <div class="inputs">
              <input type="text" id= "country" placeholder="Enter Country" name="country" required>
            </div>
          </div>

          <div class="boxIn">
            <label for="psw"><b>Mail</b></label>
            <div class="inputs">
              <input id="email" type="text" placeholder="Enter mail address" name="email" required>
            </div>
            <small id="emailvalid" class="form-text
                text-muted invalid-feedback">
                    Your email must be a valid email
              </small>

          </div>

        </div>

        <div class="socialMedia_Container">
          <span class="logInWith">Log in with</span>

          <div class="social_box">
            <a href="#"><img src = "img/google.png" alt ="google"></a>
            <a href="#"><img src = "img/facebook.png" alt ="google"></a>
            <a href="#"><img src = "img/instagram.png" alt ="google"></a>

          </div>
        </div>
      </div>

      <div class="LogContainer" style="background-color: inherit">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="btn">Cancel</button>
        <div class="loginButton">

          <button  id = "submitbtnRegister" class="btnn" type="submit">Register/Login</button>


          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

      </div>
    </form>
  </div>

  <!--- Mail modul --->
  <div id="id03" class="modal">
    <!--- Button pentru a inchide fereastra --->
    <span onclick="document.getElementById('id03').style.display='none'"
  class="close" title="Close Modal">&times;</span>

    <form class="modal-content3 animate" action="php/Contact.php">

      <div class="container">
        <div class="boxesMessage">

          <div class="boxIn">
            <label for="mailMail"><b>Enter your Mail</b></label>
            <div class="inputs">
              <input type="text" placeholder="Enter your mail" id ="mailMail" name="mailMail" required>
            </div>
          </div>

          <div class="boxIn">
            <label for="psw"><b>Message</b></label>
            <div class="inputs">
                <textarea class="mailMessage" id="mailText" type="text" rows="rows" placeholder="Message" name="mailText" required></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="LogContainer" style="background-color: inherit">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="submit">Cancel</button>
        <div class="loginButton">
          <button  class="btn" type="submit">Send</button>
        </div>
      </div>
    </form>
  </div>


  <span class="mail">
    <button class="btnMail" onclick="document.getElementById('id03').style.display='block'"><img src="img/mes.png" alt="Mail us" ></button>
  </span>

  <!--- INTRO--->
  <div class="intro">
    <div class="intro-text">
      <h1 class="hide">
        <span class="text-span">I</span>
      </h1>
      <h1 class="hide">
        <span class="text-span">Love</span>
      </h1>
      <h1 class="hide">
        <span class="text-span">T.WEB</span>
      </h1>
    </div>
  </div>
  <div class="slider"></div>

<!--- LOGGED IN --->
<div class="logged_in_div" id="logged_in_id">
  <img src="img/welcome.png" alt="welcome">
</div>

<!---CONTINUT --->
    <div class="Back">
      <div class="ClearFix">
        <h1>Totul despre minerale</h1>
      <article class="TextMain">
        <div >
          <img class="Image1" src="img/mineral_1.jpg" alt="Feldspat">
        </div>
          <p>   Mineralele sunt substanțe naturale solide, mai rar fluide, cu formă proprie cristalizată, alcătuite din unul sau mai multe elemente chimice, care intră în componența rocilor și minereurilor. După conținutul lor ele se pot împărți în minerale metalifere și respectiv nemetalifere (sare, gips, azbest, mică, feldspat), iar cele metalifere se pot împărți la rândul lor în feroase și neferoase.
          Mineralele sunt de regulă substanțe neomogene din punct de vedere chimic, fiind frecvent substanțe solide cristalizate în sisteme diferite de cristalizare, de aceasta ocupându-se ramura mineralogiei, cristalografia.
          Exemple de minerale: cuarțul (SiO2), pirita (FeS2), galena (PbS), blenda (ZnS), calcopirita (CuFeS2), calcitul (CaCO3), gipsul (CaSO4*2 H2O), sau fără a mai aminti formula chimică, sunt: stibina, rodocrozitul, baritina (baros=greu), grafitul și diamantul.</p>
          <p>Determinarea unui mineral se face prin cunoașterea proprietăților lui fizice: - culoare - luciu - spărtura (proaspătă neoxidată) - duritatea - clivajul (modul de spargere), greutatea specifică, proprietăți magnetice și radioactive etc.
            Duritatea mineralelor este o proprietate importantă, aceasta determinând forma de exploatare a zăcământului).
            Mineralogul austriac Carl Friedrich Christian Mohs a stabilit o scară a durității mineralelor după cum urmează: 1.talc, 2.gips, 3.calcit, 4.fluorina, 5.apatit, 6.ortoza, 7.cuarț, 8.topaz, 9.corindon 10.diamant.</p>
          <p>În sistematica modernă mineralele au fost reclasificate, luându-se în considerare: Formula chimică, Sistem de cristalizare, Clasă, Culoare, Urmă, Duritate, Densitate, Luciu, Transparență, Spărtură, Clivaj, Habitus, Suprafața cristalului, Cristale gemene, Punct de topire, Efect piezoelectric, Propriețăți optice, Refracția, Refracție dublă, Pleochroismus Deviație optică, Unghi de dispersie Reactivitate chimică, Radioactivitate, Magnetism.</p>
          <p>1. Elemente native, sunt elemente chimice care se găsesc în natură în forme pure necombinate; se cunosc 23 asemenea elemente (18 metale și 5 nemetale), formele lor modificate și unele aliaje. Exemple: cupru, argint, aur, fier, sulf, grafit, diamant, hapkeit (Fe2S), moissanit (SiC), schreibersit ((Fe,Ni)3P).
          Cele mai bune exemple sunt grafitul și diamantul care, având diferite proprietăți, diamantul fiind cea mai dură substanță de pe Terra, iar grafitul un mineral cu duritate mică, au aceeași formulă chimică, și anume C-carbon.</p>
          <p>2. Sulfiți și săruri de sulf, sunt combinații dintre sulf și seleniu, telur, arsen, stibiu și bismut. În această categorie intră cca. 600 de minerale. Exemple: galenă (PbS), pirită (FeS2), blendă (ZnS), cinabru (HgS).</p>
          <p>
            3. Halogenați cca. 140 de halogenide constau dintr-o legătură a halogenilor (fluor, clor, brom, iod) cu cationii de sodiu, potasiu și calciu, exemple: fluorină (Ca F2) halit (sare gemă, NaCl), clorură de amoniu, silvină.<br>
          </p>
          <p>
          3. Oxizi și hidroxizi s-au format printr-o legătură a unui metal sau nemetal cu oxigenul sau cu o grupare hidroxilică (-OH). Astfel au luat naștere cca. 400 de oxizi respectiv hidroxizi, exemple: spinel (MgAl2O4), hematit (Fe2O3), magnetit (Fe3O4), corindon (Al2O3), pehblendă (UO2), goethit (FeO(OH)).
          </p>
          <p>
          4. Carbonați ,nitrați, borați: în această categorie intră sărurile acidului carbonic, boric și azotic. Exemple: aragonit, azurit, dolomit (CaMg(CO3)2), calcit (CaCO3), malachit (Cu2CO3(OH)2), borax (Na2B4O5(OH)4 · 8 H2O), sassolit (H3BO3).
          </p>
          <p>
          5. Sulfați, selenați, telurați, cromați, molibdenați, wolframați: aici intră săruri ale acidului sulfuric, cromic, molibdenic și wolframic. Această grupă cuprinde cca. 700 de minerale. Exemple: anhidrit(CaSO4), gips (CaSO4 · H2O), apatit (Ca5(PO4)3(F,Cl,OH)), turcoaz (CuAl6(PO4)4(OH)8 · 5H2O), carnotit (K2(UO2)2(VO4)2 · 3H2·), legrandit (Zn2(AsO4)(OH)·H2O), wulfenit (PbMoO4), wolframit ((Fe,Mn)WO4).
           </p>
           <p>
          6. Fosfați, arsenați, vanadați: aici intră săruri ale acizilor cu formula generală H3XO4 unde X poate fi înlocuit cu elementele fosfor, vanadiu, arsen. Exemple: adamin, berlinit, descloizit, fluorapatit, mottramit, piromorfit.
           </p>
           <p>
          7. Silicați (și germanați) : această grupă de minerale este cea mai numeroasă, gruparea tetraedrică [ SiO4]4 stând la baza structurii mineralelor. Exemple: almandin (Fe3Al2(Si3O12)), zircon (ZrSiO4), andaluzit (Al2SiO5), topaz (Al2SiO4(OH,F)2), beril(Be3Al2Si6O18), cordierit (Mg2Al4Si5O18), epidot (Ca2(Al,FeIII,Mg)3(SiO4)3OH), zoisit (Ca2Al3(SiO4)3(OH)).
           </p>
           <p>
          8. Minerale organice: această categorie de minerale cuprinde sărurile acizilor organici alifatici și aromatici cu carbon, (CnHm) și azot, (de forma amidelor R-X(=O)n-NR'2 sau acizilor heterociclici) și rășini. Exemple: : abelsonit, melit, evenkit. Chihlimbarul nu este considerat mineral de către IMA (International Mineralogical Association).
          </p>

      </article>

    </div>



        <h2 class="Materiale" >Principalele minerale industriale</h2>


        <table border align="center" class="tabel">
          <tr>
            <th><b>Minerale</b></th><th><b>Caracteristici</b></th><th><b>Întrebuințare</b></th>
          </tr>
          <tr>
            <th>Albit</th><th>alb</th><th>Sticlă, ceramică</th>
          </tr>
          <tr>
            <th>Azbet</th><th>alburiu, fibros</th><th>Materiale rezistente la foc</th>
          </tr>
          <tr>
            <th>Coridon</th><th>Abraziv</th><th>Șmirghel, pietre de polizat</th>
          </tr>
          <tr>
            <th>Fluorit</th><th>casant, mai multe culori</th><th>Producția de fier și oțel, lentile de microscop,<br> olărit, emailuri, pastă de dinți,  etc.</th>
          </tr>
          <tr>
            <th>Grafit</th><th>moale, gras</th><th>Mine de creion</th>
          </tr>
          <tr>
            <th>Gips</th><th>alb, cretos</th><th>Stomatologie, mulaje, ciment, cretă școlară</th>
          </tr>
          <tr>
            <th>Halit</th><th>incolor</th><th>Sare gema</th>
          </tr>
        </table>

        <h2>Pentru mai multe informatii despre minereurile propuse faceti click pe imagine</h2>

        <div class="Minereuri">
          <div class="box">
            <a href="aur.html"><img src="img/aur.png" alt="Aur"></a>
            <div class="denum">
              <a  href="aur.html">Aur</a>

            </div>
          </div>

          <div class="box">
            <a href="argint.html"><img src="img/argint.png" alt="Argint"></a>
            <div class="denum">
              <a  href="argint.html">Argint</a>

            </div>
          </div>

          <div class="box">
            <a href="platina.html"><img src="img/platina.png" alt="Platina"></a>
            <div class="denum">
              <a  href="platina.html">Platina</a>
            </div>
          </div>
        </div>

      </div>
        <script src="js/modal.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"
        integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"   integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="js/register.js">

        </script>
        <script src="js/slider.js"></script>
        <script src="js/login.js"></script>
      <script src="js/menu_bar.js"></script>
  </body>
</html>
