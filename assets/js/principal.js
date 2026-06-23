const text = `Welcome to our institution. We believe in holistic education that nurtures both academic excellence and character building. Our goal is to empower students with knowledge, creativity, and discipline to face future challenges confidently.

We continuously strive to provide a safe, inclusive, and innovative learning environment where every student can grow and achieve their full potential.`;

let i = 0;
const speed = 20;

function typeWriter() {
    if (i < text.length) {
        document.getElementById("typingText").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

window.onload = typeWriter;