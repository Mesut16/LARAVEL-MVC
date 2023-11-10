<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    {{-- <a href="{{route('')}}" class="logo d-flex align-items-center"> --}}
                    <span><strong>Çalışma Saatleri<br></strong></span>
                    {{-- </a> --}}
                    <table class="table" style="background-color: rgb(114, 167, 167)">
                        <thead>
                            <tr>
                                <th scope="col">Gün</th>
                                <th scope="col">Saat</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Pazartesi</td>
                                <td>09:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Salı</td>
                                <td>09:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Çarşamba</td>
                                <td>09:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Perşembe</td>
                                <td>09:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Cuma</td>
                                <td>09:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>Cumartesi</td>
                                <td>Kapalı</td>
                            </tr>
                            <tr>
                                <td>Pazar</td>
                                <td>Kapalı</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="social-links d-flex  mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Sayfalar</h4>
                    <ul>
                        <li><i class="bi bi-dash"></i> <a href="{{url('/')}}">Anasayfa</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('about')}}">Hakkında</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('tedavi')}}">Tedavilerimiz</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('iletisim')}}">İletişim</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('frontend.randevu')}}">Randevu Al</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Tedaviler</h4>
                    <ul>
                        <li><i class="bi bi-dash"></i> <a href="{{route('tedavi1')}}">ORTOGNATİK CERRAHİ</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('tedavi3')}}">YETİŞKİNLERDE ORTODONTİK TEDAVİ</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('tedavi4')}}">ÇOCUKLARDA TEDAVİ</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('tedavi6')}}">KAPAKLI BRAKETLER</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('tedavi2')}}">ÇENE EKLEMİ</a></li>
                        <li><i class="bi bi-dash"></i> <a href="{{route('tedavi5')}}">ESTETİK BRAKETLER</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>İletişim</h4>
                    <p>
                        DOĞANBEY MH. 1. <br>
                        DOĞANBEY SK. BERK İŞHANI <br>
                        NO:1/203 Kat:2 <br>
                        Osmangazi | BURSA | TÜRKİYE <br>
                        <strong>Telefon:</strong> 0850 888 6297<br>
                        <strong>Email:</strong> uludagbilisim@uludagbilisim.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Mesut</span></strong>. Tüm hakları saklıdır
            </div>
            <div class="credits">
                Designed by Mesut YILDIZ
            </div>
        </div>
    </div>
</footer>
