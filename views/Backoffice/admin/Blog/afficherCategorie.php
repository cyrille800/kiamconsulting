<?php
session_start();
if(!isset($_SESSION["id_admin"])){
    header("location: ../../../pages_error/404.html");
}
                include "../../../../entities/class_concour.php";
                ?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta name="description" content="Blank page example">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href="../../../assets/Backoffice/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
  <link href="../../../assets/Backoffice/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="../../../assets/Backoffice/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../../assets/Backoffice/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../../assets/Backoffice/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../../assets/Backoffice/css/vendor.bundle.addons.css">

  <link rel="stylesheet" href="../../../assets/Backoffice/css/style2.css">
  <!-- endinject -->
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js">
  </script>
  <script>
    WebFont.load({
      google: {
        "families": ["Poppins:300,400,500,600,700"]
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>
</head>

<body operation="<?php echo (isset($_GET["id"])) ? "modifier" : "ajouter"; ?>" id="<?php echo (isset($_GET["id"])) ? $_GET["id"] : ""; ?>">
<div class="kt-subheader   kt-grid__item bg-white" style="padding:20px;padding-left:40px;" id="kt_subheader">
    <div class="kt-subheader__main">
              <h3 class="kt-subheader__title">
              Catégorie</h3>
              <span class="kt-subheader__separator kt-hidden">
              </span>
              <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home">
                  <i class="la la-shelter" style="font-size:25px;">
                  </i>
                </a>
                <span class="kt-subheader__breadcrumbs-separator">
                </span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                Afficher catégorie                 </a>
                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                Active link</span>
                -->
              </div>
              
            </div>
</div>
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">

     <div class="col-sm-12 grid-margin stretch-card">
       <div id="grid_table"></div>
     </div>




        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.php -->
        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="icon-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- end:: Content -->

    <script>
      var KTAppOptions = {
        "colors": {
          "state": {
            "brand": "#385aeb",
            "metal": "#c4c5d6",
            "light": "#ffffff",
            "accent": "#00c5dc",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995",
            "focus": "#9816f4"
          },
          "base": {
            "label": [
              "#c5cbe3",
              "#a1a8c3",
              "#3d4465",
              "#3e4466"
            ],
            "shape": [
              "#f0f3ff",
              "#d9dffa",
              "#afb4d4",
              "#646c9a"
            ]
          }
        }
      };
    </script>
    <script src="../../../assets/Backoffice/vendors/global/vendors.bundle.js" type="text/javascript">
    </script>
    <script src="../../../assets/Backoffice/js/demo1/scripts.bundle.js" type="text/javascript">
    </script>
    <script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="../../../assets/Backoffice/js/vendor.bundle.base.js"></script>
    <script src="../../../assets/Backoffice/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../assets/Backoffice/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../assets/Backoffice/js/file-upload.js"></script>
    <script src="../../../assets/Backoffice/js/typeahead.js"></script>
    <script src="../../../assets/Backoffice/js/select2.js"></script>
    <script src="../../../assets/Backoffice/js/tinymce.min.js"></script>
  <!-- <script src="../../../assets/Backoffice/js/theme.js"></script> -->
  <script src="../../../assets/Backoffice/js/editorDemo.js"></script>
  <script src="../../../assets/Backoffice/js/js-grid.js"></script>
  <script src="../../../assets/Backoffice/js/db.js"></script>
    <!-- End custom js for this page-->
    <script>
      $(window).on("load", function() {
        $(".preload").fadeOut("fast");
      })
        $('#grid_table').jsGrid({

        width: "100%",
        height: "600px",

        filtering: true,
        inserting: false,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 10,
        pageButtonCount: 5,
        deleteConfirm: "Vouslez vous vraiment supprimer ces données?",

        controller: {
            loadData: function(filter) {

                return $.ajax({
                    type: "GET",
                    url: "Categorie.php",
                    data: filter,
                });
            },
            updateItem: function(item) {
                return $.ajax({
                    type: "PUT",
                    url: "Categorie.php",
                    data: item
                    
                });
            },
            deleteItem: function(item) {
                return $.ajax({
                    type: "DELETE",
                    url: "Categorie.php",
                    data: item
                });
            },
        },

        fields: [{
                name: "id",
                type: "hidden",
                css: 'hide',
            },
          
            {
                name: "titre",
                type: "text",
                width: 150,
                validate: "required"
            },
           
            {
                name: "Date",
                type: "text",
                width: 50,

            },
        
            {
                type: "control"
            }
        ],
        onDataLoaded: function(items) {
        console.log($("#grid_table").find("th"));
        $("#grid_table").find("th").css({
          "background-color":"#343a40",
          "border-color":"#454d55",
          "color":"white",
        })
        

      }, 

    });
    </script>
</body>

</html>