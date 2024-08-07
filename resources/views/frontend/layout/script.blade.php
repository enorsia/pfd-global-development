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
 <!-- Form validation js code -->
 <script>
    document.getElementById("name").addEventListener("input", function () {
      validateName();
    });

    document.getElementById("email").addEventListener("input", function () {
      validateEmail();
    });

    document.getElementById("message").addEventListener("input", function () {
      validateMessage();
    });

    document
      .getElementById("contactForm")
      .addEventListener("submit", function (event) {
        event.preventDefault();
        var isValid = validateName() & validateEmail() & validateMessage();

        if (!isValid) {
            return false;
        }else{
            let formData = {
                _token: $('input[name="_token"]').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                message: $('#message').val()
            };

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function (response) {
                    showAlert('success', response.message);
                    $('#contactForm')[0].reset();
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON.errors;
                    showAlert('danger', 'There were some errors in your submission.');
                }
            });
        }
      });

      function showAlert(type, message) {
            let alertBox = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                                ${message}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>`;
            $('#alert-container').html(alertBox);
            setTimeout(function () {
                $('.alert').alert('close');
            }, 10000);
        }

    function validateName() {
      var name = document.getElementById("name").value.trim();
      var nameError = document.getElementById("name-error");

      if (name.length < 2) {
        nameError.textContent = "Name must be at least 2 characters long.";
        return false;
      } else {
        nameError.textContent = "";
        return true;
      }
    }

    function validateEmail() {
      var email = document.getElementById("email").value.trim();
      var emailError = document.getElementById("email-error");
      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

      if (!emailPattern.test(email)) {
        emailError.textContent = "Please enter a valid email address.";
        return false;
      } else {
        emailError.textContent = "";
        return true;
      }
    }

    function validateMessage() {
      var message = document.getElementById("message").value.trim();
      var messageError = document.getElementById("message-error");

      if (message.length === 0) {
        messageError.textContent = "Message cannot be empty.";
        return false;
      } else {
        messageError.textContent = "";
        return true;
      }
    }
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
