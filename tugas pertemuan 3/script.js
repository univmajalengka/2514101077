/* =========================================================
   Bukit Pamoroan - script.js
   Tugas Pertemuan 3
   Nama  : Faiz Ahmad Risqullah
   NPM   : 2514101077
   Prodi : Informatika - Fakultas Teknik, Universitas Majalengka
   ========================================================= */

(function () {
  "use strict";

  /* ---------- 1. NAVBAR: solid saat di-scroll ---------- */
  var navbar = document.getElementById("navbar");
  var toTop = document.getElementById("toTop");

  function onScroll() {
    var y = window.scrollY || document.documentElement.scrollTop;
    if (navbar) navbar.classList.toggle("scrolled", y > 20);
    if (toTop) toTop.classList.toggle("show", y > 500);
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* ---------- 2. MENU MOBILE ---------- */
  var navToggle = document.getElementById("navToggle");
  var navMenu = document.getElementById("navMenu");

  if (navToggle && navMenu) {
    navToggle.addEventListener("click", function () {
      var open = navMenu.classList.toggle("open");
      navToggle.classList.toggle("open", open);
      navToggle.setAttribute("aria-expanded", open ? "true" : "false");
    });

    // tutup menu setelah link diklik
    navMenu.addEventListener("click", function (e) {
      if (e.target.closest("a")) {
        navMenu.classList.remove("open");
        navToggle.classList.remove("open");
        navToggle.setAttribute("aria-expanded", "false");
      }
    });

    // tutup menu saat klik di luar
    document.addEventListener("click", function (e) {
      if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
        navMenu.classList.remove("open");
        navToggle.classList.remove("open");
      }
    });
  }

  /* ---------- 3. SCROLL SPY: tandai menu aktif ---------- */
  var sections = Array.prototype.slice.call(document.querySelectorAll("section[id]"));
  var navLinks = Array.prototype.slice.call(document.querySelectorAll(".nav-link"));

  function spy() {
    var pos = (window.scrollY || document.documentElement.scrollTop) + 120;
    var current = sections.length ? sections[0].id : "";

    sections.forEach(function (sec) {
      if (sec.offsetTop <= pos) current = sec.id;
    });

    navLinks.forEach(function (link) {
      link.classList.toggle("active", link.getAttribute("href") === "#" + current);
    });
  }
  window.addEventListener("scroll", spy, { passive: true });
  window.addEventListener("load", spy);
  spy();

  /* ---------- 4. LIGHTBOX GALERI ---------- */
  var galleryImgs = Array.prototype.slice.call(document.querySelectorAll(".gallery-item img"));
  var lb = document.getElementById("lightbox");
  var lbImg = document.getElementById("lightboxImg");
  var lbCap = document.getElementById("lightboxCaption");
  var lbClose = document.getElementById("lightboxClose");
  var lbPrev = document.getElementById("lightboxPrev");
  var lbNext = document.getElementById("lightboxNext");
  var lbIndex = 0;

  function openLightbox(i) {
    if (!lb || !galleryImgs.length) return;
    lbIndex = (i + galleryImgs.length) % galleryImgs.length;
    var img = galleryImgs[lbIndex];
    lbImg.src = img.getAttribute("src");
    lbImg.alt = img.getAttribute("alt") || "";
    lbCap.textContent = img.getAttribute("data-caption") || img.getAttribute("alt") || "";
    lb.classList.add("show");
    document.body.style.overflow = "hidden";
  }

  function closeLightbox() {
    if (!lb) return;
    lb.classList.remove("show");
    document.body.style.overflow = "";
  }

  galleryImgs.forEach(function (img, i) {
    var card = img.closest(".gallery-item");
    if (!card) return;
    card.style.cursor = "zoom-in";
    card.addEventListener("click", function () { openLightbox(i); });
    card.setAttribute("tabindex", "0");
    card.addEventListener("keydown", function (e) {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        openLightbox(i);
      }
    });
  });

  if (lbClose) lbClose.addEventListener("click", closeLightbox);
  if (lbPrev) lbPrev.addEventListener("click", function () { openLightbox(lbIndex - 1); });
  if (lbNext) lbNext.addEventListener("click", function () { openLightbox(lbIndex + 1); });

  if (lb) {
    lb.addEventListener("click", function (e) {
      if (e.target === lb) closeLightbox();
    });
  }

  document.addEventListener("keydown", function (e) {
    if (!lb || !lb.classList.contains("show")) return;
    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") openLightbox(lbIndex - 1);
    if (e.key === "ArrowRight") openLightbox(lbIndex + 1);
  });

  /* ---------- 5. PEMILIH VIDEO ---------- */
  var mainVideo = document.getElementById("mainVideo");
  var thumbs = Array.prototype.slice.call(document.querySelectorAll(".video-thumb"));
  var downloadBtn = document.querySelector('a[download][href*="media/video"]');

  thumbs.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var src = btn.getAttribute("data-src");
      var poster = btn.getAttribute("data-poster");
      if (!src || !mainVideo) return;

      mainVideo.pause();
      mainVideo.setAttribute("poster", poster);
      mainVideo.innerHTML = '<source src="' + src + '" type="video/mp4">';
      mainVideo.load();

      thumbs.forEach(function (b) { b.classList.remove("active"); });
      btn.classList.add("active");

      if (downloadBtn) downloadBtn.setAttribute("href", src);
    });
  });

  /* ---------- 6. REVEAL ON SCROLL ---------- */
  var revealEls = Array.prototype.slice.call(document.querySelectorAll(".reveal"));

  if ("IntersectionObserver" in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });

    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add("visible"); });
  }

  /* ---------- 7. FORM BOOKING ---------- */
  var form = document.getElementById("bookingForm");
  var note = document.getElementById("formNote");
  var dateInput = document.getElementById("tanggal");

  // batas minimum tanggal = hari ini
  if (dateInput) {
    var today = new Date();
    var iso = today.getFullYear() + "-" +
      String(today.getMonth() + 1).padStart(2, "0") + "-" +
      String(today.getDate()).padStart(2, "0");
    dateInput.setAttribute("min", iso);
  }

  if (form && note) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      var nama = (document.getElementById("nama") || {}).value || "";
      note.textContent = "Terima kasih, " + nama +
        "! Permintaan booking Anda sudah kami terima. Tim kami akan menghubungi Anda segera.";
      note.classList.add("show");
      form.reset();
      note.scrollIntoView({ behavior: "smooth", block: "center" });
    });
  }

  /* ---------- 8. TOMBOL KEMBALI KE ATAS ---------- */
  if (toTop) {
    toTop.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
})();