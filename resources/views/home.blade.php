@extends('master.master')

@section('main')
    <section class="hero is-primary is-medium hero-home-bg">
        <div class="hero-body">
            <div class="container has-text-centered">
                <img class="hero-home-logo" src="{{asset('images/logo_white.svg')}}" alt="Webblue Media" />
                <h1 class="title is-size-1-desktop is-size-2-mobile">
                    Webblue Media
                </h1>
                <h2 class="subtitle is-size-4-desktop is-size-5-mobile">
                    bei Andreas Scholten
                </h2>
                <h2 class="subtitle is-size-6-desktop is-size-7-tablet is-size-7-mobile">
                    Coding with  <i class="fa fa-heart"></i> in Hamburg
                </h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns milestones is-centered is-multiline">
                <div class="column is-3-fullhd is-5-widescreen is-6-tablet is-12-mobile">
                    <div class="milestone">
                        <header class="is-flex">
                        <span class="fa-stack fa-md">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-street-view fa-stack-1x fa-inverse"></i>
                        </span>
                            <h3 class="title is-4 is-spaced">Dein Berater</h3>
                        </header>
                        <p>
                            Nicht sicher, wie das Projekt am besten umgesetzt werden sollte? Unerfahren im Bereich SEO, Onlinemarketing und Nutzererfahrung? Ich berate dich gerne bei wichtigen Fragen!
                        </p>
                    </div>
                </div>
                <div class="column is-3-fullhd is-5-widescreen is-6-tablet is-12-mobile">
                    <div class="milestone">
                        <header class="is-flex">
                        <span class="fa-stack fa-md">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-object-group fa-stack-1x fa-inverse"></i>
                        </span>
                            <h3 class="title is-4 is-spaced">Dein Designer</h3>
                        </header>

                        <p>
                            Gutes Aussehen verkauft sich besser, auch im Bereich von Webseiten und die aktuellen Trends wechseln ständig. Gut, dass ich bestens darüber informiert bin und mein Wissen gerne mit dir teile!
                        </p>
                    </div>
                </div>
                <div class="column is-3-fullhd is-5-widescreen is-6-tablet is-12-mobile">
                    <div class="milestone">
                        <header class="is-flex">
                        <span class="fa-stack fa-md">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                            <h3 class="title is-4 is-spaced">Dein Programmierer</h3>
                        </header>
                        <p>
                            Nicht nur ein gutes Design zählt, sondern auch eine fehlerfreie Benutzererfahrung mit modernenen Systemen unter der Haube. Aktuelle Technologie gibt es bei mir frei Haus.
                        </p>
                    </div>
                </div>
                <div class="column is-3-fullhd is-5-widescreen is-6-tablet is-12-mobile">
                    <div class="milestone">
                        <header class="is-flex">
                        <span class="fa-stack fa-md">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-cube fa-stack-1x fa-inverse"></i>
                        </span>
                            <h3 class="title is-4 is-spaced">Dein Rundumpaket</h3>
                        </header>
                        <p>
                            Du möchtest nicht nur eine Webseite online bringen, sondern eine tolle Erfahrung für deine Besucher bieten? Das will ich auch und deswegen bist du bei mir genau richtig aufgehoben!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section webpage-bg">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-8-fullhd is-10-widescreen is-12-tablet">
                    <h2 class="title">Dein Partner rund ums Web!</h2>
                    <div class="content">
                        <p>
                            Ob nur eine kleine Webseite für dein eigenes Unternehmen oder eine skalierbare Webanwendung, ich stehe dir für alle Arten von Projekten im Online-Medienbereich zur Verfügung. Doch nicht als jemand, der einfach nur nach Schema F arbeitet, um den Auftrag so schnell es geht abzuschließen, sondern als Partner und Berater in allen Fragen. Ich möchte, so wie du hoffentlich auch, dass deine Vorstellungen so gut es geht erfüllt werden.
                        </p>
                    </div>

                    <h3 class="title is-4">Deine Wunschseite, bei mir</h3>
                    <div class="content">
                        <p>
                            Ein gut strukturiertes, modernes und benutzerfreundliches Design für deine Besucher und Kundschaft ist ein absolute Muss. So wie bei einem Auto das Zusammenspiel eines schnurrenden Motors und edler Karosserie wichtig ist, ist es bei Webseiten das Back- und Frontend! Keine Idee ist zu ausgefallen, ich setze sie gerne um.
                        </p>
                    </div>
                    <hr class="blue-hr"/>
                    <h3 class="title is-4">Individuelle CMS-Lösungen</h3>
                    <div class="content">
                        <p>
                            Es gibt viele Content Management Systeme. Egal ob Wordpress, Typo3 oder Joomla, alle haben Ihre Vor- und Nachteile. Doch manchmal benötigen Kunden eine eigene individuell gestaltete Lösung, um Projekte genau nach deinen wünschen umgesetzt zu bekommen. In diesem Bereich unterstütze ich dich sehr gerne.
                        </p>
                    </div>
                    <hr class="blue-hr"/>
                    <h3 class="title is-4">Dein eigener Onlineshop</h3>
                    <div class="content">
                        <p>
                            Du hast einige interessante Produkte, die du einer großen Kundschaft anbieten möchtest? Dann ist das World Wide Web genau der richtige Ort dafür und ich stelle dir gerne die passende digitale Verkaufsfläche dafür zur Verfügung.
                        </p>
                    </div>
                    <hr class="blue-hr"/>
                    <h3 class="title is-4">Soziale Medien und Werbung</h3>
                    <div class="content">
                        <p>
                            Soziale Medien und Werbung sind heutzutage nicht mehr aus dem World Wide Web wegzudenken und vor allem bei der Vermarktung von Produkten sind Facebook, Google und Co. ein gerne genutztes Werkzeug. Bei der Integration deines Onlineauftritts in dem Bereich der sozialen Medien und Onlinewerbung stehe ich dir mit Rat und Tat zur Verfügung.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('assets.js')
    <script>
        var scrolled = false;
        checkScroll();

        $(window).on("scroll", function() {
        checkScroll();
        });

        function checkScroll() {
            if (scrolled == false && $(window).scrollTop()) {
                $('#wb-header').addClass('scrolled');
                $('#wb-header').toggleClass('is-primary');
                scrolled = true;
            } else if(scrolled == true && !$(window).scrollTop()) {
                $('#wb-header').removeClass('scrolled');
                $('#wb-header').toggleClass('is-primary');
                scrolled = false;
            }
            return false;
        }
    </script>
@stop