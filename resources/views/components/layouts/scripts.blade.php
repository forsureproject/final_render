<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sly/1.6.1/sly.min.js"
        integrity="sha512-uR46GOwRUepFi2dzcatO3qpr4onAj46VC9ltPFIwaX8YXl5O18nVT/JnJZY7yqrrKUP0ngD/YjuatsJqCDpYyg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="js/animsition.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"
        integrity="sha512-pYd2QwnzV9JgtoARJf1Ui1q5+p1WHpeAz/M0sUJNprhDviO4zRo12GLlk4/sKBRUCtMHEmjgqo5zcrn8pkdhmQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/stellar-base/8.2.2/stellar-base.min.js"
        integrity="sha512-tp5/CyNp7vtqAmbdDrDmAkwse5eHYQtGnswNmGEPHgqpAWD6LJ3XifMnDOQ1OAjueJcyaHiR1xFhjbALa3OalA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"
        integrity="sha512-HYG9E+RmbXS7oy529Nk8byKFw5jqM3R1zzvoV2JnltsIGkK/AhZSzciYCNxDMOXEbYO9w6MJ6SpuYgm5PJPpeQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <script src="js/isotope.pkgd.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/js/plugins.js') }}"></script>




    <!-- Slider revolution -->
    <script src="{{ asset('js/rev-slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/rev-slider/jquery.themepunch.revolution.min.js') }}"></script>


    <!-- Slider revolution 5x Extensions   -->
    <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/rev-slider/revolution.extension.video.min.js"></script>


    <!-- Scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/rev-slider-init.js') }}"></script>
    <script>
        // Get the current year using JavaScript
        const currentDateYear = new Date().getFullYear();

        // Update all span elements with the class "currentYear" with the current year
        const elements = document.getElementsByClassName("currentYear");
        for (let i = 0; i < elements.length; i++) {
            elements[i].innerHTML = currentDateYear;
        }
    </script>
</div>
