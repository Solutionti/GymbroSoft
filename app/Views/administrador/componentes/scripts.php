<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/simplebar/js/simplebar.min.js"></script>
<script>
  const header = document.querySelector('header.header');
    document.addEventListener('scroll', () => {
      if (header) {
        header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
      }
    });
</script>
<script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/chart.js/js/chart.umd.js"></script>
<script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="https://coreui.io/demos/bootstrap/5.3/free/vendors/@coreui/utils/js/index.js"></script>
<script src="https://coreui.io/demos/bootstrap/5.3/free/js/main.js"></script>
<script></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"496f8c1a159448ef82d6c94971e63824","server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src='fullcalendar/dist/index.global.js'></script>
<script>
    var baseurl = '<?= base_url() ?>';
</script>