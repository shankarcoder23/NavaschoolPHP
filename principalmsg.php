<?php include 'assets/include/Header.php'; ?>

<!-- Principal Message Section -->
<!-- Principal Message Section -->
<section class="principal-section py-5">
    <div class="container">

        <div class="row align-items-stretch g-4">

            <!-- Image Side -->
            <div class="col-lg-4 col-md-5">
                <div class="principal-img-card h-100">
                    <img src="assets/image/about/principal.jpg" alt="Principal Image">
                    <h5 class="mt-3 mb-0">Dr. Principal Name</h5>
                    <small class="text-muted">Principal</small>
                </div>
            </div>

            <!-- Message Side -->
            <div class="col-lg-8 col-md-7">
                <div class="message-card h-100">

                    <div class="message-header">
                        <h4>Principal Message</h4>
                    </div>

                    <div class="message-body">
                        <p id="typingText"></p>

                        <!-- Long static content (always visible after typing ends) -->
                        <div id="extraText" class="extra-text">

                            <p>
                                Education is not just about academic success but also about building strong values,
                                discipline, and responsibility. Our school is committed to nurturing students with
                                modern skills while keeping cultural and ethical values intact.
                            </p>

                            <p>
                                We focus on overall development through academics, sports, co-curricular activities,
                                and technology-based learning. Every child is unique, and we ensure they receive
                                personalized guidance and encouragement.
                            </p>

                            <p>
                                Our dedicated teachers work tirelessly to create a positive learning environment where
                                curiosity is encouraged and creativity is celebrated.
                            </p>

                            <p class="signature">
                                Warm regards,<br>
                                <strong>Dr. Principal Name</strong>
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Typing Animation Script -->
<script>
const text = `Welcome to our institution. We believe in holistic education that nurtures both academic excellence and character building. Our goal is to empower students with knowledge, creativity, and discipline to face future challenges confidently.`;

let i = 0;
const speed = 18;

function typeWriter() {
    if (i < text.length) {
        document.getElementById("typingText").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    } else {
        // Show full long content after typing completes
        document.getElementById("extraText").style.display = "block";
    }
}

window.onload = typeWriter;
</script>

<?php include 'assets/include/Footer.php'; ?>