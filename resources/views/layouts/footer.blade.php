{{-- resources/views/layouts/footer.blade.php --}}

<footer class="main-footer">
    <div class="container">
        <div class="footer-wrapper">
            
            {{-- KOLOM 1: Brand Info --}}
            <div class="col-info">
                
                <a href="/" class="footer-logo">
                    {{-- Gambar ikon logo --}}
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="LaslesVPN Icon">
                    {{-- Teks Brand Info --}}
                    <span>Lasles<span class="vpn">VPN</span></span> 
                </a>
                
                <p>
                    LaslesVPN is a private virtual network that has unique features and has high security.
                </p>
                
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                
                <p class="copyright">
                    ©2024 LaslesVPN
                </p>
            </div>

            {{-- KOLOM 2-4: Link Pages --}}
            <div class="col-links">
                
                {{-- Kolom 2: Product --}}
                <div class="footer-column">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Server</a></li>
                        <li><a href="#">Countries</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                
                {{-- Kolom 3: Engage --}}
                <div class="footer-column">
                    <h4>Engage</h4>
                    <ul>
                        <li><a href="#">LaslesVPN ?</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Tutorials</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                
                {{-- Kolom 4: Earn Money --}}
                <div class="footer-column">
                    <h4>Earn Money</h4>
                    <ul>
                        <li><a href="#">Affiliate</a></li>
                        <li><a href="#">Become Partner</a></li>
                    </ul>
                </div>
                
            </div>
            
        </div>
    </div>
</footer>