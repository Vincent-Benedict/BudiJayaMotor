{{-- Ajax Search --}}
<script>


    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#inputSearch').on('keyup', function () {
        $inputSearch = $(this).val();

        if($inputSearch == ''){
            $('#searchResult').html('');
            $('#searchResult').hide();
        }
        else{

            $.ajax({
                method:"post",
                url:'search',
                data:JSON.stringify({
                    inputSearch:$inputSearch
                }),
                headers:{
                    'Accept':'application/json',
                    'Content-Type':'application/json'
                },
                success: function (data) {
                    var searchResultAjax = '';
                    data = JSON.parse(data);

                    $('#searchResult').show();

                    for (let i=0; i<data.length; i++){
                        searchResultAjax += "<a href=\"/detail_car/"+data[i].id+"\">\n" +
                            "                <div class=\"Item\">\n" +
                            "                 <img width=\"200px\" src=\"/storage_upload/"+data[i].image+"\" alt=\"\">\n" +
                            "                <div class='Item-right'>" +
                            "                    <p>"+ data[i].name +"</p>\n" +
                            "                    <p>"+ data[i].get_type.type_name +"</p>\n" +
                            "                </div>\n" +
                            "                </div>\n" +
                            "            </a>"
                    }

                    $('#searchResult').html(searchResultAjax);

                }
            })
        }

    })

</script>