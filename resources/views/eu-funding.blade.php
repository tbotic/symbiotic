@extends('layouts.app')

@section('header')
@include('layouts.header')
@endsection

@section('content')
<main>
    <div class="banner-container">
        <div class="container banner-area">
            <div class="row h-100">
                <div class="col-12 my-auto">
                    <div class="banner-title-area">
                        <h2 class="banner-title">Eu Funding</h2>
                        <p class="banner-subtitle">Home <span><i class="fa fa-angle-right"></i></span> About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-section-title">
                        <p class="subheading">FINANCIRANJE PROJEKTA</p>
                        <h2 class="heading">Projekt je sufinaciran sredstvima Europskog fonda za <span> regionalni razvoj</span></h2>
                    </div>
                </div>
                <div class="col-12">
                    <h6>Korisnik</h6>
                    <p>SymbIoTic  j. d.o.o. , Bjelovar</p>
                </div>
                <div class="col-12">
                    <h6>Naziv projekta</h6>
                    <p>„Prilagodba i komercijalizacija inovativnih uređaja za upravljanje prirodnim nepogodama"</p>
                </div>
                <div class="col-12">
                    <h6>Kratki opis projekta</h6>
                    <p>Svrha projekta je kroz testiranja, pripremu proizvodnje te kroz probnu proizvodnju, lansirati inovativne uređaje za upravljanje prirodnim nepogodama na globalno tržište. Inovativni uređaji se odnose na modularni i satelitski uređaj za detekciju prirodnih nepogoda – poplava, požara, potresa, klizanje zemlje i dr, a ključne funkcionalnosti uređaja odnose se na mjerenje razine vode, uspoređivanje podataka meteoroloških stanica, mjerenje brzine rasta vode, širenja požara, jačinu potresa i mnoge druge.</p>
                </div>
                <div class="col-12">
                    <h6>Ciljevi i očekivani rezultati projekta</h6>
                    <p>Rezultat projekta je komercijalizacija inovativnih uređaja za upravljanje prirodnim nepogodama koji su u prvom redu od društvene potrebe tj. koji doprinose pozitivnim promjenama na razini ekonomskih, društvenih i okolišnih izazova. Ciljevi projekta usmjereni su na lansiranje inovativnih proizvoda na globalno tržište što će doprinijeti komercijalizaciji proizvoda, ostvarenju prepoznatljivosti na tržištu te održiv rast i razvoj poduzeća.</p>
                </div>
                <div class="col-12">
                    <h6>Ukupna vrijednost projekta (u HRK)</h6>
                    <p>1.517.620,80 HR</p>
                </div>
                <div class="col-12">
                    <h6>Iznos koji sufinancira EU</h6>
                    <p>1.200.881,47 HRK</p>
                </div>
                <div class="col-12">
                    <h6>Razdoblje provedbe projekta</h6>
                    <p>1. kolovoza 2019. god.  – 1. lipnja 2021. god.</p>
                </div>
                <div class="col-12">
                    <h6>Kontakt osoba</h6>
                    <p>Davor Predavec, <a href="mailto:davor.predavec@symbiotic.hr">davor.predavec@symbiotic.hr</a></p>
                </div>
                <div class="col-12">
                    <h6>Korisni linkovi</h6>
                    <a href="http://www.strukturnifondovi.hr/">www.strukturnifondovi.hr</a><br>
                    <a href="http://www.europski-fondovi.eu/tags/operativni-program-konkurentnost-i-kohezija">www.europski-fondovi.eu/tags/operativni-program-konkurentnost-i-kohezija</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
@include('layouts.footer')
@endsection