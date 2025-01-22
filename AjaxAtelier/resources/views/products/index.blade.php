@extends('products._layouts.app')
@section('content')


<a id="show" href="{{route('products.create')}}"><button>create product</button></a>


@endsection


@section('script')
<script>
        $(document).ready(function () {
        $(document).on('click', '#show', function (e) {
            e.preventDefault();

            let url = $(this).attr('href');

            $.ajax({
                type: "GET",
                url: url,
                success: function (res) {
                    bootbox.dialog({
                        title: "Create Producte",
                        message: "<div class='createForm'></div>",

                    });

                    $('.createForm').html(res);
                }
            });
        });
    });


    $(document).on('submite','#addProduct', function(e){
        e.preventDefault();


        let formData = new FormData($('#addProduct')[0]);

        $.ajax({
            type: 'POST',
            url: "{{route('products.store')}}",
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                
            }
        })
    })
</script> 

@endsection