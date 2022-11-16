<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>VBLAZE WDC Portal || St. Thomas College of Engineering & Technology, Sivapuram, Mattannur was established by St Thomas Educational Society, Adoor</title>
   <meta name="description" content="St Thomas Engineering College, Sivapuram, Mattannur was established by St Thomas Educational Society, Adoor with a view to impart high quality engineering education through systematic studies and efficient training. The college has a team of eminent faculty members and a disciplined atmosphere which help to promote a holistic approach to learning. There is a right balance of cognitive, conceptual, ethical, humane and spiritual growth as a whole. . The institution within its short span of existence plans to be a centre of excellence in engineering education, by bringing out the young engineers devoted and socially committed.The college is approved by the All India council for Technical Education and affiliated to both Kannur University and A P J Abdul Kalam Technological University placement Portal">
   <meta name="keywords" content="ktu, kannur university, St.Thomas College of Engineering, Sivapuram, Mattannur, Kannur, Kerala, India, Kerala Technological University, Apj Abdulkalam, jose thomas, Engineering College, Stthomas Kannur, stm, stc, B.Tech, Civil Engineering, Mechanical Engineering, Electronics and COmmunication Engineering, COmputer Scinece and Engineering, Maloor, Kannur Airport">
   <meta name="author" content="VBLAZE - STM Design Club">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles/normalize.css" />
    <link rel="stylesheet" href="./styles/index.css" />
  </head>
  <body>
    <div class="wrapper">
      <nav class="nav">
        <ul class="nav__list" role="menubar">
          <li class="nav__item nav__item--isActive">
            <a
              href="#section"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Home"
            >
              <svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  fill="#6563ff"
                  d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"
                />
              </svg>
            </a>
          </li>
          <li class="nav__item">
            <a
              href="#"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Favorite projects"
            >
              <svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                />
              </svg>
            </a>
          </li>
          <li class="nav__item">
            <a
              href="#"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Informational messages"
              ><svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M12,11a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V12A1,1,0,0,0,12,11Zm0-3a1,1,0,1,0,1,1A1,1,0,0,0,12,8Zm0-6A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"
                />
              </svg>
            </a>
          </li>
          <li class="nav__item">
            <a
              href="#"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Collections"
            >
              <svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M2.5,10.56l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,0-1.73l-9-5.2a1,1,0,0,0-1,0l-9,5.2a1,1,0,0,0,0,1.73ZM12,5.65l7,4-7,4.05L5,9.69Zm8.5,7.79L12,18.35,3.5,13.44a1,1,0,0,0-1.37.36,1,1,0,0,0,.37,1.37l9,5.2a1,1,0,0,0,1,0l9-5.2a1,1,0,0,0,.37-1.37A1,1,0,0,0,20.5,13.44Z"
                />
              </svg>
            </a>
          </li>
          <li class="nav__item">
            <a
              href="#"
              class="nav__link focus--box-shadow"
              role="menuitem"
              aria-label="Analytics"
            >
              <svg
                class="nav__icon"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M6,13H2a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1H6a1,1,0,0,0,1-1V14A1,1,0,0,0,6,13ZM5,21H3V15H5ZM22,9H18a1,1,0,0,0-1,1V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V10A1,1,0,0,0,22,9ZM21,21H19V11h2ZM14,1H10A1,1,0,0,0,9,2V22a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V2A1,1,0,0,0,14,1ZM13,21H11V3h2Z"
                />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
      <main class="main">
        <header class="header">
          <div class="header__wrapper">
            <form action="" class="search">
              <button class="search__button focus--box-shadow" type="submit">
                <svg
                  class="search__icon"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"
                  />
                </svg>
              </button>
              <input
                class="search__input focus--box-shadow"
                type="text"
                placeholder="Project search"
              />
            </form>
            <div class="profile">
              <button class="profile__button">
                <span class="profile__name"></span>
                <img
                  class="profile__img"
                  src="https://i.ibb.co/6HcTBPk/585e4bf3cb11b227491c339a.png"
                  alt="Profile picture"
                  loading="lazy"
                />
              </button>
            </div>
          </div>
        </header>

        <section>
        <h4 style="font-size: 16px;">VBLAZE Project Highlight</h4>

<div class="scrollmenuitems">

<div class="column">
<a href="https://www.stthomaskannur.ac.in/ignite2022/">
<div class="instaslider">

    <div class="instaslide">

          <div class="circle">

 <img src="https://i.postimg.cc/g2RsyT6s/15364825-5601440.jpg" alt="" />

  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"

     xml:space="preserve">  

    <circle cx="50" cy="50" r="40" ></circle>

  </svg>

</div>
</a>
IGNITE 2022
    </div>
    <a href="https://www.stthomaskannur.ac.in/xtasy2022/">
<div class="instaslide">
          <div class="circle">

  <img src="https://i.postimg.cc/Pqj4SQWj/837276-preview.jpg" alt="" />

  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"

     xml:space="preserve">  

    <circle cx="50" cy="50" r="40" ></circle>

  </svg>

</div>
</a>
XTASY 2022
    </div>


    <div class="instaslide">

          <div class="circle">

 <img src="https://i.postimg.cc/g2RsyT6s/15364825-5601440.jpg" alt="" />

  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"

     xml:space="preserve">  

    <circle cx="50" cy="50" r="40" ></circle>

  </svg>

</div>
WDC VBLAZE
    </div>

<div class="instaslide">

          <div class="circle">

  <img src="https://i.postimg.cc/vTPyzvc8/download.jpg" alt="" />

  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"

     xml:space="preserve">  

    <circle cx="50" cy="50" r="40" ></circle>

  </svg>

</div>
PLACEMENT
    </div>

    <div class="instaslide">

          <div class="circle">

  <img src="https://i.postimg.cc/ncNTDJMM/14327665-5474209.jpg" alt="" />

  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"

     xml:space="preserve">  

    <circle cx="50" cy="50" r="40" ></circle>

  </svg>

</div>
COLLEGE WEBSITE
    </div>

</div>

</div>

    </div>

</body>

<script src="source.js"></script>


        </section>
        <a href="https://www.udemy.com/course/html-javascript-bootstrap-certification-course/?ranMID=39197&ranEAID=KLBDeI3Y*Vs&ranSiteID=KLBDeI3Y.Vs-q5gaANZkVjKmV4BgT8QWbQ&LSNPUBID=KLBDeI3Y*Vs&utm_source=aff-campaign&utm_medium=udemyads&couponCode=YOUACCEL59794"><button><h5>LIMITED - FREE UDAMY COURSE</h5></button></a>
       <center><h1>VBLAZE WDC</h1></center>
        <section class="section">
          <center>
          <h1>DAY 1</h1>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/sEAyggVL9tw?modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <b><p style="font-size: 16px;"><a href="https://youtu.be/DDd_PIuT4RA">Windows Installation - Click Here</a>
            <br><a href="https://youtu.be/VFsYmO0HIQw">Linux Installation Click Here</a>
            <br><a href="https://youtu.be/JoR8ap1URrU">Mac Installation Click Here</a>
          </p></b><br/>
          <a href="https://surveyheart.com/form/636f36d4b85f9f7c469be0c0"><button style="background-color: #9174d8;"><h5>FEEDBACK</h5></button></a>
          </center>
        </section>
        <br />
        <section class="section">
          <center>
          <h1>DAY 2</h1>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/B-AnAQnNkSk?modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             <a href="https://youtu.be/o1HYsdwvFEI"><p>Assignment 2 - Click Here</p></a>
          <a href="https://surveyheart.com/form/636f36e170f5d478fbab161b"><button style="background-color: #9174d8;"><h5>FEEDBACK</h5></button></a>
          </center>
        </section>
        <br />
        <section class="section">
          <center>
     

<h1>DAY 3</h1>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/S0qIiXs3MeE" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>CSS</p>
          <a href="https://surveyheart.com/form/636f36e170f5d478fbab161b"><button style="background-color: #9174d8;"><h5>FEEDBACK</h5></button></a>
          </center>
        </section>

        <section class="section">
          <center>
       <!--   <h1>DAY 4</h1>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/4g7EG84KC3k?modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <a href="https://surveyheart.com/form/636f370270f5d478fbab182c"><button style="background-color: #9174d8;"><h5>FEEDBACK</h5></button></a>
          </center>
        </section>
        <br />

        <section class="section">
          <center>
          <h1>DAY 5</h1>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/fnTs-daHqyw?modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <a href="https://surveyheart.com/form/636f370ce5fab37a9bae6a5a"><button style="background-color: #9174d8;"><h5>FEEDBACK</h5></button></a>
          </center>
        </section>
        <br /> --> 

        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQN_quneiiq7fYTUh7EpKsNmhZQ6RHr956ZK12BeY0JIvCOSstfA59bA03NF2Rfip3q0MDkUpghlBie/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false" height="500cm" width="100%"></iframe>        <section class="section">
          <header class="section__header">
            <h2 class="section__title">Teams</h2>
            <a href="#" class="section__link">View all</a>
          </header>
          <ul class="team">
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                  <ul class="photo">
                    <li class="photo__item">
                      <span class="photo__substrate">+2</span>
                    </li>
                    <li class="photo__item">
                      <img
                        src="./img/julian-wan-WNoLnJo7tS8-unsplash.jpg"
                        alt="Jack's photo"
                      />
                    </li>
                    <li class="photo__item">
                      <img
                        src="./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
                        alt="Jessica's photo"
                      />
                    </li>
                  </ul>
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                    <svg
                      enable-background="new 0 0 515.555 515.555"
                      height="512"
                      viewBox="0 0 515.555 515.555"
                      width="512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                  <p class="team__name">1. Basic Feedback Form Using HTML</p>
                  <time class="date" datetime="2020-05-05T10:00:00"
                    >05 , 2022</time
                  >
                </div>
              </a>
            </li>
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                  <ul class="photo">
                    <li class="photo__item">
                      <span class="photo__substrate">+6</span>
                    </li>
                    <li class="photo__item">
                      <img
                        src="./img/raychan-9UkAHVs5y7Y-unsplash.jpg"
                        alt="Yulia's photo"
                      />
                    </li>
                    <li class="photo__item">
                      <img
                        src="https://i.ibb.co/6HcTBPk/585e4bf3cb11b227491c339a.png"
                        alt="Jessica's photo"
                      />
                    </li>
                  </ul>
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                    <svg
                      enable-background="new 0 0 515.555 515.555"
                      height="512"
                      viewBox="0 0 515.555 515.555"
                      width="512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                  <p class="team__name">Git and Github</p>
                  <time class="date" datetime="2020-05-01T10:00:00"
                    >14 Nov, 2022</time
                  >
                </div>
              </a>
            </li>
            <li class="team__item">
              <a class="team__link focus--box-shadow" href="#">
                <div class="team__header">
                  <ul class="photo">
                    <li class="photo__item">
                      <img
                        src="./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
                        alt="Jessica's photo"
                      />
                    </li>
                  </ul>
                  <button
                    class="setting setting--absolute focus--box-shadow"
                    type="button"
                  >
                    <svg
                      enable-background="new 0 0 515.555 515.555"
                      height="512"
                      viewBox="0 0 515.555 515.555"
                      width="512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                      <path
                        d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                      />
                    </svg>
                  </button>
                </div>
                <div class="team__inform">
                  <p class="team__name">Design development</p>
                  <time class="date" datetime="2020-01-10T10:00:00"
                    >10 Nov, 2022</time
                  >
                </div>
              </a>
            </li>
          </ul>
        </section>
        <section class="section">
          <header class="section__header">
            <h2 class="section__title">Projects</h2>
            <div class="section__control">
              <button
                class="section__button focus--box-shadow"
                type="button"
                aria-label="Filter projects"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  role="presentation"
                >
                  <path
                    d="M20,8.18V3a1,1,0,0,0-2,0V8.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V13.82a3,3,0,0,0,0-5.64ZM19,12a1,1,0,1,1,1-1A1,1,0,0,1,19,12Zm-6,2.18V3a1,1,0,0,0-2,0V14.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V19.82a3,3,0,0,0,0-5.64ZM12,18a1,1,0,1,1,1-1A1,1,0,0,1,12,18ZM6,6.18V3A1,1,0,0,0,4,3V6.18a3,3,0,0,0,0,5.64V21a1,1,0,0,0,2,0V11.82A3,3,0,0,0,6,6.18ZM5,10A1,1,0,1,1,6,9,1,1,0,0,1,5,10Z"
                  />
                </svg>
              </button>
              <button
                class="section__button section__button--painted focus--box-shadow"
                type="button"
                aria-label="Add New project"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  role="presentation"
                >
                  <path
                    d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"
                  />
                </svg>
              </button>
            </div>
          </header>
          <ul class="project">
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                    <div
                      class="icon icon--viking"
                      aria-label="Icon of the 'Showcase Design' project"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                      >
                        <path
                          d="M7,10H9A1,1,0,0,0,9,8H7a1,1,0,0,0,0,2ZM21,4H13V3a1,1,0,0,0-2,0V4H3A1,1,0,0,0,2,5V15a3,3,0,0,0,3,3H9.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L11,19.41V21a1,1,0,0,0,2,0V19.41l2.29,2.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L14.41,18H19a3,3,0,0,0,3-3V5A1,1,0,0,0,21,4ZM20,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V6H20ZM7,14h6a1,1,0,0,0,0-2H7a1,1,0,0,0,0,2Z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name"
                      >1. Basic Feedback Form Using HTML</span
                    >
                  </div>
                  <div class="project__element project__photo">
                    <ul class="photo">
                      <li class="photo__item">
                        <span class="photo__substrate">+2</span>
                      </li>
                      <li class="photo__item">
                        <img
                          src="./img/julian-wan-WNoLnJo7tS8-unsplash.jpg"
                          alt="Jack's photo"
                        />
                      </li>
                      <li class="photo__item">
                        <img
                          src="./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
                          alt="Jessica's photo"
                        />
                      </li>
                    </ul>
                  </div>
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >17 November, 2022</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">Publish</span>
                  </div>
                  <div class="project__element project__setting">
                    <button
                      class="setting setting--rotate focus--box-shadow"
                      type="button"
                    >
                      <svg
                        enable-background="new 0 0 515.555 515.555"
                        height="512"
                        viewBox="0 0 515.555 515.555"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </a>
            </li>
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                    <div
                      class="icon icon--rajah"
                      aria-label="Icon for the project 'Book cover design'"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                      >
                        <path
                          d="M15,6H9A1,1,0,0,0,8,7v4a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V7A1,1,0,0,0,15,6Zm-1,4H10V8h4Zm3-8H5A1,1,0,0,0,4,3V21a1,1,0,0,0,1,1H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Zm1,17a1,1,0,0,1-1,1H6V4H17a1,1,0,0,1,1,1Z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name">2. Login Page Design</span>
                  </div>
                  <div class="project__element project__photo">
                    <ul class="photo">
                      <li class="photo__item">
                        <img
                          src="./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
                          alt="Jessica's photo"
                        />
                      </li>
                    </ul>
                  </div>
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >20 November, 2022</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--published">Publish</span>
                  </div>
                  <div class="project__element project__setting">
                    <button
                      class="setting setting--rotate focus--box-shadow"
                      type="button"
                    >
                      <svg
                        enable-background="new 0 0 515.555 515.555"
                        height="512"
                        viewBox="0 0 515.555 515.555"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </a>
            </li>
            <li class="project__item">
              <a href="#" class="project__link focus--box-shadow">
                <div class="project__wrapper">
                  <div class="project__element project__icon">
                    <div
                      class="icon icon--viking"
                      aria-label="Icon for the project 'Book cover design'"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        role="presentation"
                      >
                        <path
                          d="M14,18a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,14,18Zm-4,0a1,1,0,0,0,1-1V15a1,1,0,0,0-2,0v2A1,1,0,0,0,10,18ZM19,6H17.62L15.89,2.55a1,1,0,1,0-1.78.9L15.38,6H8.62L9.89,3.45a1,1,0,0,0-1.78-.9L6.38,6H5a3,3,0,0,0-.92,5.84l.74,7.46a3,3,0,0,0,3,2.7h8.38a3,3,0,0,0,3-2.7l.74-7.46A3,3,0,0,0,19,6ZM17.19,19.1a1,1,0,0,1-1,.9H7.81a1,1,0,0,1-1-.9L6.1,12H17.9ZM19,10H5A1,1,0,0,1,5,8H19a1,1,0,0,1,0,2Z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div class="project__element project__inform">
                    <span class="project__inform-name"
                      >3. A Portfolio Website (Challenge)</span
                    >
                  </div>
                  <div class="project__element project__photo">
                    <ul class="photo">
                      <li class="photo__item">
                        <img
                          src="./img/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
                          alt="Jessica's photo"
                        />
                      </li>
                    </ul>
                  </div>
                  <div class="project__element project__date">
                    <time class="date" datetime="2020-05-05T10:00:00"
                      >24 November, 2022</time
                    >
                  </div>
                  <div class="project__element project__status">
                    <span class="status status--in-work">End</span>
                  </div>
                  <div class="project__element project__setting">
                    <button
                      class="setting setting--rotate focus--box-shadow"
                      type="button"
                    >
                      <svg
                        enable-background="new 0 0 515.555 515.555"
                        height="512"
                        viewBox="0 0 515.555 515.555"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="m303.347 18.875c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                        <path
                          d="m303.347 405.541c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138c25.166-25.167 65.97-25.167 91.138 0"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </section>
      </main>
      <aside class="aside">
        <section class="section">
          <div class="aside__control">
<a href="logout.php">
            <button
              class="aside__button focus--box-shadow"
              type="button"
              aria-label="Close profile settings"
            >
<svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14 4L18 4C19.1046 4 20 4.89543 20 6V18C20 19.1046 19.1046 20 18 20H14M3 12L15 12M3 12L7 8M3 12L7 16" stroke="#001A72" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


            </button>
</a>
            <button
              class="aside__button aside__button--notification focus--box-shadow"
              type="button"
              aria-label="You have new feedback"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                role="presentation"
              >
                <path
                  d="M18,13.18V10a6,6,0,0,0-5-5.91V3a1,1,0,0,0-2,0V4.09A6,6,0,0,0,6,10v3.18A3,3,0,0,0,4,16v2a1,1,0,0,0,1,1H8.14a4,4,0,0,0,7.72,0H19a1,1,0,0,0,1-1V16A3,3,0,0,0,18,13.18ZM8,10a4,4,0,0,1,8,0v3H8Zm4,10a2,2,0,0,1-1.72-1h3.44A2,2,0,0,1,12,20Zm6-3H6V16a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"
                />
              </svg>
            </button>
          </div>
          <div class="profile-main">
            <button
              class="profile-main__setting focus--box-shadow"
              type="button"
            >
              <img
                class="profile-main__photo"
                src="https://i.ibb.co/6HcTBPk/585e4bf3cb11b227491c339a.png"
                alt="Profile photo"
              />
            </button>
            
            <h1 class="profile-main__name"><?php echo $name ?></h1>
          </div>
          <ul class="statistics">
            <li class="statistics__entry">
              <a class="statistics__entry-description" href="#">Teams</a
              ><span class="statistics__entry-quantity">5</span>
            </li>
            <li class="statistics__entry">
              <a class="statistics__entry-description" href="#">Projects</a
              ><span class="statistics__entry-quantity">3</span>
            </li>
            <li class="statistics__entry">
              <a class="statistics__entry-description" href="#">Feedback</a
              ><span class="statistics__entry-quantity">14</span>
            </li>
          </ul>
          <div class="banner">
            <h3 class="banner__title">Premium access</h3>
            <p class="banner__description">50Rs - Create teams without limits</p>
            <a href="upi://pay?pa=mminhajmahroof@oksbi&pn=SenderName&tn=TestingGpay&am=50&cu=INR"> 
               <button class="banner__button" type="button">
              Get Premium Access
            </button> </a>
          </div>
        </section>
      </aside>
    </div>
  </body>
</html>
