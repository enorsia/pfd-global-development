 <!--- Toggler close icon close button show js code-->
 <script>
    $(document).ready(function() {
        $(".navbar-toggler").click(function() {
            $(this).toggleClass("collapsed");
        });
    });
</script>

<!-- Header fixed js codeee-->
<script>
    window.addEventListener("scroll", function() {
        var header = document.getElementById("header");
        if (window.scrollY > 200) {
            header.classList.add("header-fixed");
        } else {
            header.classList.remove("header-fixed");
        }
    });
</script>

<!-- Bottom to top js code-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        window.onscroll = function() {
            if (
                document.body.scrollTop > 300 ||
                document.documentElement.scrollTop > 300
            ) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };

        scrollToTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    });
</script>

<!-- Click to go the section js code -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const header = document.getElementById("header");
        const navbarSupportedContent = document.getElementById(
            "navbarSupportedContent"
        );
        const navLinks = document.querySelectorAll(
            ".nav-link[data-target], .dropdown-item[data-target]"
        );

        navLinks.forEach((link) => {
            link.addEventListener("click", function(event) {
                event.preventDefault();

                const targetId = link.getAttribute("data-target");
                const targetSection = document.getElementById(targetId);

                if (targetSection) {
                    navbarSupportedContent.classList.add("hide");
                    const headerHeight = header.offsetHeight;
                    const targetPosition = targetSection.offsetTop;

                    window.scrollTo({
                        top: targetPosition - headerHeight,
                        behavior: "smooth",
                    });
                }
            });
        });
    });
</script>

<!--- Tab list section js code -->
<script>
    $(".sexytabs").tabs({
        show: {
            effect: "slide",
            direction: "left",
            duration: 200,
            easing: "easeOutBack",
        },
        hide: {
            effect: "slide",
            direction: "right",
            duration: 200,
            easing: "easeInQuad",
        },
    });
</script>
