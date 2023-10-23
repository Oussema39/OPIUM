<script src="{{URL::asset('vitrine/assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{URL::asset('vitrine/assets/js/plugins.js')}}"></script>
<script src="{{URL::asset('vitrine/assets/js/dsn-grid.js')}}"></script>
<script src="{{URL::asset('vitrine/assets/js/custom.js')}}"></script>
<script>
    $(document).on("change","#date",function(e){
    var date=e.target.value;
    var url="{{ url('/Evennement')}}"+'/'+date;
    $.get(url, function(data){
        if(data.length >= 1){
            $.each(data,function(index,attrObj){
                $('#event').val(attrObj.nom);
                    $('#id_event').val(attrObj.id);
        })

        }else{
            $('#event').val("Aucun événnement");
                
        }
        
        
    });
    });


</script>	