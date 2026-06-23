<?php include 'assets/include/Header.php'; ?>

<!-- ================= NOTICE BOARD SECTION START ================= -->
<section class="notice-board">

  <!-- 🔴 LIVE TICKER -->
  <div class="notice-ticker">
    <div class="ticker-title">Breaking News</div>
    <div class="ticker-wrap">
      <div class="ticker" id="tickerText">
        Admission Open for 2026-27 • Half-Yearly Exam from 10 July • School Closed on 25 June for Festival
      </div>
    </div>
  </div>

  <div class="notice-wrapper">

    <!-- HEADER -->
    <div class="notice-top">
      <h2>Notice Board</h2>

      <!-- FILTER -->
      <div class="filter-buttons">
        <button class="active" onclick="filterNotice('all')">All</button>
        <button onclick="filterNotice('Exam')">Exam</button>
        <button onclick="filterNotice('Holiday')">Holiday</button>
        <button onclick="filterNotice('Event')">Event</button>
        <button onclick="filterNotice('Admission')">Admission</button>
      </div>
    </div>

    <!-- NOTICE LIST -->
    <div class="notice-grid">

      <!-- NOTICE CARD -->
      <div class="notice-card" data-category="Exam" data-date="2026-07-10">
        <div class="tag exam">Exam</div>
        <div class="content">
          <h3>Half-Yearly Exam Schedule</h3>
          <p>Exams will start from 10 July 2026 for all classes.</p>
          <span>23 June 2026</span>
        </div>
      </div>

      <div class="notice-card" data-category="Holiday" data-date="2026-06-25">
        <div class="tag holiday">Holiday</div>
        <div class="content">
          <h3>School Holiday Notice</h3>
          <p>School will remain closed due to local festival.</p>
          <span>22 June 2026</span>
        </div>
      </div>

      <div class="notice-card" data-category="Admission" data-date="2026-08-01">
        <div class="tag admission">Admission</div>
        <div class="content">
          <h3>Admission Open 2026-27</h3>
          <p>New admissions are open for all classes.</p>
          <span>20 June 2026</span>
        </div>
      </div>

      <div class="notice-card" data-category="Event" data-date="2026-07-05">
        <div class="tag event">Event</div>
        <div class="content">
          <h3>Annual Sports Day</h3>
          <p>Annual sports event will be conducted in July.</p>
          <span>18 June 2026</span>
        </div>
      </div>

    </div>
  </div>

</section>
<!-- ================= NOTICE BOARD SECTION END ================= -->

<script>
a
// ================= FILTER =================
function filterNotice(category){
  let cards = document.querySelectorAll(".notice-card");
  let buttons = document.querySelectorAll(".filter-buttons button");

  buttons.forEach(btn => btn.classList.remove("active"));
  event.target.classList.add("active");

  cards.forEach(card => {
    if(category === "all" || card.dataset.category === category){
      card.style.display = "flex";
    }else{
      card.style.display = "none";
    }
  });
}

// ================= AUTO EXPIRY =================
function checkExpiry(){
  let today = new Date();

  document.querySelectorAll(".notice-card").forEach(card => {
    let expiryDate = new Date(card.dataset.date);

    if(expiryDate < today){
      card.style.opacity = "0.4";
      card.style.pointerEvents = "none";
    }
  });
}

checkExpiry();

// ================= OPTIONAL: TICKER UPDATE =================
let ticker = document.getElementById("tickerText");
let messages = [
  "Admission Open for 2026-27",
  "Half-Yearly Exam from 10 July",
  "School Closed on 25 June",
  "Annual Sports Day Coming Soon"
];

let i = 0;
setInterval(() => {
  ticker.innerText = messages[i];
  i = (i + 1) % messages.length;
}, 5000);

</script>


<?php include 'assets/include/Footer.php'; ?>