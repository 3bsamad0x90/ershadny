<div class="footer_bottom mt-4" style="bottom: 0; left: 0; width: 100%">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="crp fs-5">© Copyrights 2022</p>
        </div>
      </div>
    </div>
  </div>

  <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
  <!-- ALL JS FILES -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap2.bundle.min.js') }}"></script>
  <script src="{{ asset('js/all.min.js') }}"></script>
  <!-- ALL PLUGINS -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
  <script src="{{ asset('js/slider-index.js') }}"></script>
  <script src="{{ asset('js/smoothscroll.js') }}"></script>
  <script src="{{ asset('js/form-validator.min.js') }}"></script>
  <script src="{{ asset('js/contact-form-script.js') }}"></script>
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/images-loded.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
  <script>
    $("#example").DataTable({
      aLengthMenu: [
        [5, 10, 25, -1],
        [5, 10, 25, "All"],
      ],
      iDisplayLength: 10,

      language: {
        sProcessing: "جارٍ التحميل...",
        sLengthMenu: "أظهر _MENU_ مدخلات",
        sZeroRecords: "لم يعثر على أية سجلات",
        sInfo: "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
        sInfoEmpty: "يعرض 0 إلى 0 من أصل 0 سجل",
        sInfoFiltered: "(منتقاة من مجموع _MAX_ مُدخل)",
        sInfoPostFix: "",
        sSearch: "ابحث:",
        sUrl: "",
        oPaginate: {
          sFirst: "الأول",
          sPrevious: "السابق",
          sNext: "التالي",
          sLast: "الأخير",
        },
      },
      columnDefs: [
        { searchable: true, targets: 0 },
        { searchable: true, targets: 1 },
        { searchable: true, targets: 2 },
        { searchable: false, targets: 3 },
        { searchable: false, targets: 4 },
        { searchable: false, targets: 5 },
        { searchable: true, targets: 6 },
        { searchable: true, targets: 7 },
      ],
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#success-alert").hide();
            $("#myWish").reload(function showAlert() {
                $("#success-alert").fadeTo(6000, 500).slideUp(500, function() {
                $("#success-alert").slideUp(5000, 500);
                });
            });
        });
    </script>
</body>
</html>
