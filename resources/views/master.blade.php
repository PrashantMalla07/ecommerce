<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Project</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:500px;
        padding-top:100px;
    }
    img.slider-img
    {
        height:400px !important;
    }
    .custom-product{
       height:600px 
    }
    .carousel {
    margin-left: auto;
    margin-right: 0;
}
        .carousel-caption {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 10;
    padding: 20px;
    width: 50%;
    text-align: center;
    background-color:  !important;
    color: black;
    font-size:30px;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}

.carousel-caption .slider-text {
    
    text-align: center; /* Center the text within the caption */
    padding: 10px;
    border-radius: 5px;
}
.trending-img{
    height: 100px;
}
.trending-item{
    float: left;
    width: 20%;
    padding: 20px;
}
.trending-block{
    margin:30px;
}
.detail-img{
    height: 200px;
}
.search-box{
    width: 500px !important;
}
.search-item {
   
    display: flex;
    align-items: center;
}

</style>
</html>