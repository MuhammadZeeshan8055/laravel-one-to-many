<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dynamic Inpurt</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>


    <div class="container">

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

        <button class="btn btn-warning mb-5 addField">Add Fields</button>

        <form action="/saveData" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="row firstRow">
                    <div class="col-md-6 form-group">
                        <input type="text" name="names[]" required placeholder="Enter Text" class="w-100">
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="file" name="filess[]" required class="w-100">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>

    <script>
        $(document).ready(function(){

            //FOR ADD ROWS
            $('.addField').click(function(){
                $('.firstRow').parent().append(`
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="names[]" required placeholder="Enter Text" class="w-100">
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="file" name="filess[]" required class="w-100">
                        </div>
                        <div class="col-md-2 form-group">
                            <button type="button" class="btn btn-danger deleteRow">Remove</button>
                        </div>
                    </div>
                `);
            });

            //FOR DELETE ROWS
            $(document).on('click','.deleteRow',function(){
                $(this).parent().parent().remove();
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
