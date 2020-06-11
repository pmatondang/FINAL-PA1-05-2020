<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
    include 'commons/header.php';
  ?>
  <title>Komentar</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   

</head>

<body id="page-top">
  <!-- Page Wrapper -->
    <div id="wrapper">  
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Komentar</h1>
            <p class="mb-4"></p>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="backgroud-color:silver;">
                    <h6 class="m-0 font-weight-bold text-primary">Data Komentar Pengguna</h6>
                </div>
                <div class="card-body" style="background-color:silver;">
                    <div class="table-responsive">
                        <div class="container">
                            <div class="row mb-12 align-items-end">
                                <div class="col-md-12" data-aos="fade-up">
                                    <i class="fas fa-fw fa-bell"></i>
                                    <span class="h3"> Berikan Komentarmu</span><br><br>
                                    <div class="container">
                                        <form method="POST" id="comment_form">
                                        <div class="form-group" style="backgroud-color:silver;">
                                            <input style="border-radius:10px;color:black" type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
                                        </div>
                                        <div class="form-group">
                                            <textarea style="border-radius:10px;color:black" name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="8"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="comment_id" id="comment_id" value="0" /><br>
                                            <input style="border-radius:15px;" type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                        </div>
                                        </form>
                                        <span id="comment_message"></span><br/>
                                        <div id="display_comment"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
        include 'commons/footer.php'
      ?>
      <!-- End of Footer -->
      <script>
            $(document).ready(function(){
                $('#comment_form').on('submit', function(event){
                    event.preventDefault();
                    var form_data = $(this).serialize();
                    $.ajax({
                        url:"add_comment.php",
                        method:"POST",
                        data:form_data,
                        dataType:"JSON",
                        success:function(data){
                            if(data.error != ''){
                                $('#comment_form')[0].reset();
                                $('#comment_message').html(data.error);
                                $('#comment_id').val('0');
                                load_comment();
                            }
                        }
                    })
                });
                load_comment();
                
                function load_comment(){
                    $.ajax({
                        url:"fetch_comment.php",
                        method:"POST",
                        success:function(data){
                            $('#display_comment').html(data);
                        }
                    })
                }
                $(document).on('click', '.reply', function(){
                    var comment_id = $(this).attr("id");
                    $('#comment_id').val(comment_id);
                    $('#comment_name').focus();
                });
            });
        </script>


</body>

</html>
