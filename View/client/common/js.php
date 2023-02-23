<script src="template/client/assets/js/site.min.js"></script>
<script src="template/client/libs/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script>
<script src="template/client/assets/js/plugins/fullscreen.js"></script>
<script src="template/client/libs/list.js/dist/list.js"></script>
<script src="template/client/assets/js/plugins/musicapp.js"></script>
<script src="template/client/libs/plyr/dist/plyr.polyfilled.min.js"></script>
<script src="template/client/libs/wavesurfer.js/dist/wavesurfer.min.js"></script>
<script src="template/client/libs/plyrist/src/plyrist.js"></script>
<script src="template/client/assets/js/plugins/plyr.js"></script>
<script src="template/client/libs/slick-carousel/slick/slick.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>