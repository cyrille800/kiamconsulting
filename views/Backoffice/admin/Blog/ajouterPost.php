<?php
  include "../../../../entities/class_concour.php";
  config::connexion();
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

  <!-- begin:: Subheader -->
  <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-subheader__main">
      <h3 class="kt-subheader__title">
        Blank Page</h3>
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
          Features </a>
        <span class="kt-subheader__breadcrumbs-separator">
        </span>
        <a href="" class="kt-subheader__breadcrumbs-link">
          Misc </a>
        <span class="kt-subheader__breadcrumbs-separator">
        </span>
        <a href="" class="kt-subheader__breadcrumbs-link">
          Blank Page </a>
        <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
								Active link</span>
								-->
      </div>

    </div>
    <div class="kt-subheader__toolbar">
      <div class="kt-subheader__wrapper">
        <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="top">
          <a href="#" class="btn btn-icon btn btn-label btn-label-brand btn-bold" data-toggle="dropdown" data-offset="0px,0px" aria-haspopup="true" aria-expanded="false">
            <i class="la la-plus">
            </i>
          </a>
        </div>

      </div>
    </div>
  </div>
  <!-- end:: Subheader -->
  <!-- begin:: Content -->
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description">
                  Basic form elements
                </p>
                <form class="forms-sample" id="Post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="Titre">Titre</label>
                    <input type="text" class="form-control" id="Titre" placeholder="Titre" name="Titre">
                  </div>
                  <div class="form-group">
                    <label for="Date">Date de publication</label>
                    <input type="datetime-local" class="form-control" id="Date" placeholder="dd/mm/yyyy" name="Date">
                  </div>

                  <div class="form-group">
                    <label for="Categorie">Catégorie</label>
                    <select class="form-control"  name="Categorie" id="Categorie">
                      <?php
                      $sql = "select titre from categorie";
                      $requette = config::$bdd->prepare($sql);
                      $requette->execute();
                      $rows = $requette->fetchAll();
                      foreach ($rows as $key => $rows) {
                        ?>
                      <option><?= $rows["titre"] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form_group">
                    <label for="image">Image</label>
                    <input type="file" class="dropify" name="image" id="image">
                  </div>
                  <div class="form_group mt-3 ">
                    <label for="introduction">introduction</label>
                    <input type="text"  class="form-control" name="introduction" id="introduction">
                  </div>
                  <div class="form-group mt-3">
                    <label for="Contenu">Contenu</label>
                    <textarea id='tinyMceExample' name="Contenu">
                    Edit your content here...
                  </textarea>
                  </div>

                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../../assets/Backoffice/js/demo1/pages/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js"></script>
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
    <script src="../../../assets/Backoffice/js/tinymce/tinymce.min.js"></script>
    <script src="../../../assets/Backoffice/js/tinymce//themes/modern/theme.js"></script>
    <!-- <script src="../../../assets/Backoffice/js/theme.js"></script> -->
    <script src="../../../assets/Backoffice/js/editorDemo.js"></script>
    <script src="../../../assets/Backoffice/js/dropify.js"></script>

    <!-- End custom js for this page-->
    <script>
      $(window).on("load", function() {
        $(".preload").fadeOut("fast");
      })
      $(function() {
            $.validator.setDefaults({
              errorClass: 'invalid-feedback',
              highlight: function(element) {
                $(element).addClass('is-invalid');
              },
              unhighlight: function(element) {
                $(element).removeClass('is-invalid');
              },
              errorPlacement: function(error, element) {
                if (element.prop('type') === 'text' || element.prop('type') === 'mail' || element.prop('type') === 'password') {
                  element.after(error);
                } else if (element.prop('type') === 'radio') {
                  // element.closest('[name="username"]').before(error);
                  element.parent().parent().after(error);
                }
              }

            });
            $("#Post").validate({
                onkeyup: (element) => {
                  $(element).valid();
                },

                rules: {
                  Titre: {
                    required: true,
                    remote: {
                      url: "../../../../entities/remoteTitrePost.php",
                      type: "post",
                      data: {
                        Titre: function() {
                          return $("#Titre").val();
                        }
                      }
                    }

                  },

                  Date: {
                    required: true,
                  },
                  Contenu: {
                    required: true,
                  },
                  introduction:{
                    required:true,
                  },

                },
                messages: {
                  Titre: {
                    required: 'ce champ est requis.',
                    remote: 'Titre déjà utilisé.',
                  },
                  Date: {
                    required: 'ce champ est requis',
                  },
                  Contenu: {
                    required: 'ce champ est requis',
                  },
                  introduction: {
                    required: 'ce champ est requis',
                  },

                },
                submitHandler: function(form, e) {
                  e.preventDefault();
                  var file = $("#image")[0].files[0];
                  
                  var formData = new FormData(form);
                  // formData.append('image',file); 
                  // formData.append('operation', "inserer");
                  // formData.append('Titre', $("#Titre").val()); 
                  // formData.append('Date', $("#Date").val());
                  //  formData.append('Categorie', $('#Categorie option:selected').val()); 
                  //  formData.append('introduction', $('#introduction').val()); 
                   tinyMCE.activeEditor.getContent(); tinyMCE.activeEditor.getContent({
                      format: 'raw'
                    }); 
                    formData.append('Contenu', tinyMCE.get('tinyMceExample').getContent()); 
                    formData.append('auteur', "romualdjunior"); 
                    $.ajax({
                      type: "POST",
                      url: "../../../../entities/Post.php",
                      data: formData,
                      cache: false,
                      processData: false,
                       contentType: false,
                      success: function(data) {
                        console.log(data);
                      },
                    })
                    .fail(function() {
                      alert("l'envoi n'a pas marche");

                    })

                    return false;
                  }


                })
                console.log($("#tinyMceExample").width());
                

            })
    </script>
</body>

</html>