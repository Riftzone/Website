<!DOCTYPE html>
<html lang="de">

<style>

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: #ffa60077;
        border-radius: 10px;
    }

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif" href="{{ asset('img/riftzone3.0.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Riftzone Website</title>

    <meta name="author" content="unlxqit">
    <meta name="copyright" content="NeverStopGaming.">
    <meta name="description" content="Startseite!">
    <meta name="keywords" content="Riftzone, Streamer, Youtuber, NeverStopGaming.net, NeverStopGaming">
    <meta name="page-topic" content="Gesellschaft">
    <meta name="page-type" content="Produktinfo">
    <meta name="audience" content="Fans">
    <meta http-equiv="content-language" content="de">
    <meta name="robots" content="index, follow">

</head>

<body>
<section id="header">
    <div class="header container">
        <div class="nav-bar">
            <div class="brand">
                <a href="#hero">
                    <h1>Riftzone.me</h1>
                </a>
            </div>
            <div class="nav-list">
                <div class="hamburger">
                    <div class="bar"></div>
                </div>
                <ul>
                    <li><a href="#hero" data-after="Home">Home</a></li>
                    <li><a href="https://dc.riftzone.me" data-after="Team">Team</a></li>
                    <li><a href="#projects" data-after="Social Media">Social Media</a></li>
                    <li><a href="#about" data-after="Über uns">Über uns</a></li>
                    <li><a href="https://neverstopgaming.net/" data-after="Partner">Partner</a></li>
                    <li><a href="#hero" data-after="Kontakt">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="hero">
    <div class="hero container">
        <div>
            <h1><B>Willkommen auf</B><span></span></h1>
            <h1><span></span></h1>
            <h1><B>Riftzone.me</B><span></span></h1>
            <!-- <a href="#about" type="button" class="cta">Über uns</a> -->
        </div>
    </div>
</section>
<section id="projects">
    <div class="projects container">
        <div class="projects-header">
            <h1 class="section-title"><span><B>Social Media</B></span></h1>
        </div>
        <div class="all-projects">
            <div class="project-item">
                <div class="project-info">
                    <h1><a href="https://www.twitch.tv/riftzone" target="_blank"><font color=purple><B>Twitch</B></font></a>
                    </h1>
                    <h2>Aufgaben auf Twitch</h2>
                    <p>Riftzone versucht so oft es nur geht zu streamen und euch mit diesen zu unterhalten.
                        Hierbei reagiert er mit euch auf Videos/Clips oder spielt jegliche Games, auf die er gerade so
                        Lust hat</p>
                </div>
                <div class="project-img">
                    <img src="{{ asset('img/Twitch.png') }}" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1><a href="https://www.youtube.com/channel/UCVZmhmDtF8wCHNqpviNsAlw" target="_blank"><font
                                color=red><B>Youtube</B></font></a></h1>
                    <h2>Aufgaben auf Youtube</h2>
                    <p>Riftzone versucht regelmäßig ein Video hochzuladen und euch somit humorvollen Content bietet.
                        Der Content basiert hauptsächlich aus OmeTV</p>
                </div>
                <div class="project-img">
                    <img src="{{ asset('img/YouTube_23392.png') }}" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1><a href="https://www.tiktok.com/@riftzoneyt?lang=de-DE" target="_blank"><font color=cyan><B>Tiktok</B></font></a>
                    </h1>
                    <h2>Aufgaben auf Tiktok</h2>
                    <p>Riftzone lädt auf seinem Tiktok Account jegliche OmeTV Clips hoch, die sowohl in seinen Youtube
                        Video wiederzufinden sind, als
                        auch einzelne, welche es nicht mehr in das Video mit reingeschafft haben
                    </p>
                </div>
                <div class="project-img">
                    <img src="{{ asset('img/tiktok1.png') }}" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>
                        <a href="https://dc.riftzone.me/" target="_blank"><font color=blue><B>Discord</B></font>
                        </a>
                    </h1>
                    <h2>Aufgaben auf Discord</h2>
                    <p>Mit unserem Discord Server möchten wir eine aktive Verbindung zur Community herstellen.
                        Grundsätzlich ist hierbei die Kommunikation untereinander
                        ein wesentlicher Punkt.
                    </p>
                </div>
                <div class="project-img">
                    <img src=" {{ asset('img/discord_logo2.png') }}" alt="img">
                </div>
            </div>
            <!-- <div class="project-item">
                <div class="project-info">
                  <h1></h1>
                  <h2></h2>
                  <p></p>
                </div>
                <div class="project-img">
                  <img src="./img/" alt="img">
                </div>
              </div> -->
        </div>
    </div>
</section>
<section id="about">
    <div class="about container">
        <div class="col-left">
            <div class="about-img">
                <img class="rund" src="{{ asset('img/riftzone-effect.gif') }}" alt="img">
            </div>
        </div>
        <div class="col-right">
            <h1 class="section-title">Über <span>uns</span></h1>
            <h2>Riftzone und Team</h2>
            <p>Im Wesentlichen steht Riftzone natürlich im Vordergrund, wenn es um Social Media und weitere Promotion
                geht.
                Das Team kümmert sich im Hintergrund währenddessen um die Moderation, Administration und Planung von
                Community
                Projekten. Diese Projekte werden zusammen mit der Community gestaltet und insbesondere so geplant, dass
                jeder
                was von diesen hat.
                <br><br>
            </p>
        </div>
    </div>
</section>
<section id="footer">
    <div class="footer container">
        <div class="brand">
            <h1>Riftzone</h1>
        </div>
        <p>Copyright © 2021-{{ \Carbon\Carbon::now()->format('Y') }} by RiftzoneTeam</p>

        <br>
        <iframe src="https://discord.com/widget?id=783335840008896522&theme=dark" width="350" height="500"
                allowtransparency="true" frameborder="0"
                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </div>
</section>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('js/main.js') }}" type="text/javascript"></script>
</body>
</html>
