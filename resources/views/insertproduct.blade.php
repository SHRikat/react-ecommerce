<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel and react Assignment-03</title>
  <style>
body{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 40%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 2rem;
    width: 27%;
    margin-top: -3%;
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
.contact-form.form-control{
    text-align: center;
}
  </style>  
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://www.macworld.com/wp-content/uploads/2023/06/Apple-New-Products-2023-1.jpg?quality=50&strip=all" alt="rocket_contact"/>
            </div>
            <form action="{{url('/')}}/submitinfo" method="post" >
                @csrf
                <h3>Add Product</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input  type="text" name="name" class="form-control " placeholder="Product Name *" value="" />
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Product Description *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" placeholder="Product Price in USD *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Save" />
                        </div>
                    </div>  
                </div>
            </form>
</div>
</body>
</html>