<!-- FOOTER -->
<footer class="gradient py-[19px] px-5 text-center flex items-center justify-center">
    <img src="{{asset('assets/images/footer-logo.png')}}" alt="footer" class="h-[52px] w-auto">
</footer>
<!-- END FOOTER -->

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
    function sendEmail() {
        alert("mail sent successfully")
    }
</script>
<script>
    AOS.init({
        once: true
    });

    let currentVideo;

    function loadVideo(videoId, containerId) {
        // Hide thumbnail
        // document.getElementById(containerId).style.display = 'none';

        // Create and append iframe
        if (currentVideo) {
            currentVideo.pause();
        }
        const video = document.createElement('video');
        video.style.width = '100%'; // Set width to 100%
        video.style.height = '100%';
        video.autoplay = true;
        video.controls = true; // Show controls (play, pause, etc.)
        video.src = "./assets/video/test.mp4";

        const another = document.querySelectorAll('.video-frame')
        for (let i = 0; i < another.length; i++) {
            another[i].innerHTML = null;
            another[i].style.zIndex = 0;
            const imgList = another[i].parentElement.getElementsByTagName('img')
            console.log(imgList);
            for (let i = 0; i < imgList.length; i++) {
                imgList[i].style.opacity = '1';
            }
        }

        setTimeout(() => {
            const elVideo = 'video-container-' + containerId;
            const parentDiv = document.getElementById(containerId);
            const childImages = parentDiv.getElementsByTagName('img');

            for (let i = 0; i < childImages.length; i++) {
                childImages[i].style.opacity = '0';
            }

            document.getElementById(elVideo).style.zIndex = 20;
            document.getElementById(elVideo).appendChild(video);
        }, 100)
    }
</script>
</body>

</html>
